<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerModel;



Route::get('/', function () {
    return view('welcome');
});
Route::get('customer', function () {
    return view('customer.customer');
});
Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('customer', [CustomerController::class, 'customer'])->name('customer');
    Route::get('record', [CustomerController::class, 'record'])->name('record');
    Route::post('customer', [CustomerController::class, 'insert']);
    Route::get('customer/edit/{id}', [CustomerController::class, 'edit']);
    Route::post('customer/edit/{id}', [CustomerController::class, 'update']);
    Route::get('customer/delete/{id}', [CustomerController::class, 'delete']);
    Route::get('customer/about', [CustomerController::class, 'about'])->name('customer.about');
    Route::get('customer/singapore', [CustomerController::class, 'singapore'])->name('customer.singapore');
    Route::get('customer/seoul', [CustomerController::class, 'seoul'])->name('customer.seoul');
    Route::get('customer/kuala', [CustomerController::class, 'kuala'])->name('customer.kuala');
    Route::get('customer/bangkork', [CustomerController::class, 'bangkork'])->name('customer.bangkork');
    Route::get('customer/beijing', [CustomerController::class, 'beijing'])->name('customer.beijing');
    Route::get('customer/dubai', [CustomerController::class, 'dubai'])->name('customer.dubai');
    Route::get('customer/hanoi', [CustomerController::class, 'hanoi'])->name('customer.hanoi');
    Route::get('customer/jakata', [CustomerController::class, 'jakata'])->name('customer.jakata');
    Route::get('customer/information', [CustomerController::class, 'information'])->name('customer.information');
    Route::get('customer/phnompenh', [CustomerController::class, 'phnompenh'])->name('customer.phnompenh');
    Route::get('customer/terms', [CustomerController::class, 'terms'])->name('customer.terms');

    // contact
    Route::get('customer/contact/contact', [ContactController::class, 'contact'])->name('customer.contact.contact');
    Route::get('customer/contact/record', [ContactController::class, 'record'])->name('customer.contact.record');
    Route::post('customer/contact/contact', [ContactController::class, 'insert']);
    Route::get('customer/contact/edit/{id}', [ContactController::class, 'edit']);
    Route::post('customer/contact/edit/{id}', [ContactController::class, 'update']);
    Route::get('customer/contact/delete/{id}', [ContactController::class, 'delete']);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('logout', [CustomerController::class, 'UserLogout'])->name('user.logout');

require __DIR__ . '/auth.php';
