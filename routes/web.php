<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BookController;
use App\Http\Controllers\WorldController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\MachibyaController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MtumiajiController;

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

// Route::get('/', [Controller::class, 'index']);

// Route::get('/book', [BookController::class, 'book']);
// Route::redirect("/", "/book");
// Route::get('/',function(){
//     return view('Hello');
// });
// Route::get('/Hello', [WorldController::class, 'world']);
// Route::redirect('/hello','/i');
// Route::get("project", [ProjectController::class, 'project']);
// Route::get("project/{id}", [ProjectController::class, 'fetch']);
// Route::get('vote',[VoterController::class,'vote']);
// Route::get('vote/{id}',[VoterController::class,'votes']);
// Route::get('app/{n1}/{op}/{n2}',[AppController::class,'app']);
Route::get('app/{name}/{gender}/{month}',[MachibyaController::class,'machibya']);
Route::get('food',[FoodController::class,'index']);
Route::get('food/create/{name}/{qty}/{qlty}/{price}', [FoodController::class, 'save']);
Route::post('food', [FoodController::class, 'store']);
Route::get('/food/new', function(){
    return view('food.index');
});
Route::get('/blog/new', function(){
    return view('blog.new');
});
Route::get('blog', [BlogController::class, 'view']);
Route::post('blog/create', [BlogController::class, 'store']);
Route::get('/blog/{id}', [BlogController::class, 'show']);


Route::post('/registration', [MtumiajiController::class, 'save']);
Route::get('/registration', [MtumiajiController::class, 'index']);
Route::post('/login', [MtumiajiController::class, 'log']);
Route::get('/login', function(){
    return view('org.login');
});