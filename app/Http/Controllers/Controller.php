<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getToken($length = 10){
	    $token = "";
	    //$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	    //$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
	    $codeAlphabet = "0123456789";
	    $max = strlen($codeAlphabet);

	    for ($i=0; $i < $length; $i++) {
	        $token .= $codeAlphabet[random_int(0, $max-1)];
	    }

	    return $token;
	}
}
