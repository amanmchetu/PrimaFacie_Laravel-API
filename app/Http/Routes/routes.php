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
    $this->get('api/v1/login', 'Auth/LoginController@loginAuthenticateClient')->middleware('auth:api');
    $this->get('api/v1/logout', 'Auth/LoginController@logoutClient')->middleware('auth:api');
    //$this->get('api/primaportal/login', 'Auth/LoginController@loginAuthenticatePrima')->middleware('auth:api');    
    //$this->get('api/primaportal/logout', 'Auth/LoginController@logoutPrima')->middleware('auth:api');

    
});

// Register
Route::group(['middleware' => 'web'], function()
{
    // Registration Routes...
    //$this->post('api/primaportal/register', 'Auth/RegisterController@registerAuthenticatePrima')->middleware('auth:api');
    //$this->post('api/v1/register', 'Auth/RegisterController@registerAuthenticateClient')->middleware('auth:api');
    
});

// Forgot Password
Route::group(['middleware' => 'web'], function()
{
    // Forgot Password Routes...
    //$this->post('api/primaportal/password/email', 'Auth/ForgotPasswordController@sendResetLinkEmail');
    $this->post('api/v1/login/password/email', 'Auth/ForgotPasswordController@sendResetLinkEmail');
    
});

// Reset Password
Route::group(['middleware' => 'web'], function()
{
    // Reset Password Routes...
    //$this->post('api/primaportal/password/reset', 'ResetPasswordController@resetpassword');
    $this->post('api/v1/password/reset', 'ResetPasswordController@resetpassword');
      
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
   
    Route::get('api/v1/who-iam', 'AddressController@getWhoiam');
    
    Route::get('api/v1/contacts', 'ContactController@getContacts');
    
    Route::get('api/v1/contacts/{id}', 'ContactController@getContactDetails');
    
    Route::get('api/v1/cases', 'CaseController@getCases');
    
    Route::get('api/v1/cases/{id}', 'CaseController@getCasesDetails');
    
    Route::get('api/v1/address', 'AddressController@getAddress');
    
    Route::get('api/v1/previous-address', 'AddressController@getPreAddress');
    
    Route::get('api/v1/phones', 'PhoneController@getPhoneDetails');
    
    Route::get('api/v1/jobs', 'JobController@getJobDetails');
    
    Route::get('api/v1/educational', 'EducationalHistoryController@getEducational');
    
    Route::get('api/v1/notes', 'NoteController@getNotes');
    
    Route::get('api/v1/i94history', 'i94HistoryController@getI94History');
    
    Route::get('api/v1/related-grid', 'TenantController@getRelatedGrid');
    
    Route::get('api/v1/flow', 'FlowController@getFlow');
    
    Route::get('api/v1/checklist', 'ChecklistController@getChecklist');
    
    Route::get('api/v1/recipient-number', 'RecipientNumberController@getRecipientNumber');
   
});



Route::group(['middleware' => ['web']], function () {
   
    Route::get('api/v1/s3upload', 'S3DocumentUpload@UploadFile');
    Route::post('api/v1/s3uploaddocs', 'S3DocumentUpload@UploadFile');

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


