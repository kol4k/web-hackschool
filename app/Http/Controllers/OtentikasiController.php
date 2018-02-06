<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class OtentikasiController extends Controller
{
    public function test($kode)
    {
        $client = $this->myClient->get($this->apiURL.'user/ujian/soal/'.$kode.'?token_api=77829c6cb37f0da9fbf6169cf2ecb86623f007d5');
            $response = $client->getBody();
            $data = json_decode($response,true);
            return dd($data);    
    }

    /**
     * Page view login
     * @return view
     */
    public function viewLogin()
    {
        return view('login');
    }

    /**
     * Process Login
     * When user success login will save callback to session.
     * @return redirect
     */
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
        session()->put('user_signin',$data);
        return redirect('index.html');    
    }

    /**
     * Process logout
     * When user success logout will forget session.
     * @return redirect
     */
    public function processLogout()
    {
        session()->forget('user_signin');
        return redirect('/');
    }
}
