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

Route::get('/', function () {

//    dd(WPPersons::get()->toArray());
//    return view('welcome');
    return WPPersons::get();
});


Route::get('/new', function (){

   return WPPersons::create([
        'id' => \Ramsey\Uuid\Uuid::uuid4(),
        'name' => 'Jonas',
        'email' => 'jonas@test.com',
        'phone' => '+44056231'
    ]);
});