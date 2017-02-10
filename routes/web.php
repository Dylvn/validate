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

/*
    Renvoie la page /resources/views/pages/index.blade.php
    Quand on vas sur site.fr/
*/
Route::get('/', function () {
    return view('pages.index');
});

/*
    Renvoie le Controller FilmController sur la méthode index.
    Quand on vas sur site.fr/products
*/
Route::get('/products', 'FilmController@index');

/*
    Renvoie le Controller FilmController sur la méthode show.
    Quand on vas sur site.fr/products/5
*/
Route::get('/product/{id}', 'FilmController@show');

/*
    Renvoie le Controller FilmController sur la méthode create.
    Quand on vas sur site.fr/addProducts
    middleware('auth') sert a interdire l'accés a ceux qui ne sont pas connécté.
*/
Route::get('/addProduct', 'FilmController@create')->middleware('auth');

/*
    Renvoie le Controller FilmController sur la méthode store.
    Quand on vas sur site.fr/addProducts
    middleware('auth') sert a interdire l'accés a ceux qui ne sont pas connécté.
*/
Route::post('/addProduct', 'FilmController@store')->middleware('auth');

/*
    Renvoie le Controller FilmController sur la méthode edit.
    Quand on vas sur site.fr/product/5/update
    middleware('auth') sert a interdire l'accés a ceux qui ne sont pas connécté.
*/
Route::get('/product/{id}/update', 'FilmController@edit')->middleware('auth');

/*
    Renvoie le Controller FilmController sur la méthode update.
    Quand on vas sur site.fr/product/5/update
    middleware('auth') sert a interdire l'accés a ceux qui ne sont pas connécté.
    Utilisation de PUT
*/
Route::put('/product/{id}/update', 'FilmController@update')->middleware('auth');


/*
    Renvoie la page contact.blade.php
*/
Route::get('/contact', function() {
    return view('pages.contact');
});

/*
    Renvoie le Controller ContactController sur la méthode __invoke.
    Quand on vas sur site.fr/contact
*/
Route::post('/contact', 'ContactController');

/*
    Renvoie le Controller MessageController sur la méthode index.
    Quand on vas sur site.fr/messages
*/
Route::get('/messages', 'MessageController@index');

/*
    Renvoie le Controller MessageController sur la méthode show.
    Quand on vas sur site.fr/messages/5
*/
Route::get('/message/{id}', 'MessageController@show');

/*
    Renvoie le Controller MessageController sur la méthode marquerCommeLu.
    Quand on vas sur site.fr/messages/lu/5
*/
Route::get('/message/lu/{id}', 'MessageController@marquerCommeLu');

/*
    Renvoie le Controller MessageController sur la méthode marquerCommeNonLu.
    Quand on vas sur site.fr/messages/nonlu/5
*/
Route::get('/message/nonlu/{id}', 'MessageController@marquerCommeNonLu');

/*
    Renvoie le Controller MessageController sur la méthode allMessages.
    Quand on vas sur site.fr/allMessages
*/
Route::get('/allMessages', 'MessageController@allMessages');

Auth::routes();

Route::get('/home', 'HomeController@index');
