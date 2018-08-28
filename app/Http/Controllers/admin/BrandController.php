<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
    	$brand = DB::table('brands')->get();

    	return view('admin.brand.brandlist')
    	->with('brand',$brand);
    }

    public function create()
    {
    	return view('admin.brand.brandCreate');
    }

    public function insert(BrandRequest $request)
    {
    	 $image = $request->file('brand_image');
		 $new_name =  $image->getClientOriginalName();

    	$duplicat =  DB::table('brands')
                    ->where('brand_name', $request->brand_name)
                    ->orWhere('brand_image', $new_name)
                    ->get();

    	if(count($duplicat) >= 1 )
    	{
    		$request->session()->flash('message','Duplicate Brand not possible' );
    		return redirect()->route('brand.create');

    	}

    	else
    	{


		    		if($request->hasFile('brand_image'))
		    	{
		    		
		    		
		    		$image = $request->file('brand_image');
		    		$new_name =  $image->getClientOriginalName();
		    		$image->move('image',$new_name);
		    		 

		    		
		    	}

		    	$data = [

		    		'brand_name' => $request->brand_name,
		    		'brand_image' => $new_name,
		    		'publication_status' => $request->publication_status

		    	];

	    	


	    		$result = DB::table('brands')
		    	->insert($data);

			    if($result)
			    {
			    	$request->session()->flash('message','Brand Inserted successfully' );
			    	return redirect()->route('brand.list');
			    }

		}

    }



    public function edit($id)
    {
        
    	$brand = DB::table('brands')
    			->where('brand_id',$id)
    			->first();

    	return view('admin.brand.brandEdit')
    	->with('brand',$brand);
    }


    public function inactive_brand($id)
    {
    	DB::table('brands')
    	->where('brand_id',$id)
    	->update(['publication_status' => 0]);
    	return redirect()->route('brand.list');
    }


      public function active_brand($id)
    {
    	DB::table('brands')
    	->where('brand_id',$id)
    	->update(['publication_status' => 1]);
    	return redirect()->route('brand.list');
    }



    public function update(BrandRequest $request , $id)
    {
    	$image = $request->file('brand_image');
		  $new_name =  $image->getClientOriginalName();


  		if($request->hasFile('brand_image'))
    	{
    		
    		
    		 $image = $request->file('brand_image');
    		$new_name =  $image->getClientOriginalName();
    		$image->move('image',$new_name);
    		 

    		
    	}

    	$data = [

    		'brand_name' => $request->brand_name,
    		'brand_image' => $new_name
    	];


    	$result = DB::table('brands')
            ->where('brand_id',$request->brand_id)
            ->update($data);

		    
		    
		    	$request->session()->flash('message','Brand updated successfully' );
		    	return redirect()->route('brand.list');
    }



    public function delete(Request $request , $id)
    {
    	 $result = DB::table('brands')
    	 ->where('brand_id',$id)
    	 ->delete();
    	 if($result){

    	 	$request->session()->flash('message','Brand Deleted successfully' );
		    	return redirect()->route('brand.list');

    	 }
    }



}
