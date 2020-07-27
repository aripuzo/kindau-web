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

		//6*12345*token
        
        //EXPLODE TEXT STRINGS 
        if(!empty($text)){
        	$agentCode = "6";
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
	        if($level === 2 && substr($pageId, 0, 1) === $agentCode){
	        	$page = new Page();
		        $page->type = 0;
		        $page->body = "Enter the user token";
	        }
	        elseif($level === 3){
	        	if(substr($pageId, 0, 1) === "1"){
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
	        	elseif(substr($pageId, 0, 1) === $agentCode){
					$agentNo = array_key_first($input[1]);
					$token = array_key_first($input[2]);
					$cred = CreditRequest::where('token', $token)->first();
					$page = new Page();
					if($agentNo != "12345"){
						$page->type = 1;
		        		$page->body = "Invalid agent code";
					}
					elseif(!isset($cred) || $cred->status != 0){
						$page->type = 1;
		        		$page->body = "Invalid token";
					}
					else{
						$amount = $cred->amount;
						$page->type = 0;
		        		$page->body = "Hi Agent Oando, Token is for $amount worth of fuel.\n1. Accept transaction\n2. Invalidate token";
					}
	        	}
	        }
	        elseif($level === 4 && substr($pageId, 0, 1) === $agentCode){
	        	$agentNo = array_key_first($input[1]);
				$token = array_key_first($input[2]);
				$code = array_key_first($input[3]);
				$cred = CreditRequest::where('token', $token)->first();
				$page = new Page();
				if($agentNo != "12345"){
					$page->type = 1;
		        	$page->body = "Invalid agent code";
				}
				elseif(!isset($cred) || $cred->status !== 0){
					$page->type = 1;
		        	$page->body = "Invalid token";
				}
				else{
					if($code === 1){
						$cred->status = 1;
						//set fuel station id
						$cred->save();

						$res = $this->sendSMS($cred->subscriber->phone, "Token has been accepted, you can buy your fuel");

						$page->type = 1;
		        		$page->body = "Transaction successful, please proceed to sell fuel";
					}
					elseif($code === 2){
						$cred->status = 2;
						//set fuel station id
						$cred->save();
						$page->type = 1;
		        		$page->body = "Transaction cancelled, token invalidated";
					}
					else{
						$page->type = 1;
		        		$page->body = "Unknown error occurred";
					}
				}
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
    	return "DO NOT DISCLOSE\n
			Fuel ticket token is $token\n
			Present this token at any of the following stations to complete transaction.\n
			Oando, Total, MRS, Mobil, NNPC,  Eterna, Forte Oil & Conoil"; 
    }
}
