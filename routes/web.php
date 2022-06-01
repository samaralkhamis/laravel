<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;

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

Route::get('/user', function () {
    return 'welcome User ';
});

Route::get('/candi', function () {
    return view('candi');
});

Route::get('/about', function () {
    return view('Aboutus');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/about', function () {
//      $Team = array ( array( "Name"=>"Ibrahim","Age"=>"24" ),array("Name"=>"Samar","Age"=>"24" ),array("Name"=>"Ghufran","Age"=>"24" ));

//     return View::make('aboutus')->with('Team', $Team);

// });


Route::get('/contact', function () {
    return view('contact');
});

Route::get('index/id/{id}/name/{name}', [newController::class, 'check'] )->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



