<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index()
    {
    	$order = DB::table('tbl_order')
    		->join('customer',  'tbl_order.customer_id', '=', 'customer.customer_id')
    		->select('tbl_order.*','customer.first_name')
    		->get();
    	return view('admin.manageOrder')
    	->with('order',$order);
    }

    public function ViewOrder($id)
    {
    	$order = $order = DB::table('tbl_order')
    		->join('customer',  'tbl_order.customer_id', '=', 'customer.customer_id')
    		->join('order_details','tbl_order.order_id' , '=' , 'order_details.order_id')
    		->join('shipping','tbl_order.shipping_id','=','shipping.shipping_id')
    		->select('tbl_order.*','order_details.*','shipping.*','customer.*')
    		->first();
    	return view('admin.ViewOrder')
    	->with('order',$order);
    }


    public function DeleteOrder($id)
    {
    	
    }
}
