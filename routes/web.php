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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::group([
    'middleware' => 'roles',
    'roles' => ['asdasdas']
], function(){
    Route::resource('sites', 'SitesController');   
});
Route::get('/', 'App\Http\Controllers\SitesController@index');
Route::get('/add', 'App\Http\Controllers\SitesController@add');
Route::post('/save', [
    'uses' => 'App\Http\Controllers\SitesController@save',
    'as' => 'sites.save'
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/site/{site}', [
    'uses' => 'App\Http\Controllers\SitesController@show',
    'as' => 'sites.show'
]);
