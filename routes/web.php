<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;

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
Route::get('/hello', 'HelloController@index');
Route::get('/hello/view', 'HelloController@view');
Route::get('/hello/list', 'HelloController@list');
Route::get('/view/escape', 'ViewController@escape');
Route::get('/view/if', 'ViewController@if');
Route::get('/view/unless', 'ViewController@unless');
Route::get('/view/isset', 'ViewController@isset');
Route::get('/view/switch', 'ViewController@switch');
Route::get('/view/while', 'ViewController@while');
Route::get('/view/for', 'ViewController@for');
Route::get('/view/list', 'ViewController@list');
Route::get('/view/foreach_assoc', 'ViewController@foreach_assoc');
Route::get('/view/foreach_loop', 'ViewController@foreach_loop');
Route::get('/view/forelse', 'ViewController@forelse');
Route::get('/view/style_class', 'ViewController@style_class');
Route::get('/view/checked', 'ViewController@checked');
Route::get('/view/master', 'ViewController@master');
Route::get('/view/comp', 'ViewController@comp');
Route::get('/route/param/{id?}', 'RouteController@param')
    ->whereNumber('id');
Route::get('/route/enum_param/{category}', 'RouteController@enum_param');
Route::redirect('/hoge', '/', 301);
Route::resource('/articles', 'ArticleController')
    ->except(['edit', 'update']);

Route::controller(HelloController::class)->group(function ()
{
    Route::get('/hello', 'index');
    Route::get('/hello/view', 'view');
    Route::get('/hello/list', 'list');
});

Route::fallback(function()
{
    return view('route.error');
});

Route::get('/ctrl/plain', 'ctrlController@plain');
Route::get('/ctrl/header', 'ctrlController@header');
Route::get('/ctrl/outJson', 'ctrlController@outJson');
Route::get('/ctrl/outFile', 'ctrlController@outFile');
Route::get('/ctrl/outCsv', 'ctrlController@outCsv');
