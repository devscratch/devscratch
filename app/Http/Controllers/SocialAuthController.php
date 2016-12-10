<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialAuthController extends Controller
{
    public function index($provider)
    {
      return $this->redirectToProvider($provider);
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {

        try {
          $details = Socialite::driver($provider)->user();
        }
        catch (Exception $e)
        {
          return redirect('/login?login_id=' . md5(uniqid(rand(), true)));
        }

        if($provider == 'github')
        {
          $name = $details->getNickname();
        }
        else
        {
          $name = $details->getName();
        }

        /*
        *
        * Here we will insert user data to databases!
        *
        */

        if($details->getEmail() != '')
        {
          $user = User::where('email', $details->getEmail())->first();
          if(!$user)
          {
            User::create([
              'name' => $name,
              'email' => $details->getEmail(),
              'nickname' => substr(md5(base64_encode(uniqid(rand(1,99999),true))),0,10),
              'avatar' => $details->getAvatar(),
            ]);

            $user = User::where('email', $details->getEmail())->first();

            auth()->login($user);

            return redirect('/');
          }

          auth()->login($user);
          return redirect('/');

        }

        User::create([
          'name' => $name,
          'email' => $details->getNickname() . '@devscratch.com',
          'nickname' => substr(md5(base64_encode(uniqid(rand(),true))),0,10),
          'avatar' => $details->getAvatar(),
        ]);

        $user = User::where('email', $details->getNickname() . '@devscratch.com')->first();
        auth()->login($user);
        return redirect('/');
    }
}
