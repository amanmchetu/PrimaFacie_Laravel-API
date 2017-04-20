<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;

use Auth;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Mail;
use Validator;
use Redirect;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->breakLine = "\n";
        $this->blankString ="";
        $this->space = " ";
        $this->emailMessage = "This email is invalid.";       
        $this->nameMessage = "This name is invalid.";      
        $this->emptyArray = []; //This is a mrs. parziale move...
        $this->emailSubject = 'Welcome to PrimaFacie!' ;
        $this->invalidLogin = 'Invalid Username or Password.';
        $this->loggedOut = "You have been logged out";
    }
    
     /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function loginAuthenticatePrima()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1, $remember])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
    
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function loginAuthenticateClient()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1, $remember])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
    
    
    /**
     * Makes a user with a randomly generated code as a password
     * @return Key 
     * The key you need to store to enable sso
     */
    public function logoutPrima(){
        Auth::logout();
    }
    
     /**
     * Makes a user with a randomly generated code as a password
     * @return Key 
     * The key you need to store to enable sso
     */
    public function logoutClient(){
        Auth::logout();
    }

}
