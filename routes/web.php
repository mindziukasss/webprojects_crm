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
Route::get('/generate-fake-data/persons/{count?}',
    ['uses' => 'WPFakeDataController@generatePersons']);

Route::get('/clients', ['uses' => 'WPClientsController@index']);
Route::get('/generate-fake-data/clients/{count?}',
    ['uses' => 'WPFakeDataController@generateClients']);

Route::get('/projects', ['uses' => 'WPProjectsController@index']);
Route::get('/generate-fake-data/projects/{count?}',
    ['uses' => 'WPFakeDataController@generateProjects']);

Route::get('/clients_persons_type', ['uses' => 'WPClientsPersonsTypesController@index']);
Route::get('/generate-fake-data/clients_persons_type/{count?}',
    ['uses' => 'WPFakeDataController@generateClientsPersonsType']);

Route::get('/generate-fake-data/clients_persons_connections/{count?}',
    ['uses' => 'WPFakeDataController@generateClientsPersonsConnections']);

Route::get('/loginsname', ['uses' => 'WPLoginsNameController@index']);
Route::get('/generate-fake-data/logins-name/{count?}',
    ['uses' => 'WPFakeDataController@generateLoginsName']);

Route::get('/logins', ['uses' => 'WPLoginsController@index']);
Route::get('/generate-fake-data/logins/{count?}',
    ['uses' => 'WPFakeDataController@generateLogins']);

Route::get('/generate-fake-data/projects_logins_connection/{count?}',
    ['uses' => 'WPFakeDataController@generateProjectsLoginsConnection']);





