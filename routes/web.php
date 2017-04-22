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

use App\Model\WPPersons;


Route::get('/persons', ['uses' => 'WPPersonsController@index']);
Route::get('/generate-fake-data/persons/{count?}', ['uses' => 'WPFakeDataController@generatePersons']);

Route::get('/clients', ['uses' => 'WPClientsController@index']);
Route::get('/generate-fake-data/clients/{count?}', ['uses' => 'WPFakeDataController@generateClients']);
