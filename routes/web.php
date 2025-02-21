<?php

use App\Http\Controllers\Apps\Appearance\ThemeOptionsController;
use App\Http\Controllers\Apps\Blog\CategoriesController;
use App\Http\Controllers\Apps\Blog\PostsController;
use App\Http\Controllers\Apps\CustomersController;
use App\Http\Controllers\Apps\DiscountController;
use App\Http\Controllers\Apps\InvoicesController;
use App\Http\Controllers\Apps\NewslettersController;
use App\Http\Controllers\Apps\OrderReturnsController;
use App\Http\Controllers\Apps\OrdersController;
use App\Http\Controllers\Apps\Payments\PaymentMethodsController;
use App\Http\Controllers\Apps\Payments\TransactionsController;
use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\ProductAttributesController;
use App\Http\Controllers\Apps\ProductsController;
use App\Http\Controllers\Apps\ReviewsController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\ShipmentController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
//files controller
use App\Http\Controllers\Apps\Files\FilesController;
use App\Http\Controllers\Apps\Files\CategoryController;
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

//files

    Route::delete('/destroyCategory/{id?}' , [CategoryController::class , 'destroyCategory'])->name('destroy.Category');
Route::get('/',function(){
    return view('pages.auth.login');
});
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {

    Route::get('/fileslist' , [FilesController::class , 'openFiles'])->name('fileslist');
    Route::get('/file_add' , [FilesController::class , 'addFile']);
    Route::post('/file_store' , [FilesController::class , 'fileStore'])->name('file.store');
    Route::get('/getFileList' , [FilesController::class , 'getFileList'])->name('get.filelist');
    Route::delete('/destroyFile/{id}' , [FilesController::class , 'destroyFile'])->name('destroy.File');


    Route::get('/category' , [CategoryController::class , 'openCategory'])->name('CategoryList');
    Route::get('/category_add' , [CategoryController::class , 'addCategory']);
    Route::post('/category_store' , [CategoryController::class , 'categoryStore'])->name('category.store');
    Route::get('/getCategoryList' , [CategoryController::class , 'getCategoryList'])->name('getCategoryList');

    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/newsletters', [NewslettersController::class, 'index'])->name('newsletters');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

    


    Route::name('e-commerce.')->group(function () {
        Route::resource('/e-commerce/orders', OrdersController::class);
        Route::get('/e-commerce/orders/{id?}', [OrdersController::class, 'orderDetails']);
        Route::resource('/e-commerce/invoices', InvoicesController::class);
        Route::resource('/e-commerce/order-returns', OrderReturnsController::class);
        Route::resource('/e-commerce/products', ProductsController::class);
        Route::resource('/e-commerce/product-categories', OrderReturnsController::class);
        Route::resource('/e-commerce/product-attributes', ProductAttributesController::class);
        Route::resource('/e-commerce/reviews', ReviewsController::class);
        Route::resource('/e-commerce/shipment', ShipmentController::class);
        Route::resource('/e-commerce/discount', DiscountController::class);
        Route::resource('/e-commerce/customers', CustomersController::class);
    });

    Route::name('blog.')->prefix('blog')->group(function () {
        Route::resource('/posts', PostsController::class);
        Route::resource('/categories', CategoriesController::class);
    });

    Route::name('payments.')->prefix('payments')->group(function () {
        Route::resource('/transactions', TransactionsController::class);
        Route::resource('/methods', PaymentMethodsController::class);
    });

    Route::name('appearance.')->prefix('appearance')->group(function () {
        Route::resource('/theme-options', ThemeOptionsController::class);
    });

});

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
