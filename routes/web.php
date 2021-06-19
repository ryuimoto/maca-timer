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
Route::get('/test/view','Test\ViewController@index');

Route::get('','User\TopController@index')->name('user.top');

Route::get('start','User\PomodoroController@startPomo')->name('user.start_pomo');

Route::get('{run_str_id}','User\PomodoroController@index')->name('user.pomodoro');

Route::get('new_pomodoro/{run_str_id}','User\PomodoroController@newPomodoro')->name('user.new_pomodoro');