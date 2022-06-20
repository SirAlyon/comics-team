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

//Guest Character views

Route::get('/guest/characters', 'Guest\CharacterController@index');
Route::get('/guest/characters/{character}', 'Guest\CharacterController@show');

//Character Views
Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('characters', 'Admin\CharacterController');
});

Route::prefix('guest')->name('guest.')->group(function (){
    Route::resource('characters', 'Guest\CharacterController');;
});




//Comics Views

Route::get('/comics', function () {
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