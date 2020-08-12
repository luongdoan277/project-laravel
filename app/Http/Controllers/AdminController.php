<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getRegister(){
        return view('Admin.register');
    }

    public function getLogin(){
        return view('Admin.login');
    }


    public function postRegister(Request $request){
        $this->validate($request,[
            'name'=>'Required|string|max:255',
            'email'=>'Required|max:255',
            'password'=>'Required',
            'repeat_password'=>'Required',
        ]);


        $password = bcrypt($request->get('password'));
        $repeat_password = $request->get('repeat_password');

        if (Hash::check($repeat_password,$password)){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $password;
            $user->save();

            return redirect('get-login');
        }else{
            return redirect()->back();
        }
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user_data = array(
            'email'=> $request->get('email'),
            'password'=>$request->get('password')
        );

        if (Auth::attempt($user_data)){
            return redirect('product-admin');
        }else{
            return back()->with('error','Email or password is incorrect');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('get-login');
    }
}
