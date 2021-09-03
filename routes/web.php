<?php

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

Route::get('/', \App\Http\Livewire\HomeComponent::class);

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

// adminstrator
Route::middleware(['auth:sanctum', 'verified','adminAuth'])->group(function (){
    Route::get('/admin/dashboard',\App\Http\Livewire\admin\AdminDashboardComponent::class)->name('admin.dashboard');
});

// user
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/user/dashboard',\App\Http\Livewire\user\UserDashboardComponent::class)->name('user.dashboard');
});
