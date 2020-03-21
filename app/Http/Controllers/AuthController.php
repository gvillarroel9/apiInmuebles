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
            'password' => 'required|string|confirmed'
        ]);

        $user = new User([
            'name'=> $request->name,
            'email'=> $request->email,
            'dni'=> $request->dni,
            'password' => bcrypt($request->password),
            'lastname'=> $request->lastname,
            'contact'=> $request->contact,
            'contact_social'=> $request->contact_social, 
            'other_contact'=> $request->other_contact,
            'country_id'=> $request->country_id,            
            'local_phone'=> $request->local_phone,
            'phone'=> $request->phone,
            'company_user'=> $request->company_user,
            'company_name'=> $request->company_name,
            'company_rif'=> $request->company_rif,
            'company_country_id'=> $request->company_country_id,
            'company_city_id'=> $request->company_city_id,
            'company_address'=> $request->company_address,
            'company_rep_name'=> $request->company_rep_name,
            'company_rep_email'=> $request->company_rep_email,
            'language'=> $request->language,
            'info_frequency'=> $request->info_frequency,
            'info_interests'=> $request->info_interests,
            'info_email'=> $request->info_email,
            'info_social'=> $request->info_social,
            'info_phone'=> $request->info_phone,
            'info_facebook'=> $request->info_facebook,
            'info_others'=> $request->info_others,
            'service_interest'=> $request->service_interest,
            'day'=> $request->day,
            'month'=> $request->month,
            'year'=> $request->year,
            'user_email'=> $request->user_email
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
                'message' => 'Invalid Credentials'], 401);
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
            'data' => $user
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
