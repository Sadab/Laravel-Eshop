<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\ColorRequest;
use App\Http\Requests\SizeRequest;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\color;
use App\model\image;
use App\model\size;
use App\model\product;
use DB;
class ProductController extends Controller
{

	public function productList()
	{
		/*$product = product::all();*/
		$product = DB::table('products')
    		->join('categories',  'products.category_id', '=', 'categories.category_id')
    		->get();            

		return view('admin.product.productList')
		->with('product',$product);

	}


	public function addProductIndex()
	{
		return view('admin.product.productAdd');
	}

	public function addProductInsert(ProductRequest $request)
	{
		$product = new product;
		$product->product_name = $request->product_name;
		$product->product_sku = $request->product_sku;
		$product->product_qty = $request->product_qty;
		$product->product_price = $request->product_price;
		$product->product_description = $request->product_desc;
		$product->category_id = $request->category_id;
		$product->brand_name = $request->brand_id;
		$image = $request->file('product_image');
		$new_name =  $image->getClientOriginalName();
		$image->move('image',$new_name);
		$product->product_image_1 = $new_name;
		$product->discount_amount = $request->product_discount;
		$product->new_level = $request->product_new_level;





    	$duplicat =  DB::table('products')
                    ->where('product_name', $request->product_name)
                    ->orWhere('product_image_1', $new_name)
                    ->orWhere('product_sku', $request->product_sku)
                    ->get();

    	if(count($duplicat) >= 1 )
    	{
    		$request->session()->flash('message','Duplicate Product name , product sku and image  not possible' );
    		return redirect()->route('product.add');

    	}

    	else{


				if($request->product_color != NULL)
				{
					$color = "";
					/*foreach($request->product_color as $ct)
					{
						$color .= $ct . ',' ;
					}*/
					$color = implode(',', $request->product_color);

					$product->product_color = $color;

				}
				
				
				if($request->product_size != NULL)
				{
					$size = "";
					/* foreach($request->product_size as $sz)
					{
						$size .= $sz . ',' ;
						$size = implode(',', $sz);
					}*/

					$size = implode(',', $request->product_size);

					$product->product_size = $size;
				}



				if($request->image_name != NULL)
				{
					$image = $request->file('image_name');
					
					/*foreach($image as $bz)
					{
						$image1 .= $bz->getClientOriginalName() . ' ' ;
						$bz1 = $bz->getClientOriginalName();
						$bz->move('image',$bz1);
					}*/


					

					for($i=0;$i<count($image);$i++)
					{
						$images[$i] = $image[$i]->getClientOriginalName() ;
						$image[$i]->move('image',$images[$i]);
					}

					//dd($images);



					$image1 = implode(',', $images);
					//dd($image1);
					

					$product->gallary_image = $image1;

					

				}


				$product->save();

				if($product->save())
				{
					$request->session()->flash('message1','Product Inserted successfully' );
			    	return redirect()->route('product.list');
				}

    	}
		
		

	}



	public function ProductView($id)
	{

        $product = DB::table('products')
    		->join('categories',  'products.category_id', '=', 'categories.category_id')
    		->where('id',$id)
    		->first();            

         return view('admin.product.productView')->with('product',$product);     
		

	    
	}


	public function ProductDelete(Request $request ,$id)
	{
		$result = DB::table('products')
    	 ->where('id',$id)
    	 ->delete();
    	 if($result){

    	 	$request->session()->flash('message1','Product Deleted successfully' );
		    	return redirect()->route('product.list');

    	 }
	}




	public function ProductEdit($id)
	{

		 $product = DB::table('products')
    		->join('categories',  'products.category_id', '=', 'categories.category_id')
    		->where('id',$id)
    		->first();            

         return view('admin.product.productEdit')->with('product',$product);  

	}



	public function ProductUpdate(ProductRequest $request,$id)
	{
		$product = product::find($request->product_id);
		$product->product_name = $request->product_name;
		$product->product_sku = $request->product_sku;
		$product->product_qty = $request->product_qty;
		$product->product_price = $request->product_price;
		$product->product_description = $request->product_desc;
		$product->category_id = $request->category_id;
		$product->brand_name = $request->brand_id;
		$image = $request->file('product_image');
		$new_name =  $image->getClientOriginalName();
		$image->move('image',$new_name);
		$product->product_image_1 = $new_name;
		$product->discount_amount = $request->product_discount;
		$product->new_level = $request->product_new_level;



		if($request->product_color != NULL)
		{
			$color = "";
			/*foreach($request->product_color as $ct)
			{
				$color .= $ct . ',' ;
			}*/
			$color = implode(',', $request->product_color);

			$product->product_color = $color;

		}
		
		
		if($request->product_size != NULL)
		{
			$size = "";
			/* foreach($request->product_size as $sz)
			{
				$size .= $sz . ',' ;
				$size = implode(',', $sz);
			}*/

			$size = implode(',', $request->product_size);

			$product->product_size = $size;
		}



		if($request->image_name != NULL)
		{
			$image = $request->file('image_name');
			
			/*foreach($image as $bz)
			{
				$image1 .= $bz->getClientOriginalName() . ' ' ;
				$bz1 = $bz->getClientOriginalName();
				$bz->move('image',$bz1);
			}*/


			

			for($i=0;$i<count($image);$i++)
			{
				$images[$i] = $image[$i]->getClientOriginalName() ;
				$image[$i]->move('image',$images[$i]);
			}

			//dd($images);



			$image1 = implode(',', $images);
			//dd($image1);
			

			$product->gallary_image = $image1;

			

		}


		$product->save();

		if($product->save())
		{
			$request->session()->flash('message1','Product updated successfully' );
	    	return redirect()->route('product.list');
		}


	}


