<?php

use Illuminate\Support\Facades\Route;

$routes = [
    '/' => 'index',
    'sadrzaj' => 'sadrzaj',
    'apartmani' => 'apartmani',
    
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

    Route::resource('galleries', 'App\Http\Controllers\GalleryController')->except('show');
    Route::controller(App\Http\Controllers\GalleryController::class)->group(function () {
        Route::post('galleries/ajax', 'ajax');    
        Route::post('galleries/{id}/upload', 'upload');
        Route::delete('galleries/{id}/delete', 'delete');
    });


    Route::resource('texts', 'App\Http\Controllers\TextController')->only('index','update','edit');
    Route::controller(App\Http\Controllers\TextController::class)->group(function () {
        Route::post('texts/ajax',  'ajax');  
        Route::get('texts/imagedelete/{id}', 'removeImage');
    });

    // Route::resource('menu', 'App\Http\Controllers\MenuController')->except('show');
    // Route::post('menu/ajax', 'App\Http\Controllers\MenuController@ajax');    

    Route::resource('apartments', 'App\Http\Controllers\ApartmentController')->except('show');
    Route::post('apartments/ajax', 'App\Http\Controllers\ApartmentController@ajax');    

    Route::resource('messages', 'App\Http\Controllers\MessageController')->except('show');
    Route::post('messages/ajax', 'App\Http\Controllers\MessageController@ajax');  

    Route::resource('settings', 'App\Http\Controllers\SettingsController')->only('update', 'edit');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');