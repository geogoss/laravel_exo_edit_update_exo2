<?php

use App\Http\Controllers\MemberController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [MemberController::class, 'index']);
Route::get('/member', [MemberController::class, 'member']);
Route::get('/create', [MemberController::class, 'create']);
Route::post('/store', [MemberController::class, 'store']);
Route::delete('/delete/{id}', [MemberController::class, 'destroy']);
Route::get('/show/{id}', [MemberController::class, 'show']);
Route::get('/edit/{id}', [MemberController::class, 'edit']);
Route::put('/update/{id}', [MemberController::class, 'update']);
Route::get('/deleteAll', [MemberController::class, 'deleteAll']);
