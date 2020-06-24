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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('error', function () {
    return view('welcome');
});
Route::get('contact', function () {
    return view('Contactez-nous');
});
Route::get('register', function () {
    return view('registration');
});

Route::get('apropos', function () {
    return view('AproposDeNous');
});

Route::get('favorisCat', function () {
    return view('ProdFavoris');
});

Route::post('inscriptions', 'UserController@inscription');


Route::post('AddUtilisateur', 'UserController@create');
Route::post('DeleteUtilisateur', 'UserController@destroy');
Route::get('multiDeleteUser', 'UserController@Multidestroy')->name('massremove');
Route::post('ModifUtilisateur', 'UserController@edit');
Route::get('ReadUtilisateur', 'UserController@show');

Route::post('AddProduit', 'ProduitController@create');
Route::post('DeleteProduit', 'ProduitController@destroy');
Route::get('multiDeleteProduit', 'ProduitController@Multidestroy')->name('massremove');
Route::post('ModifProduit', 'ProduitController@edit');
Route::get('ReadProduit', 'ProduitController@show');
Route::get('Nosprods', 'ProduitController@catalogue');
Route::post('Search', 'ProduitController@rechercher');
Route::post('deleteFavoris', 'ProduitController@delfav');
Route::post('addFavoris', 'ProduitController@addfav');

Route::post('AddCategorie', 'CategorieController@create');
Route::post('DeleteCategorie', 'CategorieController@destroy');
Route::post('ModifCategorie', 'CategorieController@edit');
Route::get('ReadCategorie', 'CategorieController@show');

Route::post('commander', 'CommandeController@commander_func');
Route::get('ReadCommande', 'CommandeController@show');


Route::post('log','LogController@authenticate');
Route::post('logout','LogController@lgout');
