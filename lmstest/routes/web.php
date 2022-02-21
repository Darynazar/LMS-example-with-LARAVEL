<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TuitionController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::get('home', [HomeController::class, 'redirect']);

Route::get('indexlesson', [LessonController::class, 'indexlesson']);
Route::get('lessoncart', [LessonController::class, 'lessoncart'])->name('lessoncart');
Route::get('add-to-lessoncart/{id}', [LessonController::class, 'addToLessonCart'])->name('add.to.lessoncart');
Route::patch('update-lessoncart', [LessonController::class, 'update'])->name('update.lessoncart');
Route::delete('remove-from-lessoncart', [LessonController::class, 'remove'])->name('remove.from.lessoncart');

Route::get('tuition', [TuitionController::class, 'tuition']);

Route::get('indexfood', [FoodController::class, 'indexfood']);
Route::get('foodcart', [FoodController::class, 'foodcart'])->name('foodcart');
Route::get('add-to-foodcart/{id}', [FoodController::class, 'addToFoodCart'])->name('add.to.foodcart');
Route::patch('update-foodcart', [FoodController::class, 'update'])->name('update.foodcart');
Route::delete('remove-from-foodcart', [FoodController::class, 'remove'])->name('remove.from.foodcart');


Route::get('indexknowledge', [KnowledgeController::class, 'indexknowledge']);

Route::get('indexstudent', [StudentController::class, 'indexstudent']);
Route::get('hotel', [StudentController::class, 'hotel'])->name('hotel');
Route::get('add-to-hotel/{id}', [StudentController::class, 'addToHotel'])->name('add.to.hotel');
Route::patch('update-hotel', [StudentController::class, 'update'])->name('update.hotel');
Route::delete('remove-from-hotel', [StudentController::class, 'remove'])->name('remove.from.hotel');

Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Route::post('show', [PostController::class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
