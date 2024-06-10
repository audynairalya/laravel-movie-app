<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\ProductController;
=======
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
=======
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
use App\Http\Controllers\ReviewController;
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
    return view('welcome');
});
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/products',[ProductController::class, 'index']);

Route::resource('/movies', MovieController::class);

Route::resource('/genres', GenreController::class);

Route::resource('/reviews', ReviewController::class);


=======
=======
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
Route::get('/products', function () {
    return view('product');
});

Route::get('/movies/create', [MovieController::class, 'create']);
Route::get('/movies',[MovieController::class, 'index']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/genres/create', [GenreController::class, 'create']);
Route::get('/genres',[GenreController::class, 'index']);
Route::post('/genres', [GenreController::class, 'store']);
Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);


Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::get('/reviews',[ReviewController::class, 'index']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);
<<<<<<< HEAD
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
=======
>>>>>>> 18230d6573fa50d6e2a0713b6e8beb45cd8c3410
