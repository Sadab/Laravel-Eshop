<?php

namespace App\Http\Controllers\home;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	

    		$product = DB::table('products')
    		->join('categories',  'products.category_id', '=', 'categories.category_id')
    		->where('product_featured_status','=','1')
    		->get(); 

    		$category = DB::table('categories')->where([
			    ['publication_status', '=', '1'],
			    ['featured_status', '=', '1'],
			    ['parent_id', '<>', Null]
			])->get();


    	
    		

    	return view('home.home')
    	->with('product',$product)
    	->with('category',$category);
    }


    public function singleProduct($id)
    {
    	$product = DB::table('products')
    	->where('id',$id)
    	->first();
    	return view('home.singleProduct')
    	->with('product',$product);
    }
}
