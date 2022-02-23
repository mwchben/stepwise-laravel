<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PagesController;


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

// Route::get('/', function () 
// {
//     return view('welcome');
// }
// );

//quotes postes routes
Route::get('posts', [PostsController::class, 'index']);

Route::get('contact', [PostsController::class, 'contact']);

Route::get('posts/{id}', [PostsController::class, 'showPost']);

Route::post('posts', [PostsController::class, 'store']);

//pages postes routes
Route::get('/', [PagesController::class, 'index']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/about', [PagesController::class, 'showPost']);

Route::post('/others', [PagesController::class, 'store']);


//  or group controllers as:
// Route::controller(PostsController::class)->group(function(){
//     Route::get('posts', 'index');
//     Route::get('posts{post}', 'show');
//     Route::post('posts', 'store');   
// });

//registers routes
// Route::get('reg', [RegistrationController::class, 'create']);

// Route::post('reg', [RegistrationController::class, 'store']);
//Route::post('reg', [RegistrationController::class]); -> index called by default


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
