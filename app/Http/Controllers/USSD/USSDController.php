<?php

namespace App\Http\Controllers\USSD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Page;
use App\Models\PageRequest;
use App\Models\CreditRequest;

class USSDController extends Controller
{
    public function respond(Request $request){
        // Reads the variables sent via POST Request from our gateway
        $sessionId   = $request->get("sessionId");
		$serviceCode = $request->get("serviceCode");
		$phoneNumber = $request->get("phoneNumber");
		$text        = $request->get("text");

		$subscriber = Subscriber::firstOrNew(['phone'=>$phoneNumber]); 
		$subscriber->phone= $phoneNumber;
		$subscriber->save();
        
        //EXPLODE TEXT STRINGS 
        if(!empty($text)){
            $incominginput = explode("*", $text);
            $level = count($incominginput);
            
            $input = [];

            foreach ($incominginput as $key => $val) {
                if ( ($val == '7') && (!empty($input)) ) {
                    $lastpos = count($input) - 1;
                    $exactindex = array_keys($input[$lastpos])[0];
                    $input[$lastpos][$exactindex][]  = $val;
                    $level --;
                } elseif ( ($val == '0') && (!empty($input)) ) {
                    $lastpos = count($input) - 1;
                    $exactindex = array_keys($input[$lastpos])[0];
                    array_pop($input[$lastpos][$exactindex]);
                    $level --;                    
                } else {
                    $input[][$val] = [];
                }
            }

            $pageId = "";
	        foreach ($input as $key => $value) {
	        	if($pageId !== "")
	        		$pageId .= "*";
	        	$pageId .= array_key_first($value);
	        }
	        if($level === 3 && substr($pageId, 0, 1) === "1"){
	        	$key = array_key_first($input[1]);
	        	switch ($key) {
	        		case 1:
	        			$amount = 500;
	        			break;
	        		case 2:
	        			$amount = 1000;
	        			break;
	        		case 3:
	        			$amount = 1500;
	        			break;
	        		case 3:
	        			$amount = 2500;
	        			break;
	        		default:
	        			$amount = 0;
	        			break;
	        	}
	        	$token = $this->getToken();
	        	$message = $this->getCreditRequestText($token);
	        	$res = $this->sendSMS($phoneNumber, $message);
	        	CreditRequest::create(['subscriber_id' => $subscriber->id, 'token' => $token, 'amount' => $amount]);

	        	$page = new Page();
	        	$page->type = 1;
	        	$page->body = "Your request was successful and your token has been sent";
	        }
	        elseif (!isset($pageId) || $pageId == ""){
				$page = Page::where('page_id', "0")->first();
			}
			else{
				$page = Page::where('page_id', $pageId)->first();
			}	

        }else{
            $page = Page::where('page_id', "0")->first();
		}

		header('Content-type: text/plain');
		if(isset($page)){
			if(isset($page->id))
				PageRequest::create(['subscriber_id' => $subscriber->id, 'page_id' => $page->id, 'service_code' => $serviceCode]);
			$type = "CON ";
			if($page->type == 1)
				$type = "END ";
			return response($type.$page->body, 201);
		}
		else
			return response("END Couldn't find page", 201);
        exit;

    }

    public function testSms(Request $request){
    	$phoneNumber = $request->get("phoneNumber");
		$text        = $request->get("text");
		$res = $this->sendSMS($phoneNumber, $text);
		var_dump($res);
    }

    private function getCreditRequestText($token){
    	return "DO NOT DISCLOSE\nFuel ticket token is $token\nPresent this token to the fuel attendant at partner stations.\n\nWhen the ticket is accepted, your verification code will be sent to complete transaction"; 
    }
}
