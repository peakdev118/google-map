<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserInfo;

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
Route::prefix('client')->group(function () {
    Route::get('/getuserinfo', [UserInfo::class, 'index']);
});

Route::get('/', function () {
    return view('welcome');
});
