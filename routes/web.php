<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = config('comics');
    $firstName = 'Gino';
    $lastName = 'Paoli';

    return view('home', [
        'firstName' => $firstName,
        'lastName' => $lastName,
    ]);
});

Route::get('/comics', function () {
    $data = config('comics');
    $linkscomics = config('linkscomics');
    return view('subpages.comics',['data'=>$data,'linkscomics'=>$linkscomics]);
});

