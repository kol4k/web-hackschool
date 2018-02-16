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
        $client = $this->myClient->get($this->apiURL.'user/ujian/?token_api='.session('user_signin')['api_token']);
        $response = $client->getBody();
        $data = json_decode($response,true);
        return view('pages.ujian', ['data' => $data]);
    }

    /**
     * Page view play ujian
     * @return view
     */
    public function detailUjian(Request $request)
    {
        $client = $this->myClient->get($this->apiURL.'user/ujian/'.$request->code.'?token_api='.session('user_signin')['api_token']);
        $response = $client->getBody();
        $data = json_decode($response,true);
        return view('pages.detailujian',['data' => $data['message']]);
    }


    /**
     * Store Session Soal
     * @return $response
     */
    public function getSoal(Request $request)
    {
        $qSoal = $this->myClient->get($this->apiURL.'user/ujian/soal/'.$request->code.'?token_api='.session('user_signin')['api_token']);
        $rSoal = $qSoal->getBody();
        $dataSoal = json_decode($rSoal,true);
        
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
        $client = $this->myClient->get($this->apiURL.'user/ujian/'.$request->kode_ujian.'?token_api='.session('user_signin')['api_token']);
        $response = $client->getBody();
        $data = json_decode($response,true);
        
        if(session('ujian')['kode_ujian'] =! $data['message']['kode_ujian']) {
            echo 'anda masih mengerjakan tugas';
            echo session('ujian')['kode_ujian'];
            echo $data['message']['kode_ujian'];
        } else {
            session()->put('ujian', $data['message']);
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
        $client = $this->myClient->post($this->apiURL.'user/ujian/result_nilai'.'?token_api='.session('user_signin')['api_token'], [
            'form_params' => [
                'user' => session('user_signin')['user']['id'],
                'ujian' => session('ujian')['id'],
                'nilai' => $hitung
            ]
        ]);
        $request->session()->flash('detail', session('ujian'));
        session()->forget('ujian');
        session()->forget('soal');
        // dd(session('ujian'));
        return view('hasilujian', ['nilai' => $hitung]);
    }

    /**
     * Store nilai
     * @return view
     */
    public function catatanView(Request $request)
    {
        return view('pages.catatan');
    }
}
