<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CategoryController extends Controller
{
     public function index()
    {
 		$category = DB::table('categories')->get();

    	return view('admin.category.categoryList')
    	->with('category',$category);
    }

    public function create()
    {
    	return view('admin.category.categoryCreate');
    }

    public function insert(CategoryRequest $request)
    {


    	$duplicat =  DB::table('categories')
                    ->where('category_name', $request->category_name)
                    ->get();

    	if(count($duplicat) >= 1 )
    	{
    		$request->session()->flash('message','Duplicate Category not possible' );
    		return redirect()->route('category.create');

    	}

    	else
    	{

		    	$data = [

		    		'category_name' => $request->category_name,
		    		'category_desc' => $request->category_desc,
		    		'publication_status' => $request->publication_status,
                    'mix_class_name' => $request->mix_class

		    	];

	    	


	    		$result = DB::table('categories')
		    	->insert($data);

			    if($result)
			    {
			    	$request->session()->flash('message','Category Inserted successfully' );
			    	return redirect()->route('category.list');
			    }

		}

    }



    public function edit($id)
    {
        $subcat = DB::table('categories')
        ->where('parent_id',NULL)->get();

    	$category = DB::table('categories')
    			->where('category_id',$id)
    			->first();

    	return view('admin.category.CategoryEdit')
    	->with('category',$category)->with('parentCat', $subcat);


    }


    public function inactive_category($id)
    {
    	DB::table('categories')
    	->where('category_id',$id)
    	->update(['publication_status' => 0]);
    	return redirect()->route('category.list');
    }


      public function active_category($id)
    {
    	DB::table('categories')
    	->where('category_id',$id)
    	->update(['publication_status' => 1]);
    	return redirect()->route('category.list');
    }


    public function feature_inactive_category($id)
    {
        DB::table('categories')
        ->where('category_id',$id)
        ->update(['featured_status' => 0]);
        return redirect()->route('category.list');
    }


      public function feature_active_category($id)
    {
        DB::table('categories')
        ->where('category_id',$id)
        ->update(['featured_status' => 1]);
        return redirect()->route('category.list');
    }



    public function update(CategoryRequest $request , $id)
    {

    	$data = [

    		'category_name' => $request->category_name,
    		'category_desc' => $request->category_desc,
    		'publication_status' => $request->publication_status,
            'parent_id' => $request->parent_id
    	];


    	$result = DB::table('categories')
            ->where('category_id',$request->category_id)
            ->update($data);

		    
		    
		    	$request->session()->flash('message','Category updated successfully' );
		    	return redirect()->route('category.list');
    }



    public function delete(Request $request , $id)
    {
    	 $result = DB::table('categories')
    	 ->where('category_id',$id)
    	 ->delete();
    	 if($result){

    	 	$request->session()->flash('message','Category Deleted successfully' );
		    	return redirect()->route('category.list');

    	 }
    }
}
