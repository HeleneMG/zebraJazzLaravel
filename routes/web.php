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
Route::view('/mentions-legales', 'mentions-legales');

Route::view('/contact', 'contact');
Route::any('/contact/store', 'contactController@store');

Route::view('/galerie', 'galerie');
Route::view('/home', 'home');

Route::view('/register', 'register');

Route::any('/espace-admin', 'AnnonceController@afficherEspaceAdmin');
Route::any('/deconnexion', 'AnnonceController@deconnexion');

Auth::routes();

Route::view('/login', 'login');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
