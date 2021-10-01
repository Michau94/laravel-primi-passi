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
    $data = [
        // 'name' => 'Michau',
        'lastname' => 'Wado',
        'links' => ['home', 'blog', 'info', 'projects']
    ];
    return view('home', $data);
})->name('home');


Route::get('/blog', function () {
    $data = [
        'links' => ['home', 'blog', 'info', 'projects']
    ];
    return view('blog', $data);
})->name('blog');

Route::get('/info', function () {
    $data = [

        'links' => ['home', 'blog', 'info', 'projects']
    ];
    return view('info', $data);
})->name('info');

Route::get('/projects', function () {
    $data = [
        'links' => ['home', 'blog', 'info', 'projects']
    ];
    return view('projects', $data);
})->name('projects');
