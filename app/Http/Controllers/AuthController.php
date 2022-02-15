<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (!$token = Auth::attempt($login)) {
            $user = User::where('email', $login['email'])->first();
            if (date('H') < $user->time && $user->time != null) {
                return response()->json(['message' => 'trop de tentative, vous pourrez reessayer dans 1 heure']);
            } else {
                $user->time = null;
                $user->save();
            }
            $user->login_fails = $user->login_fails + 1;
            $user->save();
            $restant = $user->login_fails - 1;
            if ($user->login_fails > 3) {
                log::debug('Trop de tentative, vous pourrez reessayer dans 1 heure');


                $user->login_fails = null;
                $user->time = date('H') + 1;
                $user->save();
                return response()->json(['message' => 'trop de tentative, vous pourrez reessayer dans 1 heure']);
            } else {
                return response()->json(['message' => 'tentative restant: ' . (3 - $restant)]);
            }
        } else {

            $user = User::where('email', $login['email'])->first();
            $user->login_fails = null;
            $user->time = null;
            $user->save();
            if (Auth::user()->banned_until == 1) {
                return response(['message' => 'Utilisateur suspendu']);
            }

            $accessToken = Auth::user()->createToken('authToken')->accessToken;
            return new UserResource(Auth::user($accessToken), $accessToken);
        }
    }

    public function logout()
    {
        Log::debug('Logout');
        $accessToken = Auth::user()->token();

        $accessToken->revoke();

        return response('Vous êtes déconnecté', 200);
    }
}
