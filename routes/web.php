<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mastercontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


// 
Route::get('/index', function () {
    return view('index');
});

Route::get('/blank', function (){
    return view('blank');
});

Route::get('/register', function(){
    return view('master.masterregister');
});

Route::get('/login', function(){
     return view('master.masterlogin');
});

//-----------MAIN-----------??
Route::get('/', function(){
    return view('main');
});

Route::get('/about', function(){
    return view('main.about');
});

Route::get('/service', function(){
    return view('main.service');
});

Route::get('/contact', function(){
    return view('main.contact');
});

//-----------Dasboard-----------//
Route::get('/dashboard', function(){
    return view('layout.dashboard');
});

Route::get('/profile', function(){
    return view('dashboard.profile');
});

Route::get('/courses', function(){
    return view('dashboard.courses');
});

Route::get('/3', function(){
    return view('dashboard.3');
});

Route::get('/4', function(){
    return view('dashboard.4');
});

Route::get('/presence', function(){
    return view('dashboard.presence');
});

//---------------------------//



Route::get('/admdash', function(){
    return view('admin.admdashboard');
});

Route::post('/postlogin', [LoginController::class, 'postlogin']);

Route::post('/postregister', [RegisterController::class, 'postregister']);

Route::group(['middleware' => ['auth', 'CekRole:Admin']], function(){
    
    
});
