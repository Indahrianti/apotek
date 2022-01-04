<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\AsalController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\TransaksiController;




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

Auth::routes(
    [
        'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// hanya untuk role admin
Route::group(['prefix' => 'tiket', 'middleware' => ['auth']], function(){
    
    Route::get('penumpang', function(){
        return view('penumpang.index');
    })->middleware(['role:admin|member']);

    Route::get('kereta', function(){
        return view('kereta.index');
    })->middleware(['role:admin|member']);

    Route::get('asal', function(){
        return view('asal.create');
    })->middleware(['role:admin|member']);

    Route::resource('asal', AsalController::class);

    Route::resource('tujuan', TujuanController::class);

    Route::resource('kereta', KeretaController::class);

    Route::resource('penumpang', PenumpangController::class);


});
    //hanya untuk role member
//  Route::group(['prefix' => 'member', 'middleware' => ['auth', 'role:member']], function(){
//     Route::get('penumpang', function(){
//         return view('penumpang.index');
//     })->middleware(['role:member']);

//     Route::get('profile', function(){
//         return 'halaman profile member';
//     });
// }); 
