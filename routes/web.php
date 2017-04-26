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

Route::get('/', function (){
    return view('main');
});

Route::group(['prefix' => 'generate-fake-data'], function () {

    Route::get('/persons/{count?}', ['uses' => 'WPFakeDataController@generatePersons']);
    Route::get('/clients/{count?}', ['uses' => 'WPFakeDataController@generateClients']);
    Route::get('/projects/{count?}', ['uses' => 'WPFakeDataController@generateProjects']);
    Route::get('/clients_persons_type/{count?}', ['uses' => 'WPFakeDataController@generateClientsPersonsType']);
    Route::get('/clients_persons_connections/{count?}', ['uses' => 'WPFakeDataController@generateClientsPersonsConnections']);
    Route::get('/logins-name/{count?}', ['uses' => 'WPFakeDataController@generateLoginsName']);
    Route::get('/logins/{count?}', ['uses' => 'WPFakeDataController@generateLogins']);
    Route::get('/projects_logins_connection/{count?}', ['uses' => 'WPFakeDataController@generateProjectsLoginsConnection']);
    Route::get('/projects-persons-types/{count?}', ['uses' => 'WPFakeDataController@generateProjectsPersonsTypes']);
    Route::get('/projects-persons-types-connections/{count?}', ['uses' => 'WPFakeDataController@generateProjectsPersonsTypesConnections']);
    Route::get('/projects-types/{count?}', ['uses' => 'WPFakeDataController@generateProjectsTypes']);
});

Route::group(['prefix' => 'projects'], function () {

    Route::get('/persons-types', ['uses' => 'WPProjectsPersonsTypesController@index']);
    Route::get('/types', ['uses' => 'WPProjectsTypesController@index']);
    Route::get('/', ['uses' => 'WPProjectsController@index']);
});

Route::group(['prefix' => 'persons'], function () {

    Route::get('/', ['uses' => 'WPPersonsController@index']);
});

Route::group(['prefix' => 'logins'], function () {

    Route::get('/name', ['uses' => 'WPLoginsNameController@index']);
    Route::get('/', ['uses' => 'WPLoginsController@index']);
});

Route::get('/clients-persons_types', ['uses' => 'WPClientsPersonsTypesController@index']);
Route::get('/clients', ['uses' => 'WPClientsController@index']);












