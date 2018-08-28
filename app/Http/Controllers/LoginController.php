<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminSignUpRequest;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
     public function index(Request $request)
    {
    	return view('signin');
    }

    public function verify(Request $request)
    {
        

        $user = DB::table('admin')
            ->where('admin_email', $request->username)
            ->where('password', $request->password)
            ->first();

        if($user)
        {
            $request->session()->put('user', $user);
            return redirect()->route('admin.home');
        }
        else
        {
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('login');
        }
    }

    


    public function signup()
    {
        return view('admin.signUp');
    }

    public function signupDb(AdminSignUpRequest $request)
    {
        $data = [

            'admin_name' => $request->fullName,
            'admin_email' => $request->username,
            'password' => $request->password,
            'admin_phone' => $request->phone


        ];

         $user = DB::table('admin')
         ->insert($data);

         if( $request->password ==  $request->confirmPasswprd)
         {
             if($user)
         $request->session()->flash('message', 'Signup successful');
            return redirect()->route('signup');


         }

         else{


            $request->session()->flash('message', 'password not matched');
            return redirect()->route('signup');

         }

        

    }



    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
