<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

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

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        $this->middleware('guest');
        $this->breakLine = "\n";
        $this->blankString ="";
        $this->space = " ";      
    }
    
    
    public function resetpassword() {
        
        $validator = Validator::make(Input::all(),
            array(
                'new_password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            )
        );

        if ($validator->fails()) {
            return $validator->errors()->toJson();
        } else {
            $id = Auth::user()->id;
            $user = User::find($id);
            if (Hash::check(Input::get('password'), $user->password)) {
                $password = Hash::make(Input::get('new_password'));
                $user->password = $password;
                $user->save();
                return 'ok';
            }
        }
        
    }
}
