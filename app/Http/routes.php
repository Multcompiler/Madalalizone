<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('loan');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('loan');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('loan');
//Login Authentication

//Register Authentication
Route::get('auth/dalali/register', 'RegisterController@getRegisterDalaliForm');
Route::get('auth/loan/register', 'RegisterController@getRegisterLoanForm');
Route::get('auth/loan/home', 'RegisterController@getLoanForm');
Route::get('posts/registercategory', 'RegisterController@getChoice')->name('categoryregister');



Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin_dashboard');
});


Route::resource('admin/buy', 'BuyController');

Route::resource('admin/sell', 'SellController');


Route::get('/', 'PostController@getIndex');

//Party Final Year
Route::get('/View-Party-Participants', 'PartyController@party_view');
Route::get('/Register-Party-Participants-Admin', 'PartyController@party_store_view')->name('admin_add');
Route::post('/Receive-Payment', 'PartyController@party_store')->name('party_receive');
Route::post('/Add-Budget', 'PartyController@party_budget_add')->name('party_budget_add');
Route::delete('/Delete-Payment/{id}', 'PartyController@party_delete')->name('party_payment_delete');
Route::delete('/Delete-Budget/{id}', 'PartyController@party_budget_delete')->name('party_budget_delete');

//End Party Final Year

Route::get('/terms&conditions', 'PostController@getTerms')->name('terms');
Route::get('/posts/applicationform', 'PostController@getForm')->name('form');
Route::get('/posts/contact', 'PostController@getContact')->name('contact');
Route::get('/posts/applicant', 'PostController@getApplicant')->name('applicant');


//House Luku Manage
Route::get('/Luku/View','LukuController@view_luku')->name('view_luku');
Route::get('/Luku/Single/View/{id}','LukuController@single_luku_member')->name('single_luku_member');
Route::get('/Add/Luku/Info','LukuController@add_luku_info')->name('add_luku_info');
Route::get('/Add/Room/Users','LukuController@add_room')->name('add_room');
Route::post('/Store/Luku/Info','LukuController@store_luku_info')->name('store_luku_info');
Route::post('/Store/Room/Users','LukuController@add_room_users')->name('add_room_users');

Route::get('/payment/month',function () {
    $month = Input::get('option');
    $data_chart = DB::table('luku_infos')
        ->select(DB::raw('MONTH(luku_infos.created_at) as month'),DB::raw('sum(luku_infos.amount) as amount'),'luku_infos.user_id','firstname','lastname')
        ->join('room_users', 'luku_infos.user_id', '=', 'room_users.id')
        ->where(DB::raw('MONTH(luku_infos.created_at)'), [$month])
        ->groupBy('luku_infos.user_id','month')
        ->get();

    //dd($data);
    return response()->json($data_chart);

});



Route::post('/buy', 'PostController@storebuy');

Route::post('/sell', 'PostController@storesell');

Route::auth();

Route::get('/home', 'HomeController@index');
