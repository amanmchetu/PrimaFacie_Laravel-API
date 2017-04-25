<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;

use Auth;
use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Mail;
use Validator;
use Redirect;

class NoteController extends Controller
{
    /**
   * Set constants used throughout this class
   * @todo from a performance perspective, these would be better off as constants
   * @since 1.5.0
   */
    public function __construct(){
        $this->breakLine = "\n";
        $this->blankString ="";
        $this->space = " ";
       
    }
    
    public function getNotes() {
        
        $primafacie = new Primafacie();
        $contact = Contact::find(Input::get('contact_id'));

        $notes = Note::with('user', 'Ccase')
            ->where('contact_id', '=', Input::get('contact_id'))
            ->orderBy(DB::raw("STR_TO_DATE(date,'%Y-%m-%d')"), 'DESC')
            ->get();

        return View::make('note.ByContact', array(
            'notes' => $notes,
            'contact' => $contact
        ));

    }
       
}
