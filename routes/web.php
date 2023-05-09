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

    $welcome_message = "Benvenuti in Laravel";

    $data = [

        'welcome_message' => $welcome_message,
        'Linguaggi' => [
            'Html',
            'CSS',
            'JAVASCRIPT',
            'PHP'
        ],
        'students' => [
            'Classe 87'
        ]
    ];

    return view('welcome', $data);


    return view('welcome');
})->name('home');


Route::get('chi-siamo', function () {

    return view('about', ['message' => 'Che Dio ci aiuti con Laravel =)']);

})->name('about');


Route::get('sponsor', function () {
    $data = [


        'aziende' => [
            'Sony',
            'Samsung',
            'Apple',
            'Microsoft'
        ],

    ];


    return view('sponsor', $data, ['message' => 'tutte le aziende che collaborano con noi!']);

})->name('sponsor');