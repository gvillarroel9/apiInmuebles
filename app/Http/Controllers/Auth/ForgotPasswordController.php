<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;use Illuminate\Http\Request;
use App\Mail\ForgotPasswordTokenUser;
use Mail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\User;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function getResetToken(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
            $user = User::where('email', $request->input('email'))->first();
            if (!$user) {
                //return $this->errorResponse(trans('passwords.user'), 400);
                return response()->json([
                    'message' => trans('passwords.user')], 400);
            }
            $token = $this->broker()->createToken($user);
            Mail::to($request->input('email'), 'Usuario')->send(new ForgotPasswordTokenUser($token,$request->input('email')));
            $response['mensaje'] = trans('passwords.sent');
            return response()->json(
                [                
                'message' => $response,
                ], 400);            
    }


}
