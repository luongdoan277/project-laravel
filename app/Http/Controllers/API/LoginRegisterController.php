<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;

class LoginRegisterController extends Controller
{
    public function register(Request $request){
        $validater = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        if ($validater->fails()){
            return response()->json($validater->errors()->toJson(),400);
        }
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $name = $firstname . ' ' . $lastname;
        $user= User::create([
            'name' => $name,
            'email_verified_at' => now(),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);
        return redirect()->route('getlogin');
    }
    public function login(Request $request)
    {
//        $credentials = $request->all();
//        $this->validate($request, [
//            'email' => 'required',
//            'password' => 'required',
//        ]);
//        $email = $request->get('email');
//        $login = DB::select("SELECT email, password FROM customers WHERE email= '$email'");
//        dd($login);
//        if( $login != 0 )
//        {
//            return redirect()->route('home',compact('login'));
//        }else{
//            return redirect()->route('getlogin')
//                ->with('error','Email-Address And Password Are Wrong.');
//        }
        $credentials = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('email' => $credentials['email'], 'password' => $credentials['password'])))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('getlogin')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
