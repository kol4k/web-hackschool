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
        $client = $this->myClient->get($this->apiURL.'user/ujian/?token_api=e406fc6d76b3c3b2ae949f5eaabc98c9306673a1');
        $response = $client->getBody();
        $data = json_decode($response,true);
        return view('pages.ujian', ['data' => $data]);
    }
}
