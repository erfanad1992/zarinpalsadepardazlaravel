<?php

use App\Http\Controllers\Admin\Market\AdminInfoController;
use App\Http\Controllers\Admin\Market\AllTransactionController;
use App\Http\Controllers\Admin\Market\FailTransactionController;
use App\Http\Controllers\Admin\Market\SuccessTransactionController;
use App\Http\Controllers\Admin\Market\WebsiteAddressController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Market\MerchantController;
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

/*Route::get('/merchant', function () {
    return view('admin.market.merchant.index');
});*/
//Route::get('/merchants', [MerchantController::class, 'index']);


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
    return view('home');
});
Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
    //Route::get('/header', 'Auth\AdminLoginController@showAdminName');
   // Route::get('/admin', 'TestController@index')->name('adminName');
    Route::prefix('market')->namespace('Market')->group(function(){

        //category
        Route::prefix('merchant')->group(function(){
            Route::get('/', [MerchantController::class, 'index'])->name('admin.market.merchant.index');
            Route::get('/create', [MerchantController::class, 'create'])->name('admin.market.merchant.create');
            Route::post('/store', [MerchantController::class, 'store'])->name('admin.market.merchant.store');

            Route::delete('/delete/{id}', [MerchantController::class, 'destroy'])->name('admin.market.merchant.destroy');
            Route::post('/editmerchant', [MerchantController::class, 'getMerchantFromView'])->name("merchant.send");
            Route::get('/editmerchant', [MerchantController::class, 'getMerchantFromView'])->name("merchant.send");
            // Route::get('/', [MerchantController::class, 'getMerchantFromView'])->name('admin.market.merchant.create');

            Route::get('/edit/{id}', [MerchantController::class, 'edit'])->name('admin.market.merchant.edit');
            Route::put('/update/{id}', [MerchantController::class, 'edit'])->name('admin.market.merchant.update');



        });

        Route::prefix('admininfo')->group(function(){
            Route::get('/', [AdminInfoController::class, 'index'])->name('admin.market.admininfo.index');
            Route::get('/create', [AdminInfoController::class, 'create'])->name('admin.market.admininfo.create');
            Route::post('/store', [AdminInfoController::class, 'store'])->name('admin.market.admininfo.store');
            Route::get('/edit/{id}', [AdminInfoController::class, 'edit'])->name('admin.market.admininfo.edit');
            Route::put('/update/{id}', [AdminInfoController::class, 'edit'])->name('admin.market.admininfo.update');
            Route::delete('/delete/{id}', [AdminInfoController::class, 'destroy'])->name('admin.market.admininfo.destroy');
            Route::post('/editadmin', [AdminInfoController::class, 'getAdminFromView'])->name("admininfo.send");
            Route::get('/editadmin', [AdminInfoController::class, 'getAdminFromView'])->name("admininfo.send");
            // Route::get('/', [MerchantController::class, 'getMerchantFromView'])->name('admin.market.merchant.create');



        });

        Route::prefix('websiteaddress')->group(function(){
            Route::get('/', [WebsiteAddressController::class, 'index'])->name('admin.market.websiteaddress.index');
            Route::get('/create', [WebsiteAddressController::class, 'create'])->name('admin.market.websiteaddress.create');
            Route::post('/store', [WebsiteAddressController::class, 'store'])->name('admin.market.websiteaddress.store');
            Route::get('/edit/{id}', [WebsiteAddressController::class, 'edit'])->name('admin.market.websiteaddress.edit');
            Route::put('/update/{id}', [WebsiteAddressController::class, 'edit'])->name('admin.market.websiteaddress.update');
            Route::delete('/delete/{id}', [WebsiteAddressController::class, 'destroy'])->name('admin.market.websiteaddress.destroy');
            Route::post('/editwebsite', [WebsiteAddressController::class, 'getwebsiteFromView'])->name("websiteaddress.send");
            Route::get('/editwebsite', [WebsiteAddressController::class, 'getwebsiteFromView'])->name("websiteaddress.send");
            // Route::get('/', [MerchantController::class, 'getMerchantFromView'])->name('admin.market.merchant.create');



        });

        Route::prefix('alltransaction')->group(function(){
            Route::get('/', [AllTransactionController::class, 'index'])->name('admin.market.alltransaction.index');
            Route::get('/create', [AllTransactionController::class, 'create'])->name('admin.market.alltransaction.create');
            Route::post('/store', [AllTransactionController::class, 'store'])->name('admin.market.alltransaction.store');
            Route::get('/edit/{id}', [AllTransactionController::class, 'edit'])->name('admin.market.alltransaction.edit');
            Route::put('/update/{id}', [AllTransactionController::class, 'edit'])->name('admin.market.alltransaction.update');
            Route::delete('/delete/{id}', [AllTransactionController::class, 'destroy'])->name('admin.market.alltransaction.destroy');




        });

        Route::prefix('successtransaction')->group(function(){
            Route::get('/', [SuccessTransactionController::class, 'index'])->name('admin.market.successtransaction.index');
            Route::get('/create', [SuccessTransactionController::class, 'create'])->name('admin.market.successtransaction.create');
            Route::post('/store', [SuccessTransactionController::class, 'store'])->name('admin.market.successtransaction.store');
            Route::get('/edit/{id}', [SuccessTransactionController::class, 'edit'])->name('admin.market.successtransaction.edit');
            Route::put('/update/{id}', [SuccessTransactionController::class, 'edit'])->name('admin.market.successtransaction.update');
            Route::delete('/delete/{id}', [SuccessTransactionController::class, 'destroy'])->name('admin.market.successtransaction.destroy');




        });

        Route::prefix('failedtransaction')->group(function(){
            Route::get('/', [FailTransactionController::class, 'index'])->name('admin.market.failedtransaction.index');
            Route::get('/create', [FailTransactionController::class, 'create'])->name('admin.market.failedtransaction.create');
            Route::post('/store', [FailTransactionController::class, 'store'])->name('admin.market.failedtransaction.store');
            Route::get('/edit/{id}', [FailTransactionController::class, 'edit'])->name('admin.market.failedtransaction.edit');
            Route::put('/update/{id}', [FailTransactionController::class, 'edit'])->name('admin.market.failedtransaction.update');
            Route::delete('/delete/{id}', [FailTransactionController::class, 'destroy'])->name('admin.market.failedtransaction.destroy');




        });



    });


}) ;
Route::group(['middleware'=> ['XssSanitizer']], function(){

    //Route::get('view-register', 'RegisterController@viewRegisterPage');

    // Route::post('register', 'RegisterController@registerAction');

    Route::get('/payment', 'PaymentController@payment');
    Route::get('/verifypayment', 'PaymentController@verifypayment');
    Route::post('/verifypayment', 'PaymentController@verifypayment');
    Route::post('/payment', 'PaymentController@payment')->name("payment.send");
    Route::get('/',function (){

        return View('index');
    });


});
