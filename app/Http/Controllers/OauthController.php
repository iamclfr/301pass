<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class OauthController extends Controller
{
    public function google()
    {
        $user = Socialite::driver('google')->user();

        /*echo '<pre>';
        var_dump($user);
        echo '</pre>';
        exit;*/

        $user = User::updateOrCreate([
            'oauth_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'oauth_token' => $user->token,
            'oauth_refresh_token' => $user->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function github()
    {
        $user = Socialite::driver('github')->user();

        /*echo '<pre>';
        var_dump($user);
        echo '</pre>';
        exit;*/

        $user = User::updateOrCreate([
            'oauth_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => 'https://avatars.githubusercontent.com/u/' . $user->id . '?s=80',
            'oauth_token' => $user->token,
            'oauth_refresh_token' => $user->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
