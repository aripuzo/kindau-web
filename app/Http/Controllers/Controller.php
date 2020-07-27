<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use AfricasTalking\SDK\AfricasTalking;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendSMS(String $phone, String $message){
    	$username = 'sanwoe';
		$apiKey = 'be3dd842d1d89b1b649ae865defcfeaf5483b313541c2dd47453888e31da3167';
		$AT = new AfricasTalking($username, $apiKey);

		$sms = $AT->sms();

		$result = $sms->send([
		    'to'      => $phone,
		    'message' => $message
		]);

    	return $result;
    }

    function getToken($length = 10){
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
