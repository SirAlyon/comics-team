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


Auth::routes();


Route::get('/', function () {
    return view('home');
})->name('home');


//Admin Views

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function (){
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('characters', 'CharacterController');
    Route::resource('comics', 'CharacterController');

});

Route::prefix('guest')->name('guest.')->namespace('Guest')->group(function (){
    Route::resource('characters', 'CharacterController');
    Route::resource('comics', 'ComicController');

});




//Comics Views

/* Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics.index', compact('comics'));
})->name('comics.index');


Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    
    if ($id >= 0 && is_numeric($id) && $id < count($comics)){
        $comic = $comics[$id];
        //dd($comics);
        return view('comics.show', compact('comic'));
    }else{
        abort(404);
    }
    
})->name('comics.show');
 

