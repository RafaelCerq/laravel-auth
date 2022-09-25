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

Route::get('/modelo', function () {
    return view('layouts/modelo');
})->name('modelo');


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->namespace('ConfigAuth')->group(function () {
    Route::get('/settings', 'DashboardConfigController@index')->name('settings');
});

Route::prefix('settings')->middleware('auth')->namespace('ConfigAuth')->group(function () {
    Route::resource('/users', 'UserController');
});

Route::prefix('settings')->middleware('auth','can:acl')->namespace('ConfigAuth')->group(function () {
    Route::resource('/permissions', 'PermissionController');
    Route::resource('/roles', 'RoleController');
});


Route::get('lang', function () {
    $lang = session('lang', 'pt-br');
    if($lang == 'pt-br'){
      $lang = "en";

    }else{
      $lang = "pt-br";
    }
    session(['lang' => $lang]);
    return redirect()->back();

})->name('lang');

require __DIR__.'/auth.php';

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
