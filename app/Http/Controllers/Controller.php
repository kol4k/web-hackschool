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
}
