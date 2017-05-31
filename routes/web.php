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

Route::get('/', 'IndexController@index');
Route::post('/login', 'IndexController@login');
Route::get('/logout', 'IndexController@logout');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/patients', 'PatientController@index');
  Route::get('/patients/create', 'PatientController@create');
  Route::get('/patients/edit/{id}', 'PatientController@edit');
  Route::post('/patients/store', 'PatientController@store');

  Route::get('/devices', 'DeviceController@index');
  Route::get('/devices/{Patient_ID}', 'DeviceController@devices_patients');

  Route::get('/staffs', 'StaffController@index');

  Route::get('/monitor/{Patient_ID}/{Device_ID}', 'MonitorController@index');
  Route::post('/monitor/testmail', 'MonitorController@testmail');
  Route::get('/monitor/summary/{Patient_ID}/{Device_ID}', 'PatientWeekController@summary');

  Route::get('/threshold/{Patient_ID}/{Device_ID}', 'ThresholdController@index');
});
