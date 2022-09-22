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
});

Route::get('/settings', function () {
    return view('config-auth/dashboard-config');
})->middleware(['auth'])->name('settings');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


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
