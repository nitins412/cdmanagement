<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

/*
 * Route::get('/', function () {
 * return view('welcome');
 * });
 *
 * Route::get('/', function () {
 * return view('welcome.index', ['name' => 'test']);
 * });
 */
Route::get ( '/', 'WelcomeController@index' );

// Route::get('cddetail/track_id/{id}', 'CddetailController@index');

Route::get ( 'cddetail/track_id/{id}', 'WelcomeController@getcddetail' );