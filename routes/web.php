<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
    return view('website.layouts.layout');
});

Route::get('admin/', function () {
    return view('admin');
});



Route::get('admin/login', function () {
    return view('admin.auth.login');
});


Route::resource('products', ProductController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
])->names([
    'index' => 'products.index',
    'create' => 'products.create',
    'store' => 'products.store',
    'edit' => 'products.edit',
    'update' => 'products.update',
    'destroy' => 'products.destroy',
]);
Route::resource('categories', CategoryController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
    ])->names([
        'index' =>'categories.index',
        'create' =>'categories.create',
        'store' =>'categories.store',
        'edit' =>'categories.edit',
        'update' =>'categories.update',
        'destroy' =>'categories.destroy',
    ]);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
