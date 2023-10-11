<?php

use App\Http\Controllers\CategoresController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\InvoicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them willCategoresController
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('categore', [CategoresController::class, 'index'])->name('categore.index');
Route::get('categore/create', [CategoresController::class, 'create'])->name('categore.create');
Route::get('categore/{id}/edit', [CategoresController::class, 'edit'])->name('categore.edit');
Route::put('categore/{id}', [CategoresController::class, 'update'])->name('categore.update');
Route::get('categore/{id}', [CategoresController::class, 'show'])->name('categore.show');
Route::post('categore', [CategoresController::class, 'store'])->name('categore.store');
Route::delete('categore/{id}', [CategoresController::class, 'destroy'])->name('categore.destroy');
// products
Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('product', [ProductController::class, 'store'])->name('product.store');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

// Expenses
Route::get('expenses', [ExpensesController::class, 'index'])->name('expenses.index');
Route::get('expenses/create', [ExpensesController::class, 'create'])->name('expenses.create');
Route::get('expenses/{id}/edit', [ExpensesController::class, 'edit'])->name('expenses.edit');
Route::put('expenses/{id}', [ExpensesController::class, 'update'])->name('expenses.update');
Route::get('expenses/{id}', [ExpensesController::class, 'show'])->name('expenses.show');
Route::post('expenses', [ExpensesController::class, 'store'])->name('expenses.store');
Route::delete('expenses/{id}', [ExpensesController::class, 'destroy'])->name('expenses.destroy');

// Exchange

Route::get('exchange', [ExchangeController::class, 'index'])->name('exchange.index');
Route::get('exchange/create', [ExchangeController::class, 'create'])->name('exchange.create');
Route::get('exchange/{id}/edit', [ExchangeController::class, 'edit'])->name('exchange.edit');
Route::put('exchange/{id}', [ExchangeController::class, 'update'])->name('exchange.update');
Route::get('exchange/{id}', [ExchangeController::class, 'show'])->name('exchange.show');
Route::post('exchange', [ExchangeController::class, 'store'])->name('exchange.store');
Route::delete('exchange/{id}', [ExchangeController::class, 'destroy'])->name('exchange.destroy');


// Invoices

Route::get('invoices', [InvoicesController::class, 'index'])->name('invoices.index');
Route::get('invoices/create', [InvoicesController::class, 'create'])->name('invoices.create');
Route::get('invoices/{id}/edit', [InvoicesController::class, 'edit'])->name('invoices.edit');
Route::put('invoices/{id}', [InvoicesController::class, 'update'])->name('invoices.update');
Route::get('invoices/{id}', [InvoicesController::class, 'show'])->name('invoices.show');
Route::post('invoices', [InvoicesController::class, 'store'])->name('invoices.store');
Route::delete('invoices/{id}', [InvoicesController::class, 'destroy'])->name('invoices.destroy');
