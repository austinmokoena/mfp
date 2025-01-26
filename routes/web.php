<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\ForexController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\MarketDataController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\VaultMarketsController;

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('chart', function () {
		return view('chart');
	})->name('chart');

	Route::get('trade-with-us', function () {
		return view('trade-with-us');
	})->name('trade-with-us');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('events', function () {
		return view('events');
	})->name('events');

    Route::get('introducing-broker',
	 [VaultMarketsController::class,
	  'showIntroducingBroker'
	  ])->name('introducing-broker');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');


	Route::get('/leads', [VaultMarketsController::class, 'getLeads'])->name('ib');

	// New route for creating leads
	Route::post('create-lead', [VaultMarketsController::class, 'createLead'])->name('create-lead');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');



Route::get('/forex/rates/{fromCurrency}/{toCurrency}', [ForexController::class, 'showLiveRates']);
Route::get('/forex/historical/{fromCurrency}/{toCurrency}', [ForexController::class, 'showHistoricalData']);


Route::get('/leads', [VaultMarketsController::class, 'getLeads'])->name('ib');



