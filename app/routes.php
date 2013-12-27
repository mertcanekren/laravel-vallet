<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@Home', 'as' => 'home'));
Route::get('/new', array('uses' => 'CaseController@newRow', 'as' => 'newrow'));
Route::post('/new/add', array('uses' => 'CaseController@addRow', 'as' => 'addrow'));
Route::get('/row/delete/{id}', array('uses' => 'CaseController@deleteRow', 'as' => 'deleterow'));