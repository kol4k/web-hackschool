<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
    	$this->myClient = new Client();
        $this->apiURL = 'http://localhost:8000/public/';
    }

    /**
     * Change Format
     * @param $value
     * @return response
     */
    public function formatDate($value) {
        return \Carbon\Carbon::parse($value)->format('M d, Y G:i');
    }

    /**
     * now Function
     */
    public function now() {
        return \Carbon\Carbon::now();
    }

    /**
     * Global Get function
     * @param url $url
     * @param token_api @token
     */
    public function getFunction($url, $token)
    {
        $request = $this->myClient->get($this->apiURL.$url,[
            'headers' => [
                'Authorization' => 'Bearer '.$token
            ]
        ]);
        $response = $request->getBody();
        return $response;
    }

    /**
     * Global Post function
     * @param url $url
     * @param token_api @token
     */
    public function postFunction($url,$token,$form)
    {
        $request = $this->myClient->post($this->apiURL.$url,[
            'headers' => [
                'Authorization' => 'Bearer '.$token
            ],
            'form_params' => $form
        ]);
        $response = $request->getBody();
        return $response;
    }
}
