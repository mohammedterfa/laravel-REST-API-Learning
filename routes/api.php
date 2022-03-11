<?php


use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::get('/products', [ProductController::class, 'index']);

Route::post('/products',[ProductController::class, 'store']); */


//public routes
Route::resource('products', ProductController::class);
//Route::get('/products/search/{name}', [ProductController::class, 'search']);


//protocted routes
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/products/search/{name}', [ProductController::class, 'search']);
});
