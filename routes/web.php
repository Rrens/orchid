<?php

use App\Http\Controllers\AutConroller;
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
    return view('admin.pages.dashboard');
});

// Route::get('login', function () {
//     return view('admin.pages.login');
// });
Route::get('login', [AutConroller::class, 'login']);


Route::post('anjay', [AutConroller::class, 'post_login']);
