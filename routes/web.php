<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/skill', [SkillController::class, 'create'])->middleware(['auth']);
Route::post('/create', [SkillController::class, 'store'])->middleware(['auth']);
Route::get('/skills', [SkillController::class, 'index'])->middleware(['auth']);
Route::get('/skills/{id}', [SkillController::class, 'show'])->middleware(['auth']);
Route::get('/skills/{id}/edit', [SkillController::class, 'edit'])->middleware(['auth']);
Route::put('/edit/{id}', [SkillController::class, 'update'])->middleware(['auth']);
Route::delete('/skills/{id}/destroy', [SkillController::class, 'destroy'])->middleware(['auth']);


require __DIR__.'/auth.php';
