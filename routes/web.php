<?php

use App\Http\controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;



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
    return view('Index');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/login', function () {
    return view('login');
});



Route::get('/contact', function () {
    return view('contact');
});



Route::middleware('auth')->group(function(){
   Route::get('/dashboard', function () {
    return view('dashboard');
})->name('login'); 
});



Route::post('/process_signup',[UserController::class, 'store']);

Route::post ('/login',[LoginController::class, 'login']);
//Route::get('/login',[LoginController::class,'showLoginForm']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');

Route::patch('/profile/update', [DashboardController::class, 'update_profile'])->name('profile.update');

Route::get('/dashboard/loan', [DashboardController::class, 'loan'])->name('dashboard.loan');

Route::post('/apply/loan', [DashboardController::class, 'apply_loan'])->name('apply.loan');

Route::get('/dashboard/loanStatement', [DashboardController::class, 'loan_statement'])->name('dashboard.loanStatement');

Route::get('/dashboard/loanStatementUpdate/{id}', [DashboardController::class, 'loan_update_view'])->name('dashboard.loanStatementUpdate');