	 public function feature_inactive_product($id)
    {
        DB::table('products')
        ->where('id',$id)
        ->update(['product_featured_status' => 0]);
        return redirect()->route('product.list');
    }


      public function feature_active_product($id)
    {
        DB::table('products')
        ->where('id',$id)
        ->update(['product_featured_status' => 1]);
        return redirect()->route('product.list');
    }



	/* ----------####################------ COLOR METHOD-------########## */


     public function ColorIndex()
    {
    	$color = color::all();
    	return view('admin.product.productColor')
    	->with('color',$color);
    }

    public function insertColor(ColorRequest $request)
    {
    	

    	$data = [

    		'color_name' => $request->color_name,
    		'color_code' => $request->color_code

    	];

    	$duplicat =  DB::table('colors')
                    ->where('color_name', $request->color_name)
                    ->orWhere('color_code', $request->color_code)
                    ->get();

    	if(count($duplicat) >= 1 )
    	{
    		$request->session()->flash('message','Color already Exist' );
    		return redirect()->route('product.color');

    	}

    	$color = DB::table('colors')
    	->insert($data);

    	if($color)
    	{
    		$request->session()->flash('message1','Product color inserted successfully' );
    		return redirect()->route('product.color');
    	}

    }


    public function updateColor($id)
    {
    	$color = DB::table('colors')
    			->where('id',$id)
    			->first();

    	return view('admin.product.editColor')
    	->with('color',$color);

    }


    public function upgradeColor(ColorRequest $request , $id)
    {
    	$data = [

    		'color_name' => $request->color_name,
    		'color_code' => $request->color_code

    	];

    	$result = DB::table('colors')
            ->where('id',$request->color_id)
            ->update($data);

		    
		    
		    	$request->session()->flash('message1','Color updated successfully' );
		    	return redirect()->route('product.color');

    }


    public function deleteColor(Request $request,$id)
    {
    	 $result = DB::table('colors')
    	 ->where('id',$id)
    	 ->delete();
    	 if($result){

    	 	$request->session()->flash('message1','Color Deleted successfully' );
		    	return redirect()->route('product.color');

    	 }

    }



    /* -------######################  PRODUCT SIZE METHOD #########################------ */


    public function SizeIndex()
    {
    	$size = size::all();
    	return view('admin.product.productSize')
    	->with('size',$size);
    }

    public function insertSize(SizeRequest $request)
    {
    	

    	$data = [

    		'size_name' => $request->size_name,
    		'size_scale' => $request->size_scale

    	];

    	$duplicat =  DB::table('sizes')
                    ->where('size_name', $request->size_name)
                    ->orWhere('size_scale', $request->size_scale)
                    ->get();

    	if(count($duplicat) >= 1 )
    	{
    		$request->session()->flash('message','Size already Exist' );
    		return redirect()->route('product.size');

    	}

    	$color = DB::table('sizes')
    	->insert($data);

    	if($color)
    	{
    		$request->session()->flash('message1','Product Size inserted successfully' );
    		return redirect()->route('product.size');
    	}

    }


    public function updateSize($id)
    {
    	$size = DB::table('sizes')
    			->where('id',$id)
    			->first();

    	return view('admin.product.editSize')
    	->with('size',$size);

    }


    public function upgradeSize(SizeRequest $request , $id)
    {
    	$data = [

    		'size_name' => $request->size_name,
    		'size_scale' => $request->size_scale

    	];

    	$result = DB::table('sizes')
            ->where('id',$request->size_id)
            ->update($data);

		    
		    
		    	$request->session()->flash('message1','Size updated successfully' );
		    	return redirect()->route('product.size');

    }


    public function deleteSize(Request $request,$id)
    {
    	 $result = DB::table('sizes')
    	 ->where('id',$id)
    	 ->delete();
    	 if($result){

    	 	$request->session()->flash('message1','Size Deleted successfully' );
		    	return redirect()->route('product.size');

    	 }

    }

   
}
