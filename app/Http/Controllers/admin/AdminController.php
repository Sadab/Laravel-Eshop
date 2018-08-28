<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Requests\AdminInputRequest;
use App\Http\Requests\PasswordInputRequest;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
    public function index()
    {

    	return view('admin.home.adminhome');
    }

    public function account()
    {
    	return view('admin.account');
    }

    public function editprofile()
    {
    	return view('admin.editProfile');
    }

    public function updateprofile(AdminInputRequest $request)
    {
    	$image = $request->file('admin_image');
		 $new_name =  $image->getClientOriginalName();
    	$data = [

    		'admin_name' => $request->admin_name,
    		'admin_email' => $request->admin_email,
    		'admin_image' => $new_name
            
    	];


    	$result = DB::table('admin')
            ->where('admin_id',session('user')->admin_id)
            ->update($data);

		    
		    
		    	$request->session()->flash('message','Profile updated successfully' );
		    	return redirect()->route('admin.account');


    }

    public function ChangePassword()
    {

    	return view('admin.changepassword');
    }

    public function UpdatePassword(PasswordInputRequest $request)
    {

    	$checkpass =  DB::table('admin')
    	->select('password')
    	->where('admin_id',session('user')->admin_id)
    	->get();

    	
    	
    	//dd($checkpass == $request->oldPassword);
    	dd($checkpass);

    	if($checkpass == $request->oldPassword)
    	{

		    if($request->newPassword == $request->conPassword)
    		{
    			

		    	$data = [

		    		'password' => $request->newPassword
		    		
		            
		    	];

    			$result = DB::table('admin')
	            ->where('admin_id',session('user')->admin_id)
	            ->update($data);

	            $request->session()->flash('message','Password updated Successfully' );
		    	return redirect()->route('changepass');

    		}
    		else{

    			$request->session()->flash('message','New password and confirm password not matched' );
		    	return redirect()->route('changepass');

    		}

    	}

    	

    		
		    	$request->session()->flash('message','Old password not matched' );
		    	return redirect()->route('changepass');
    	

    	
    }



    public function UserList()
    {
        $user =  DB::table('customer')
        ->get();
        return view('admin.userList')
        ->with('user',$user);
    }


    public function UserDelete(Request $request , $id)
    {
        $result = DB::table('customer')
         ->where('customer_id',$id)
         ->delete();
         if($result){

            $request->session()->flash('message','Customer Deleted successfully' );
                return redirect()->route('user.list');

         }
    }
}
