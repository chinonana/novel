<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /**
     * googleの認証ページヘユーザーをリダイレクト
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * googleからユーザー情報を取得
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        // $user->token;
    }
    
    
    
    
    
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    
    // public function handleGoogleProviderCallback(){

    //   try {
    //       $user = Socialite::with("google")->user();
    //   } 
    //   catch (\Exception $e) {
    //       return redirect('/login')->with('oauth_error', 'ログインに失敗しました');
    //       // エラーならログイン画面へ転送
    //   }
       
    //   $myinfo = User::firstOrCreate(['token' => $user->token ],
    //              ['name' => $user->nickname,'email' => $user->getEmail()]);
    //              Auth::login($myinfo);
    //              return redirect()->to('/'); // homeへ転送
    
    // }
}
