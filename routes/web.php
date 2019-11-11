<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/quote', function () {
    return view('quote');
});

Route::get('/landlord', function () {
    return view('landlord');
});

Route::get('/commercial', function () {
    return view('commercial');
});

Route::get('/flats', function () {
    return view('flats');
});

Route::get('/engineering', function () {
    return view('engineering');
});

Route::get('/dando', function () {
    return view('dando');
});

Route::get('/llcontents', function () {
    return view('llcontents');
});

Route::get('/terrorism', function () {
    return view('terrorism');
});

Route::get('/portfolios', function () {
    return view('portfolios');
});

Route::get('/otherprods', function () {
    return view('otherprods');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/broker', function () {
    return view('broker');
});

Route::get('/direct', function () {
    return view('direct');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});

Route::get('/claims', function () {
    return view('claims');
});

Route::get('/payments', function () {
    return view('payments');
});

Route::post('/quote', 'QuotesController@store');
Route::post('/contact', 'ContactController@store');
Route::post('/direct', 'QuickQuotesController@store');
Route::post('/claims', 'ClaimsController@store');
Route::post('/payments', 'PaymentsController@store');
Route::post('/broker', 'AgenciesController@store');
Route::post('/claims/updatedclaims', 'UpdatedClaimsController@store');

