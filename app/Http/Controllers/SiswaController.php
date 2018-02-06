<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class SiswaController extends Controller
{
    public function test($kode)
    {
        $client = $this->myClient->get($this->apiURL.'user/ujian/soal/'.$kode.'?token_api=77829c6cb37f0da9fbf6169cf2ecb86623f007d5');
            $response = $client->getBody();
            $data = json_decode($response,true);
            return dd($data);    
    }

    public function controlPage()
    {
        return view('panel');
    }

    public function viewUjian()
    {
        return view('pages.ujian');
    }

    public function processLogin(Request $request)
    {
        $client = $this->myClient->post($this->apiURL.'authenticate', [
            'form_params' => [
                'email' => $request->email,
                'password' => $request->password
            ]
        ]);
        $response = $client->getBody();
        $data = json_decode($response,true);
        return dd($data);    
    }
}
