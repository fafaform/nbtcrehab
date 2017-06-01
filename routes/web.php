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
  Route::get('/staffs', 'StaffController@index');
  Route::get('/staffs/create', 'StaffController@create');
  Route::post('/staffs', 'StaffController@store');
  Route::get('/staffs/{id}/edit', 'StaffController@edit');
  Route::put('/staffs/{id}', 'StaffController@update');
  Route::delete('/staffs/{id}', 'StaffController@destroy');

  Route::get('/patients', 'PatientController@index');
  Route::get('/patients/create', 'PatientController@create');
  Route::post('/patients', 'PatientController@store');
  Route::get('/patients/{id}/edit', 'PatientController@edit');
  Route::put('/patients/{id}', 'PatientController@update');
  Route::delete('/patients/{id}', 'PatientController@destroy');

  Route::get('/devices', 'DeviceController@index');
  Route::get('/devices/create', 'DeviceController@create');
  Route::post('/devices', 'DeviceController@store');
  Route::get('/devices/{id}/edit', 'DeviceController@edit');
  Route::put('/devices/{id}', 'DeviceController@update');
  Route::delete('/devices/{id}', 'DeviceController@destroy');
  Route::get('/devices/{Patient_ID}', 'DeviceController@devices_patients');

  Route::get('/thresholds/{Patient_ID}/{Device_ID}', 'ThresholdController@index');
  Route::get('/thresholds/create', 'ThresholdController@create');
  Route::post('/thresholds', 'ThresholdController@store');
  Route::get('/thresholds/{id}/edit', 'ThresholdController@edit');
  Route::put('/thresholds/{id}', 'ThresholdController@update');
  Route::delete('/thresholds/{id}', 'ThresholdController@destroy');

  Route::get('/monitor/{Patient_ID}/{Device_ID}', 'MonitorController@index');
  Route::post('/monitor/testmail', 'MonitorController@testmail');
  Route::get('/monitor/summary/{Patient_ID}/{Device_ID}', 'PatientWeekController@summary');
});
