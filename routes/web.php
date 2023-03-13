<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/customer/dashboard', function () {
    return Inertia::render('Customer/Dashboard');
})->middleware(['auth', 'verified'])->name('customer.dashboard');

Route::get('/customer/invoices', function () {
    return Inertia::render('Customer/Invoices');
})->middleware(['auth', 'verified'])->name('customer.invoice');

Route::get('/customer/orders', function () {
    return Inertia::render('Customer/Orders');
})->middleware(['auth', 'verified'])->name('customer.orders');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/invoice', function () {
    //     return Inertia::render('Invoices');
    // })->middleware(['auth', 'verified'])->name('invoice');
    
Route::middleware('auth')->group(function () {
    Route::resource('invoice', InvoiceController::class);
//Trans
    Route::get('transaction/delivery-note', function () {
        return Inertia::render('DeliveryNote/Index');
    })->name('delivery-note.index');

    Route::get('transaction/purchases', function () {
        return Inertia::render('Purchases/Index');
    })->name('purchases.index');

    Route::get('transaction/expenses', function () {
        return Inertia::render('Expenses/Index');
    })->name('expenses.index');
    
    Route::get('transaction/delivery-note/create', function () {
        return Inertia::render('Expenses/Index');
    })->name('expenses.index');

    //Settl
    Route::get('settlement/sales-closing', function () {
        return Inertia::render('SalesClosing/Index');
    })->name('sales-closing.index');
    Route::get('settlement/stock-closing', function () {
        return Inertia::render('StockClosing/Index');
    })->name('stock-closing.index');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
