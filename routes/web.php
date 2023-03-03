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
    return view('Producto.welcome');
});

function index()
{
    return view('Producto.index');
}

function create()
{
    return view('Producto.create');
}

Route::get('/index', function () {
    return index();
});

Route::get('/create', function() {
    return create();
});

function edit()
{
    return view('Producto.edit');
}