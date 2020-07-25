<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

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
            'reme'
        ]);
        $token = JWTAuth::fromUser($user);
        response()->json(compact('user', 'token'),201);
        return redirect('/');
    }
    public function login(Request $request)
    {
        $credentials = $request->all();
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        response()->json( compact('remember_token') );
        return redirect('/');
    }
    public function getAuthenticatedUser()
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }
}
