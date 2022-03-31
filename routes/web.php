<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthorDashboardController;
use App\Http\Controllers\PaymentController;

/*s
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Payment');
// });


// Route::get('/',[PaymentController::class,"index"])->name('index');
// Route::get('/charge',[PaymentController::class,"Charge"])->name('processpayments');

Auth::routes();


