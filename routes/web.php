<?php
session_start();

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
})->name('welcome');

Route::get('/dashboard', function () {
    //return view('dashboard');
	switch($_SESSION["login_role"]) {
		case "administrator" :
			return view('administrator_main');
			break;
		case "dispatcher" :
			return view('dispatcher_main');
			break;
		case "receiver" :
			return view('receiver_main');
			break;
		
	}
})->middleware(['auth'])->name('dashboard');

Route::get('administrator_login', function () {
    return view('administrator_login');
})->name('administrator_login');

Route::get('dispatcher_login', function () {
    return view('dispatcher_login');
})->name('dispatcher_login');

Route::get('receiver_login', function () {
    return view('receiver_login');
})->name('receiver_login');

require __DIR__.'/auth.php';
