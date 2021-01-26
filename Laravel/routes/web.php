<?php

use Illuminate\Support\Facades\Route;

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
    return view('/index');
});

Route::get('/index', function () {
    return view('/index');
});

Route::get('/indexkorisnik', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Musterija')
	{
		return view('noaccess');
    }
    else{
    return view('indexkorisnik');
    }
});

Route::get('/menipr', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Musterija')
	{
		return view('noaccess');
    }
    else{
    return view('menipr');
    }
});

Route::get('/meniadmin', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
	{
		return view('noaccess');
    }
    else{
        return view('meniadmin');
    }
});

Route::get('/infood', function () {
    return view('infood');
});

Route::get('/infopr', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Musterija')
	{
		return view('noaccess');
    }
    else{
        return view('infopr');
    }
});

Route::get('/infoadmin', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
	{
		return view('noaccess');
    }
    else{
        return view('infoadmin');
    }
});

Route::get('/profil', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Musterija')
	{
		return view('noaccess');
    }
    else{
        return view('profil');
    }
});

Route::get('/profiladmin', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
	{
		return view('noaccess');
    }
    else{
        return view('profiladmin');
    }
});

Route::get('/admin', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
	{
		return view('noaccess');
    }
    else{
        return view('admin');
    }
});

Route::get('/uprkor', function() {
    if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
	{
		return view('noaccess');
    }
    else{
        return redirect('uprkor');
    }
});

Route::get('/noaccess', function () {
    return view('noaccess');
});

Route::get('/podaci', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Musterija')
	{
		return view('noaccess');
    }
    else{
        return view('podaci');
    }
});

Route::get('/podaciadmin', function () {
    if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
	{
		return view('noaccess');
    }
    else{
        return view('podaciadmin');
    }
});

Route::view('loginme', 'loginme');
Route::post('loginme', 'App\Http\Controllers\loginController@index');

Route::view('logout', 'logout');
Route::post('logout', 'App\Http\Controllers\logoutController@index');

Route::view('register', 'register');
Route::post('register', 'App\Http\Controllers\registerController@index');

Route::view('delete', 'delete');
Route::post('delete', 'App\Http\Controllers\deleteController@index');

Route::view('update', 'update');
Route::post('update', 'App\Http\Controllers\updateController@index');

Route::view('podaciupdate', 'podaciupdate');
Route::post('podaciupdate', 'App\Http\Controllers\podaciUpdateController@index');

Route::view('noaccess', 'noaccess');


Route::get('profil','App\Http\Controllers\profilController@index');

Route::get('profiladmin','App\Http\Controllers\profilAdminController@index');

Route::get('/uprkor', 'App\Http\Controllers\korisniciController@index');

//URL::forceRootUrl('http://studenti.sum.ba/projekti/fsre_rwa/2020/g21');





