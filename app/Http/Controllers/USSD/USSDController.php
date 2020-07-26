<?php

namespace App\Http\Controllers\USSD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Page;
use App\Models\PageRequest;

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
	        
	        if (!isset($pageId) || $pageId == ""){
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
}
