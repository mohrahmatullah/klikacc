<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Detail;

class AjaxController extends Controller
{
    public function selectedItemDeleteById( Request $request ){
	    $input = $request->all();
	    
	    if($input['data']['id'] && $input['data']['track']){
			if($input['data']['track'] == 'product_list'){
				if(Detail::where('id', $input['data']['id'])->delete()){
					return response()->json(array('delete' => true));
				}
			}

		}
	}
}
