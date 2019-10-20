<?php

Route::get('/', function () {
    return view('home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth', 'namespace' => 'recepcao\atendimento'], function () {
	Route::resource('atendimento', 'AtendimentoController');
});

// SCRIPTS POST
Route::group(['middleware' => 'auth', 'namespace' => 'recepcao\atendimento'], function () {
	Route::post('paciente', 'PacienteController@index')->name('listaPacientes');
});




