<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Header;
use App\Model\Item;
use App\Model\Detail;
use Session;
use Validator;

class HomeController extends Controller
{
    public function index(){
    	$data['detail'] = Detail::leftjoin('trx_po_h','trx_po_h.id','trx_po_d.po_h_id')
    	->leftjoin('ms_item','ms_item.id','trx_po_d.po_item_id')
    	->select('trx_po_h.po_number', 'ms_item.name','trx_po_d.id', 'trx_po_d.po_item_qyt','trx_po_d.po_item_price','trx_po_d.po_item_cost')
    	->get();
    	// dd($data);
    	return view('admin.products.index', $data);
    }

    public function productsDetails($id = null)
    {
        $params = [];

        $object = Detail::leftjoin('trx_po_h','trx_po_h.id','trx_po_d.po_h_id')
			    	->leftjoin('ms_item','ms_item.id','trx_po_d.po_item_id')
			    	->select('trx_po_h.po_number','trx_po_h.po_date', 'ms_item.name','trx_po_d.id','trx_po_d.po_item_qyt','trx_po_d.po_item_price','trx_po_d.po_item_cost')
			    	->where('trx_po_d.id', $id)
			    	->first();
        if(!$object)
            {
                return redirect()->route('/');
            }

        $params['products'] = $object;
        $params['title_form'] = 'Detail Product';
// $arr = get_defined_vars();
//             dd($arr);
        return view('admin.products.details', $params);
    }

    public function productsUpdate($id = null)
    {
        $params = [];

        if($id){
            $object = Detail::leftjoin('trx_po_h','trx_po_h.id','trx_po_d.po_h_id')
			    	->leftjoin('ms_item','ms_item.id','trx_po_d.po_item_id')
			    	->select('trx_po_h.po_number','trx_po_h.po_date', 'ms_item.name','trx_po_d.id','trx_po_d.po_item_qyt','trx_po_d.po_item_price','trx_po_d.po_item_cost')
			    	->where('trx_po_d.id', $id)
			    	->first();
            if(!$object)
                {
                    return redirect()->route('products');
                }
            $params['title_form'] = "Update Product";
        }else{
            $object = "";
            $params['title_form'] = "Add Product";
        }

        $params['products'] = $object;
// $arr = get_defined_vars();
//             dd($arr);
        return view('admin.products.update', $params);
    }

    public function saveProducts(Request $request, $id = Null)
    {
        $data = $request->all();
        if($id == 0 ){
            $rules =  ['product_po_number' => 'required','product_nama'  => 'required' ,'product_cost' => 'required', 'product_harga' => 'required', 'product_qyt' => 'required'];
            $atributname = [
              'product_nama.required' => 'The product name field is required.',
              'product_nama.unique' => 'The product name can not be the same.',
              'product_harga.required' => 'The product harga field is required.',
            ];
        }else{
            $rules =  ['product_po_number' => 'required', 'product_nama'  => 'required' , 'product_cost' => 'required', 'product_harga' => 'required|numeric', 'product_qyt' => 'required'];
            $atributname = [
              'product_nama.required' => 'The product name field is required.',
              'product_harga.required' => 'The product harga field is required.',
            ];           
        }

        $validator = Validator::make($data, $rules, $atributname);
        // $arr = get_defined_vars(); dd($arr);
        if($validator->fails()){
            return redirect()->back()
            ->withInput()
            ->withErrors( $validator );
        }
        else{

            if($id == 0 ){
                $p        =  new Item; 
                $p->name                       = $request->product_nama;
                $p->price                       = $request->product_harga;
                $p->cost                       = $request->product_cost;
                $p->save();

                $h 		= new Header;
                $h->po_number = $request->product_po_number;
                $h->po_date = $request->product_date;
                $h->po_price_total = $request->product_harga;
                $h->po_cost_total = $request->product_cost;
                $h->save();

                $d 		= new Detail;
                $d->po_h_id = $h->id;
                $d->po_item_id = $p->id;
                $d->po_item_qyt = $request->product_qyt;
                $d->po_item_price = $request->product_harga;
                $d->po_item_cost = $request->product_cost;
                $d->save();


              Session::flash('success-message', "Success add Items" );
              return redirect()->route('/');

            }else{
            	$a = array(
	                'po_item_qyt' => $request->product_qyt,
	                'po_item_price' => $request->product_harga,
	                'po_item_cost' => $request->product_cost
            	);
              Detail::where('id', $id)->update($a);
              $po_item_id = Detail::where('id', $id)->first()->po_item_id;
              	$b = array(
	                'name' => $request->product_nama,
	                'price' => $request->product_harga,
	                'cost' => $request->product_cost
            	);

              Item::where('id', $po_item_id)->update($b);

              Session::flash('success-message', "Success update product" );
              return redirect()->route('/');

            }
        }

    }
}
