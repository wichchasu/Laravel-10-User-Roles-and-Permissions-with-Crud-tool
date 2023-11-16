<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AssetCategoriesController;
use App\Http\Controllers\PermissionsController;

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

Route::get('/', function () {
    // return view('home');
    return redirect()->route('home');
})->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
]);

Route::group([
    'prefix' => 'asset_categories',
], function () {
    Route::get('/', [AssetCategoriesController::class, 'index'])
         ->name('asset_categories.asset_category.index');
    Route::get('/create', [AssetCategoriesController::class, 'create'])
         ->name('asset_categories.asset_category.create');
    Route::get('/show/{assetCategory}',[AssetCategoriesController::class, 'show'])
         ->name('asset_categories.asset_category.show')->where('id', '[0-9]+');
    Route::get('/{assetCategory}/edit',[AssetCategoriesController::class, 'edit'])
         ->name('asset_categories.asset_category.edit')->where('id', '[0-9]+');
    Route::post('/', [AssetCategoriesController::class, 'store'])
         ->name('asset_categories.asset_category.store');
    Route::put('asset_category/{assetCategory}', [AssetCategoriesController::class, 'update'])
         ->name('asset_categories.asset_category.update')->where('id', '[0-9]+');
    Route::delete('/asset_category/{assetCategory}',[AssetCategoriesController::class, 'destroy'])
         ->name('asset_categories.asset_category.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'permissions',
], function () {
    Route::get('/', [PermissionsController::class, 'index'])
         ->name('permissions.permissions.index');
    Route::get('/create', [PermissionsController::class, 'create'])
         ->name('permissions.permissions.create');
    Route::get('/show/{permissions}',[PermissionsController::class, 'show'])
         ->name('permissions.permissions.show');
    Route::get('/{permissions}/edit',[PermissionsController::class, 'edit'])
         ->name('permissions.permissions.edit');
    Route::post('/', [PermissionsController::class, 'store'])
         ->name('permissions.permissions.store');
    Route::put('permissions/{permissions}', [PermissionsController::class, 'update'])
         ->name('permissions.permissions.update');
    Route::delete('/permissions/{permissions}',[PermissionsController::class, 'destroy'])
         ->name('permissions.permissions.destroy');
});
