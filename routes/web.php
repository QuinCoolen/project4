<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaOrderController;
use App\Models\User;
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

Route::get('overons', function () {
    return view('shop.overons');
});

Route::get('index', function () {
    return view('shop.index');
});

Route::get('/bestellen', [PizzaController::class, 'index'])->name('shop.bestellen');

Route::put('/winkelmandje/{id}', [OrderController::class, 'update'])->name('order.update')->middleware('auth');
Route::get('/winkelmandje/{id}', [OrderController::class, 'show'])->name('shop.winkelmandje')->middleware('auth');

Route::patch('/bestellen/{order_id}/pizzas', [PizzaOrderController::class, 'store'])->name('pizzaorder.store')->middleware('auth');
Route::delete('/winkelmandje/{order_id}/pizzas/{pizza_id}', [PizzaOrderController::class, 'destroy'])->name('pizzaorder.destroy')->middleware('auth');


Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('admin.resetpassword');
    Route::put('/admin/updatepassword/{id}', [AdminController::class, 'updatepassword'])->name('admin.updatepassword');
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('customer', CustomerController::class);
});


require __DIR__.'/auth.php';
