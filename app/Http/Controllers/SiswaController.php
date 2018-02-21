<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class SiswaController extends Controller
{
    public function test($kode)
    {
        $client = $this->myClient->get($this->apiURL.'user/ujian/soal/'.$kode.'?token_api='.session('user_signin')['api_token']);
            $response = $client->getBody();
            $data = json_decode($response,true);
            return dd($data);    
    }

    /**
     * Page view panel index
     * @return view
     */
    public function controlPage()
    {
        return view('panel');
    }

    /**
     * Page view list ujian
     * @return view
     */
    public function viewUjian()
    {
        $client = $this->getFunction('user/ujian/',session('user_signin')['api_token']);
        $data = json_decode($client, true);
        return view('pages.ujian', ['data' => $data]);
    }

    /**
     * Get Rank 
     * @param int $id
     * @return $data
     */
    public function getRank($id)
    {
        $client = $this->getFunction('user/ujian/rank/'.$id,session('user_signin')['api_token']);        
        $data = json_decode($client,true);
        return $data;
    }

    /**
     * Page view play ujian
     * @return view
     */
    public function detailUjian(Request $request)
    {
        $client = $this->getFunction('user/ujian/'.$request->code,session('user_signin')['api_token']);        
        $data = json_decode($client,true);
        $dRank = $this->getRank($data['message']['id']);
        return view('pages.detailujian',['data' => $data, 'rank' => $dRank]);
    }


    /**
     * Store Session Soal
     * @return $response
     */
    public function getSoal(Request $request)
    {
        $qSoal = $this->getFunction('user/ujian/soal/'.$request->code,session('user_signin')['api_token']);        
        $dataSoal = json_decode($qSoal,true);
        
        session()->put('soal', $dataSoal['message']);
        foreach($dataSoal['message'] as $no => $value) {
            $data[$no] = [
                'soal' => $value['soal'],
                'a' => $value['a'],
                'b' => $value['b'],
                'c' => $value['c'],
                'd' => $value['d'],
                'e' => $value['e'],
            ];
        }
        session()->put('jawaban', $dataSoal['message']);
        return response($data);
    }

    /**
     * Store Session ujian
     * @return view
     */
    public function storeUjian(Request $request)
    {
        $client = $this->getFunction('user/ujian/'.$request->kode_ujian,session('user_signin')['api_token']);        
        $data = json_decode($client,true);
        
        if(session('ujian')['kode_ujian'] =! $data['message']['kode_ujian']) {
            echo 'anda masih mengerjakan tugas';
            echo session('ujian')['kode_ujian'];
            echo $data['message']['kode_ujian'];
        } else {
            session()->put('ujian', $data);
            return redirect('playujian?code='.$request->kode_ujian);
        }
    }

    /**
     * Store nilai
     * @return view
     */
    public function storeNilai(Request $request)
    {
        $nilai = 0;
        $zero = 0;

        if(is_array($request->pilihan) || is_object($request->pilihan)) {
            foreach($request->pilihan as $no => $data) {
                if($data == session('jawaban')[$no]['jawaban']) {
                    $nilai = $nilai + 1;
                }
            }
        }
        $hitung = ($nilai / 4) * 10;
        
        $forms = [
            'ujian' => session('ujian')['message']['id'],
            'nilai' => $hitung
        ];
        $client = $this->postFunction(
            'user/ujian/result_nilai',
            session('user_signin')['api_token'],
            $forms
        );
        
        $request->session()->flash('detail', session('ujian'));
        session()->forget('ujian');
        session()->forget('soal');
        return view('hasilujian', ['nilai' => $hitung]);
    }

    /**
     * Pages nilai
     * @return view
     */
    public function nilaiView(Request $request)
    {
        $client = $this->getFunction('user/report/nilai'.$request->kode_ujian,session('user_signin')['api_token']);        
        $data = json_decode($client,true);
        
        // foreach($data['nilai'] as $no => $val) {
        //     $data[$no]['waktu']['date'] = $this->formatDate($val['waktu']['date']);
        // }
        return view('pages.nilai', ['nilai' => $data['nilai']]);
        // dd($data['nilai']);
    }
}
