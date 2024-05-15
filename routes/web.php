<?php

use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
])->group(function () {
    Auth::routes();

Route::get('/clients/create', [TenantController::class, 'create']);
Route::get('/clients', [TenantController::class, 'index']);
Route::post('/clients', [TenantController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
