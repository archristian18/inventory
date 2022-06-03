<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddCustomerController;
use App\Http\Controllers\AccountController;

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

Route::get('/view', function () {
    return view('production.viewCustomer');
});


ROUTE::get('/view', [CustomerController::class, 'view'])->name('view.customer');
ROUTE::get('/customer', [CustomerController::class, 'index'])->name('home.customer');
ROUTE::get('/', [CustomerController::class, 'home'])->name('home.page');
ROUTE::post('/customer/store', [CustomerController::class, 'store'])->name('customer.create');

ROUTE::get('/customer/load', [AddCustomerController::class, 'load'])->name('add.load');
ROUTE::post('/customer/add', [AddCustomerController::class, 'add'])->name('customer.add');

ROUTE::get('/customer/records{id}', [AddCustomerController::class, 'records'])->name('customer.show');



ROUTE::get('/account', [AccountController::class, 'index'])->name('account');
ROUTE::get('/account/view', [AccountController::class, 'histories'])->name('viewAccount');
