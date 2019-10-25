<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'accueil');
Route::view('/affiches', 'affiches');
Route::view('/agenda', 'agenda');
Route::view('/bio', 'bio');
Route::view('/concerts', 'concerts');
Route::view('/contact', 'contact');
Route::view('/galerie', 'galerie');

Route::view('/login', 'login');
Route::view('/register', 'register');

Route::any('/espace-admin', 'AnnonceController@afficherEspaceAdmin');
Route::any('/deconnexion', 'AnnonceController@deconnexion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
