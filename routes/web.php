<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ShowAllToDoController');
Route::get('/to-dos', 'ShowAllToDoController')->name('to-dos.show-all');
Route::get('/to-dos/create', 'CreateToDoController')->name('to-dos.create');
Route::post('/to-dos', 'StoreToDoController')->name('to-dos.store');
Route::delete('/to-dos/{todo}', 'DeleteToDoController')->name('to-dos.delete');
Route::post('/to-dos/{todo}/mark-as-completed', 'MarkToDoAsCompletedController')->name('to-dos.mark-as-completed');
Route::get('/to-dos/{todo}/edit', 'EditToDoController')->name('to-dos.edit');
Route::put('/to-dos/{todo}', 'UpdateToDoController')->name('to-dos.update');
