<?php

use Illuminate\Support\Facades\Route;

$routes = [
    '/' => 'index',
    'sadrzaj' => 'sadrzaj',
    'apartmani' => 'apartmani',
    'galerija' => 'galerija',
    'tehnicki-prikaz' => 'tehnicki-prikaz',
    
];

foreach ($routes as $uri => $view) {
    Route::get($uri, fn() => view($view));
}

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
Route::view('/', 'index');

Route::get('sitemap.xml', 'App\Http\Controllers\SitemapController@index');

Auth::routes(['verify' => false, 'register' => false]);

Route::group(['prefix' => 'cms', 'middleware' => ['auth', 'active']], function() {

    Route::get('/', function () { return view('cms.index'); });
    
    Route::resource('users', 'App\Http\Controllers\UsersController')->except('show');
    Route::post('users/ajax', 'App\Http\Controllers\UsersController@ajax');

    Route::resource('gallery', 'App\Http\Controllers\GalleryController')->only('index', 'destroy');
    Route::post('gallery/upload', 'App\Http\Controllers\GalleryController@upload');

    Route::resource('menu', 'App\Http\Controllers\MenuController')->except('show');
    Route::post('menu/ajax', 'App\Http\Controllers\MenuController@ajax');    

    Route::resource('messages', 'App\Http\Controllers\MessageController')->except('show');
    Route::post('messages/ajax', 'App\Http\Controllers\MessageController@ajax');  

    Route::resource('settings', 'App\Http\Controllers\SettingsController')->only('update', 'edit');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');