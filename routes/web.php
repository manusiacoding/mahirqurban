<?php

use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\SuperAdmin\CustomerController;
use App\Http\Controllers\SuperAdmin\InvoiceController;
use App\Http\Controllers\SuperAdmin\UserController;
use App\Http\Controllers\User\BruneiTransactionController;
use App\Http\Controllers\User\IndoTransaksiController;
use App\Http\Controllers\User\MalaysiaTransactionController;
use App\Http\Controllers\User\ReportController as UserReportController;
use App\Http\Controllers\User\SingaporeTransactionController;
use App\Http\Controllers\User\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard.content');
})->name('dashboard.index');

Route::get('/dashboard', [CustomerController::class, 'index'])->name('dashboard.index');

Route::get('/login', function () {
    return view('auth.login');
});



// force logout routes, temporary for debugging
Route::get('/force/logout', function (Request $request) {
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
});

// Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:User']], function () {

    // Report indo & brunei Routes
    Route::controller(UserReportController::class)->group(function(){
        Route::get('/report', 'index')->name('user.report.index');
    });

    // Transaksi Malaysia
    Route::controller(MalaysiaTransactionController::class)->group(function(){
        Route::get('/{id}/malaysia/transaction', 'show')->name('malaysia.product.show');
        Route::post('/store/transaction', 'store')->name('malaysia.transaction.store');
        Route::get('/malaysia/invoice', 'invoice')->name('malaysia.transaction.invoice');
        Route::get('/{id}/malaysia/invoice', 'detailinvoice')->name('malaysia.transaction.detailinvoice');
        Route::put('/{id}/invoice', 'update')->name('malaysia.transaction.updateinvoice');
    });

    // Transaksi Singapore
    Route::controller(SingaporeTransactionController::class)->group(function(){
        Route::get('/{id}/singapore/transaction', 'show')->name('singapore.product.show');
        Route::post('/store/transaction', 'store')->name('singapore.transaction.store');
        Route::get('/singapore/invoice', 'invoice')->name('singapore.transaction.invoice');
        Route::get('/{id}/singapore/invoice', 'detailinvoice')->name('singapore.transaction.detailinvoice');
        Route::put('/{id}/invoice', 'update')->name('singapore.transaction.updateinvoice');
    });

    // Transaksi Brunei
    Route::controller(BruneiTransactionController::class)->group(function(){
        Route::get('/{id}/brunei/transaction', 'show')->name('brunei.product.show');
        Route::post('/store/transaction', 'store')->name('brunei.transaction.store');
        Route::get('/brunei/invoice', 'invoice')->name('brunei.transaction.invoice');
        Route::get('/{id}/brunei/invoice', 'detailinvoice')->name('brunei.transaction.detailinvoice');
        Route::put('/{id}/invoice', 'update')->name('brunei.transaction.updateinvoice');
    });
});


Route::group(['middleware' => ['role:Super Admin']], function() {
    Route::prefix('dashboard')->group(function(){
        Route::controller(UserController::class)->group(function() {
            Route::get('/user', 'index')->name('user.index');
            Route::get('/user/create', 'create')->name('user.create');
            Route::post('/user/store', 'store')->name('user.store');
            Route::delete('/user/destroy', 'destroy')->name('user.destroy');
        });

        Route::controller(InvoiceController::class)->group(function() {
            Route::get('/proofpayment', 'index')->name('proofpayment.index');
            Route::get('/{id}/proofpayment', 'show')->name('proofpayment.show');
            Route::put('/{id}/proofpayment', 'update')->name('proofpayment.update');
        });
    });
});

Route::group(['middleware' => ['role:Admin']], function() {
    Route::prefix('dashboard')->group(function(){
        Route::controller(ReportController::class)->group(function() {
            Route::get('/report', 'index')->name('report.index');
            Route::post('/report/store', 'store')->name('report.store');
            Route::get('/history', 'show')->name('report.show');
        });
    });
});

Route::get('invoice1', function() {
    return view('landing.indo.invoice1');
});

Auth::routes();
