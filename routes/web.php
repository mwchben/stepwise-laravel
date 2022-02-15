<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistrationController;


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

Route::get('/', function () 
{
    return view('welcome');
}
);


Route::get('posts', [PostsController::class, 'index']);

Route::get('contact', [PostsController::class, 'contact']);

Route::get('posts/{id}', [PostsController::class, 'showPost']);

Route::get('register', [RegistrationController::class, 'index']);
Route::post('register', [RegistrationController::class, 'store']);

Route::post('posts', [PostsController::class, 'store']);
//  or group controllers as:
// Route::controller(PostsController::class)->group(function(){
//     Route::get('posts', 'index');
//     Route::get('posts{post}', 'show');
//     Route::post('posts', 'store');   
// });

