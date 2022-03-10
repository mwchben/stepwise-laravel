<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
Route::controller(PostsController::class)->group(function(){
    Route::get('/posts', 'index');
    Route::get('/posts/{id}', 'show');
    Route::put('/posts/{id}', 'update');
    Route::delete('/posts/{id}', 'destroy');
    Route::get('/posts/{id}/edit', 'edit');
    Route::post('/posts', 'store');  
    Route::get('/posts/create', 'create');   
});


//pages postes routes
Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/about', [PagesController::class, 'about']);




//  or group controllers as:
// Route::controller(PostsController::class)->group(function(){
//     Route::get('posts', 'index');
//     Route::get('posts{post}', 'show');
//     Route::post('posts', 'store');   
// });

//registers routes rem to include use App\Http\Controllers\RegistrationController;
// Route::get('reg', [RegistrationController::class, 'create']);

// Route::post('reg', [RegistrationController::class, 'store']);
//Route::post('reg', [RegistrationController::class]); -> index called by default


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
