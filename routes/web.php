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

####################### first routing #############################
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user', function () {
//     return 'welcome User ';
// });
######### home #############
// Route::get('/candi', function () {
//     return view('candi');
// });
######## about #############
// Route::get('/about', function () {
//     return view('layout.aboutus');
// });
####### signup ##############
// Route::get('/signup', function () {
//     return view('signup');
// });
####### login #############
// Route::get('/login', function () {
//     return view('login');
// });
###### contact #########
// Route::get('/contact', function () {
//     return view('contact');
// });

##### render array #####
// Route::get('/about', function () {
// $Team = array ( array( "Name"=>"Ibrahim","Age"=>"24" ),array("Name"=>"Samar","Age"=>"24" ),array("Name"=>"Ghufran","Age"=>"24" ));
//     return View::make('aboutus')->with('Team', $Team);
// });


######## routing with controller #########

Route::get('index/id/{id}/name/{name}', [newController::class, 'check'] )->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('master', [newController::class, 'display'] );
Route::get('about', [newController::class, 'displayabout'] );
Route::get('contact', [newController::class, 'displaycontact'] );
Route::get('candi', [newController::class, 'displayHome'] );

Route::get('about', [newController::class, 'displayarray'] );



