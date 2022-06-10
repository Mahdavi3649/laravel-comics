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
    return view('welcome');
})->name('home');

Route::get('/characters', function () {
    return 'characters';
})->name('characters');


Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics.index', compact('comics'));
})->name('comics');



Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    //dd(count($comics));
    //dd($id);

    if($id >= 0 && is_numeric($id) && $id < count($comics)){
        //dd($id);
        //dd($comics[$id]);
        $comic = ($comics[$id]);
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
    
})->name('single-comic');


Route::get('/movies', function () {
    return 'movies';
})->name('movies');


Route::get('/tv', function () {
    return 'tv';
})->name('tv');


Route::get('/games', function () {
    return 'games';
})->name('games');

Route::get('/collectibiles', function () {
    return 'collectibiles';
})->name('collectibiles');

Route::get('/videos', function () {
    return 'videos';
})->name('videos');

Route::get('/fans', function () {
    return 'fans';
})->name('fans');

Route::get('/news', function () {
    return 'news';
})->name('news');

Route::get('/shop', function () {
    return 'shop';
})->name('shop');



Route::get('/', function () {
    $comics = config('db.comics');
    return view('home', compact('comics'));
})->name('home');

