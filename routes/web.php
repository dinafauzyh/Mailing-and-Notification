<?php

use App\Http\Controllers\EmailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\TestEnrollmentController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/private', [HomeController::class, 'private']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/email', [EmailsController::class, 'email']);

Route::get('/send-testenrollment', [TestEnrollmentController::class, 'sendTestNotification']);

Route::get('/sms', [SmsController::class, 'index']);
