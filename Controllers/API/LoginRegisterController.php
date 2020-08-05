<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return response()->json(compact('user', 'token'),201);
    }
    public function login(Request $request)
    {
        $credentials = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('email' => $credentials['email'], 'password' => $credentials['password'])))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
}
