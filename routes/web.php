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
    return view('Home');
})->name('pHome');

Route::get('/Contacte', function () {
    return view('Contacte');
})->name('pContacte');

/*Route::get ('/welcome','ControlRecettes@liste');
*/
Route::POST('/welcome','ControlRecettes@visiteur');


Route::view('/Apropos', 'Apropos');



/*
Route :: get('/', ['as' => 'home', function(){
	
	return 'Je suis la page '; 
}])->where('n', '[1-3]');
*/
/*

get('facture/{n}', function($n) { 
    return view('facture')->withNumero($n); 
})->where('n', '[0-9]+');*/
