<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = [
            'email' => request('user'),
            'password' => request('password')
        ];
        if(!Auth::attempt($credentials)){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = $request->user();
        		$tokenResult = $user->createToken('MyApp');
        		$token = $tokenResult->token;
        		$token->expires_at = Carbon::now()->addWeeks(1);
        		$token->save();

        return response()->json([
        			'user_id' => $user->id,
        			'user_name' => $user->name,
                    'access_token' => $tokenResult->accessToken,
                    'token_type'   => 'Bearer',
                    'expires_at'   => Carbon::parse(
                        $tokenResult->token->expires_at)
                            ->toDateTimeString(),
                ]);
    }
}
