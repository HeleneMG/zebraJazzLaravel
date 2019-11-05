<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'accueil');
Route::view('/affiches', 'affiches');
Route::view('/agenda', 'agenda');
Route::view('/bio', 'bio');
Route::view('/concerts', 'concerts');
Route::view('/espace-admin', 'espace-admin');
Route::view('/galerie', 'galerie');
Route::view('/mentions-legales', 'mentions-legales');

Route::view('/contact', 'contact');
Route::any('/contact/store', 'contactController@store');

Auth::routes();
Route::view('/home', 'home');

Route::get('/home', 'HomeController@index')->name('home');

//Route::any('/espace-admin', 'AnnonceController@afficherEspaceAdmin');
//Route::any('/deconnexion', 'AnnonceController@deconnexion');
