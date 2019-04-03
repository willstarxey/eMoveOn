<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    /**Redirecciona al usuario
     * a la página de autenticación
     * de Facebook
     * 
     * @return Response
     */
    public function redirectToFacebookProvider(){
        return Socialite::driver('facebook')->redirect();
    }

    /**Obtiene la información de
     * facebook
     * @return Response
     */
    public function handleFacebookProviderCallback(){
        $userFacebook = Socialite::driver('facebook')->user();
        $findUser = User::where('email',$userFacebook->email)->first();
        if($findUser){
            Auth::login($findUser);
            return view('home');
        }else{
            $user = new User;
            $user->name = $userFacebook->name;
            $user->email = $userFacebook->email;
            $user->password = bcrypt(123456);
            $user->save();
            $user->assignRole('Usuario');
            Auth::login($user);
            return view('home');
        }
        
    }

    
    /**Redirecciona al usuario
     * a la página de autenticación
     * de Twitter
     * 
     * @return Response
     */
    public function redirectToTwitterProvider(){
        return Socialite::driver('twitter')->redirect();
    }

    /**Obtiene la información de
     * Twitter
     * @return Response
     */
    public function handleTwitterProviderCallback(){
        $userTwitter = Socialite::driver('twitter')->user();
        $findUser = User::where('email',$userTwitter->email)->first();
        if($findUser){
            Auth::login($findUser);
            return view('home');
        }else{
            $user = new User;
            $user->name = $userTwitter->name;
            $user->email = $userTwitter->email;
            $user->password = bcrypt(123456);
            $user->save();
            $user->assignRole('Usuario');
            Auth::login($user);
            return view('home');
        }
        
    }

     /**Redirecciona al usuario
     * a la página de autenticación
     * de Google
     * 
     * @return Response
     */
    public function redirectToGoogleProvider(){
        return Socialite::driver('google')->redirect();
    }

    /**Obtiene la información de
     * Google
     * @return Response
     */
    public function handleGoogleProviderCallback(){
        $userGoogle = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('email',$userGoogle->email)->first();
        if($findUser){
            Auth::login($findUser);
            return view('home');
        }else{
            $user = new User;
            $user->name = $userGoogle->name;
            $user->email = $userGoogle->email;
            $user->password = bcrypt(123456);
            $user->save();
            $user->assignRole('Usuario');
            Auth::login($user);
            return view('home');
        }
        
    }
}
