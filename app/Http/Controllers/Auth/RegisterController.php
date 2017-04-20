<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->emailMessage = "This email is invalid.";
        $this->emailExistsMessage = "An account with this email already exists.";//Should we say this?
        $this->nameMessage = "This name is invalid.";
        $this->passwordMessage = "This is an invalid password, passwords must be a minimum of 6 characters long";
        $this->codeMessage = "This is an invalid code, please get a valid code";
        $this->emptyArray = []; //This is a mrs. parziale move...
        $this->emailSubject = 'Welcome to PrimaFacie!' ;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    
    public function registerAuthenticatePrima($param) {
        
        $validator = Validator::make(Input::all(),
            array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:primafacie.user_tenant,email',
                'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                'confirm_your_password' => 'required|same:password',
                'firm_name' => 'required',
                'g-recaptcha-response' => 'required',
                'terms' => 'required'
            ),
            array(
                'unique' => 'The email address you provided is already associated with a PrimaFacie account.  Please either choose another email address or contact support via email (support@primafacienow.com) or via phone during business hours (9AM-5PM Eastern) (616) 422-5812 to resolve this matter.'
            )
        );

        if ($validator->fails()) {
            return Redirect::route('account-create')
                ->withErrors($validator)
                ->withInput();
        } else {

            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeZxBMTAAAAAOvzq1iahgoZ4-ClqoTDE_lQa-ps&response=" . Input::get('g-recaptcha-response') . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

            // create account
            // Define Variables
            $user['name'] = Input::get('firm_name');
            $user['first_name'] = Input::get('first_name');
            $user['middle_name'] = Input::get('middle_name');
            $user['last_name'] = Input::get('last_name');
            $user['email'] = Input::get('email');
            $user['password'] = Input::get('password');

            // Tenant Code
            $code = str_random(6) . date('ymdB');

            // Create the Tenant
            $tenant = new Tenant();
            $tenant->name = $user['name'];
            $tenant->billing_first_name = $user['first_name'];
            $tenant->billing_last_name = $user['last_name'];
            $tenant->billing_middle_name = $user['middle_name'];
            $tenant->email = $user['email'];
            $tenant->code = $code;
            $tenant->status_id = 2;
            $tenant->save();

            // Creating the database
            DB::connection('master')->statement(DB::raw(sprintf('CREATE SCHEMA %s;', trim($code))));

            // Link User With Tenant
            $userTenant = new UserTenant();
            $userTenant->email = $user['email'];
            $userTenant->tenant_code = $code;
            $userTenant->save();

            $primafacie = new Primafacie();

            if ($tenant) {
                $user["to"] = "seed";
                $user["cod"] = $code;
                $url = URL::route('tenant-go') . '?' . http_build_query($user);
                $primafacie->sendTrialEmail($tenant->id);
                return Redirect::to($url);
            }
        }
        
    }
    
    
    public function registerAuthenticateClient($param) {
        
       
        
    }
}
