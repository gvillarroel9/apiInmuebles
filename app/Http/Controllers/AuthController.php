<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name'     => 'required|string',
            'email'    => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
            'lastname' => 'required|string',
            'contact' => 'integer|required',
            'local_phone' => 'boolean'
        ]);
        $user = new User([
            'name'=> $request->name,
            'lastname' => $request->lastname,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'contact' => $request->contact,
            'other_contact'=> $request->other_contact,
            'country_id' => $request->country_id,
            'local_phone' => $request->local_phone,            
            'phone' => $request->phone,
            'company' => $request->company,
            'language' => $request->language,
            'frequency' => $request->frequency,
            'service_interest'=> $request->service_interest,
            'day'=> $request->day,
            'month'=> $request->month,
            'year' => $request->year,
        ]);       
        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'], 201);
    }


    public function login(Request $request)
    {
        $request->validate([
            'email'       => 'required|string|email',
            'password'    => 'required|string',
            'remember_me' => 'boolean',            
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'], 401);
        }
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type'   => 'Bearer',
            'expires_at'   => Carbon::parse(
                $tokenResult->token->expires_at)
                    ->toDateTimeString(),
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 
            'Successfully logged out']);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
