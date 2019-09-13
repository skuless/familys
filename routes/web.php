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

Auth::routes();
// Logout du compte connecté
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('home');
 })->name('logout');

Route::get('/', 'HomeController@index')->name('/');
Route::get('home', 'HomeController@index')->name('home');

// Ressource route
Route::resource('contact', 'Table\ContactController');
Route::resource('registre', 'Table\RegistresController');
Route::resource('administration', 'Admin\AdministrationController');

// Administration
Route::get('admin', 'Admin\AdministrationController@index')->name('admin');
Route::post('create-user', 'Auth\RegisterController@create')->name('create.user');

// Tableau
Route::get('contact', 'Table\ContactController@show')->name('contact');
Route::get('registre', 'Table\RegistresController@show')->name('registre');

// Formulaire
Route::get('Create-contact', 'HomeController@formTel')->name('newContact');
Route::get('Create-registre', 'HomeController@formRegistre')->name('newRegistre');
// Route::get('Create-comptabilite' , 'HomeController@formComptabilite')->name('compta');

Route::post('/formulaireContact', 'FormController@validateContact')->name('formulaire.validateContact');
Route::post('/formulaireRegistre', 'FormController@validateRegistre')->name('formulaire.validateRegistre');