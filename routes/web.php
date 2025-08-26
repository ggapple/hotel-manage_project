<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
route::get('/', [AdminController::class, 'getHomePage']);
route::get('/home', [AdminController::class, 'getIndex'])->name('home');
route::get('/create_room', [AdminController::class, 'getCreatePage']);
route::post('/add_room', [AdminController::class, 'addRoom']);
route::get('/view_room', [AdminController::class, 'getViewPage']);
route::get('/delete_room/{id}', [AdminController::class, 'deleteRoom']);
route::get('/update_room/{id}', [AdminController::class, 'getUpdatePage']);
route::post('/edit_room/{id}', [AdminController::class, 'editRoom']);

route::get('/details_room/{id}', [HomeController::class, 'getDetailsPage']);
route::post('/add_booking/{id}', [HomeController::class, 'addBooking']);
