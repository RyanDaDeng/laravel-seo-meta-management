<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return redirect('app');
});

Route::get('/home', function () {
    return redirect('app');
});

Route::middleware('admin')->get('app/api-management', function () {
    return view('modules.api-management.index');
});


Auth::routes();


