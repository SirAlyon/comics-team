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

Route::get('/', function () {
    return view('home');
})->name('home');

/* Route::get('/comics', function () {
    $comics = config('db.comics');
    //dd($comics);
    return view('db', compact('comics'));
})->name('db'); */

Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('products.index', compact('comics'));
})->name('products.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    
    if ($id >= 0 && is_numeric($id) && $id < count($comics)){
        $comic = $comics[$id];
        //dd($comics);
        return view('products.show', compact('comic'));
    }else{
        abort(404);
    }
    
})->name('products.show');