<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('layout/homepage');
});

Route::get('/ticket',function(){
    return view('layout/ticketbooking');
});
Route::post('/booking',function(){
    return view('layout/booking');
});
Route::post('/booking',function(){
    return view('layout/booking');
});
Route::get('/booking',function(){
    return view('layout/booking');
});

Route::post('/sbooking',function(){
    return view('layout/showbooking');
});

Route::get('/sbooking',function(){
    return view('layout/showbooking');
});