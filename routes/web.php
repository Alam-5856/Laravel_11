<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Jobs\SendWelcomeEmailJob;

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
    return view('welcome');
});

Route::get('test', function () {
    //return view('abc');
});

Route::resource('products', ProductController::class);
Route::get('upload-file', [ProductController::class, 'uplpoadForm']);
Route::post('/upload',[ProductController::class,'upload'])
    ->name('upload');

Route::get('/test-job', function () {
    SendWelcomeEmailJob::dispatch();
    return "Job Added Successfully";
});
