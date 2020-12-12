<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Header;
use App\Model\Item;
use App\Model\Detail;

class AjaxController extends Controller
{
    public function selectedItemDeleteById( Request $request ){
	    $input = $request->all();
	    
	    if($input['data']['id'] && $input['data']['track']){
			if($input['data']['track'] == 'product_list'){
				$item = Detail::where('id', $input['data']['id'])->first();
				$po_item_id = $item->po_item_id;
				Item::where('id', $po_item_id)->delete();
				$head = Detail::where('id', $input['data']['id'])->first();
				$po_h_id = $head->po_h_id;
				Header::where('id', $po_h_id)->delete();
				Detail::where('id', $input['data']['id'])->delete();
				return response()->json(array('delete' => true));
			}

		}
	}
}
