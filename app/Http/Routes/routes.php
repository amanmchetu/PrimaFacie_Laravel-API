<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
Authentication
 */
Route::group(['middleware' => ['web', 'admin']], function()
{
    
});


//Login
Route::group(['middleware' => 'web'], function()
{
    // Login Routes...
    $this->get('api/v1/clientportal/login', 'Auth/LoginController@loginAuthenticateClient')->middleware('auth:api');
    $this->get('api/v1/clientportal/logout', 'Auth/LoginController@logoutClient')->middleware('auth:api');
    //$this->get('api/primaportal/login', 'Auth/LoginController@loginAuthenticatePrima')->middleware('auth:api');    
    //$this->get('api/primaportal/logout', 'Auth/LoginController@logoutPrima')->middleware('auth:api');

    
});

// Register
Route::group(['middleware' => 'web'], function()
{
    // Registration Routes...
    //$this->post('api/primaportal/register', 'Auth/RegisterController@registerAuthenticatePrima')->middleware('auth:api');
    $this->post('api/v1/clientportal/register', 'Auth/RegisterController@registerAuthenticateClient')->middleware('auth:api');
    
});

// Forgot Password
Route::group(['middleware' => 'web'], function()
{
    // Forgot Password Routes...
    //$this->post('api/primaportal/password/email', 'Auth/ForgotPasswordController@sendResetLinkEmail');
    $this->post('api/v1/clientportal/login/password/email', 'Auth/ForgotPasswordController@sendResetLinkEmail');
    
});

// Reset Password
Route::group(['middleware' => 'web'], function()
{
    // Reset Password Routes...
    //$this->post('api/primaportal/password/reset', 'ResetPasswordController@resetpassword');
    $this->post('api/v1/clientportal/password/reset', 'ResetPasswordController@resetpassword');
      
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {
   
    Route::get('api/v1/clientportal/who-iam', 'AddressController@getWhoiam');
    
    Route::get('api/v1/clientportal/contacts', 'ContactController@getContacts');
    
    Route::get('api/v1/clientportal/contacts/{id}', 'ContactController@getContactDetails');
    
    Route::get('api/v1/clientportal/cases', 'CaseController@getCases');
    
    Route::get('api/v1/clientportal/cases/{id}', 'CaseController@getCasesDetails');
    
    Route::get('api/v1/clientportal/address', 'AddressController@getAddress');
    
    Route::get('api/v1/clientportal/previous-address', 'AddressController@getPreAddress');
    
    Route::get('api/v1/clientportal/phones', 'PhoneController@getPhoneDetails');
    
    Route::get('api/v1/clientportal/jobs', 'JobController@getJobDetails');
    
    Route::get('api/v1/clientportal/educational', 'EducationalHistoryController@getEducational');
    
    Route::get('api/v1/clientportal/notes', 'NoteController@getNotes');
    
    Route::get('api/v1/clientportal/i94history', 'i94HistoryController@getI94History');
    
    Route::get('api/v1/clientportal/related-grid', 'TenantController@getRelatedGrid');
    
    Route::get('api/v1/clientportal/flow', 'FlowController@getFlow');
    
    Route::get('api/v1/clientportal/checklist', 'ChecklistController@getChecklist');
    
    Route::get('api/v1/clientportal/recipient-number', 'RecipientNumberController@getRecipientNumber');
   
});

//
//Route::group(['middleware' => ['web']], function () {
//    
//    Route::get('api/primaportal/who-iam', 'AddressController@apiSync');
//    
//    Route::get('api/primaportal/contacts', 'ContactController@apiSync');
//    
//    Route::get('api/primaportal/contacts/{id}', 'ContactController@apiSync');
//    
//    Route::get('api/primaportal/cases', 'CaseController@apiSync');
//    
//    Route::get('api/primaportal/cases/{id}', 'CaseController@apiSync');
//    
//    Route::get('api/primaportal/address', 'AddressController@apiSync');
//    
//    Route::get('api/primaportal/previous-address', 'AddressController@apiSync');
//    
//    Route::get('api/primaportal/phones', 'PhoneController@apiSync');
//    
//    Route::get('api/primaportal/jobs', 'JobController@apiSync');
//    
//    Route::get('api/primaportal/educational', 'EducationalHistoryController@apiSync');
//    
//    Route::get('api/primaportal/notes', 'NoteController@apiSync');
//    
//    Route::get('api/primaportal/i94history', 'i94HistoryController@apiSync');
//    
//    Route::get('api/primaportal/related-grid', 'addressBookController@apiSync');
//    
//    Route::get('api/primaportal/flow', 'FlowController@apiSync');
//    
//    Route::get('api/primaportal/checklist', 'ChecklistController@apiSync');
//    
//    Route::get('api/primaportal/recipient-number', 'RecipientNumberController@apiSync');
//   
//});


