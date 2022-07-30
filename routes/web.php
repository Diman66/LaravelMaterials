<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LinkController;



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

Route::get('materials', [MaterialController::class, 'index'])->name('materials.index');
Route::get('materials/create', [MaterialController::class, 'create'])->name('materials.create');
Route::get('materials/search', [MaterialController::class, 'search'])->name('materials.search');
Route::get('materials/{material}', [MaterialController::class, 'show'])->name('materials.show');
Route::post('materials', [MaterialController::class, 'store'])->name('materials.store');
Route::get('materials/{material}/edit', [MaterialController::class, 'edit'])->name('materials.edit');
Route::patch('materials/{material}', [MaterialController::class, 'update'])->name('materials.update');
Route::put('materials/{id}', [MaterialController::class, 'update'])->name('materials.update');
Route::delete('materials/{material}', [MaterialController::class, 'destroy'])->name('materials.delete');
Route::delete('materials/tag/{material}', [MaterialController::class, 'destroyTag'])->name('materials.deleteTag');

Route::resource('tags', TagController::class);

Route::resource('categories', CategoryController::class);

Route::resource('links', LinkController::class);