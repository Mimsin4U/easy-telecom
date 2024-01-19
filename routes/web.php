<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
use App\http\Controllers\HomeController;
use App\http\Controllers\AddMoneyController;
use App\http\Controllers\AboutController;
use App\Http\Controllers\ClientAuthController;
use App\http\Controllers\RechargeController;
use App\http\Controllers\HistoryController;
use App\http\Controllers\OfferController;
use App\http\Controllers\admin\CreateOfferController;

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


Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/Offers', [OfferController::class, "clientOffers"])->name('clientOffers');
Route::get('/About', [AboutController::class, "about"])->name('about_page');

// Admin Routes ------------->

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, "admin"])->name('dashboard');

    Route::get('/Offer-Create', [CreateOfferController::class, "create_offers"])->name('createOffers');
    Route::get('/manage-offers', [CreateOfferController::class, "index"])->name('manageOffers');
    Route::get('/change-offer-status/{id}', [CreateOfferController::class, "changeOfferStatus"])->name('changeOfferStatus');
    Route::get('/delete-offer/{id}', [CreateOfferController::class, "deleteOffer"])->name('deleteOffer');
    Route::post('/Offer-add', [CreateOfferController::class, "add_offers"])->name('addOffers');

    Route::get('/add-money-request', [AdminController::class, "addMoneyRequestPage"])->name('addMoneyRequest');
    Route::get('/approveAddMoney/{id}', [AdminController::class, "approveAddMoney"])->name('approveAddMoney');

    Route::get('/recharge-request', [RechargeController::class, "rechargeRequestPage"])->name('rechargeRequestPage');
    Route::get('/approve-recharge-request/{id}', [RechargeController::class, "approveRecharge"])->name('approveRecharge');

    Route::get('/offer-request', [OfferController::class, "offerRequestPage"])->name('offerRequestPage');
    Route::get('/approve-offer-request/{id}', [OfferController::class, "approveOfferRequest"])->name('approveOfferRequest');

});


// Client Login Routes ------------->

Route::get('client/login', [ClientAuthController::class, "login"])->name('login_page');
Route::get('client/registration', [ClientAuthController::class, "registration"])->name('registration_page');
Route::post('client/login', [ClientAuthController::class, "clientLogin"])->name('client.login');
Route::post('client/register', [ClientAuthController::class, "create"])->name('client.create');

Route::middleware(['client'])->prefix('client')->name('client.')->group(function () {
    
    // Route::get('dashboard', [ClientDashboardController::class, 'index'])->name('dashboard');

    Route::post('logout', [ClientAuthController::class, 'clientLogout'])->name('logout');

    Route::get('/AddMoneyFrom', [AddMoneyController::class, "addMoneyForm"])->name('add_money_form');
    Route::post('/AddMoneyRequest', [AddMoneyController::class, "AddMoneyRequest"])->name('addMoneyRequest');
    
    Route::get('/Recharge', [RechargeController::class, "recharge"])->name('mobile_recharge_form');
    Route::post('/Recharge', [RechargeController::class, "mobileRecharge"])->name('mobileRecharge');

    Route::get('/buy-offer/{id}', [OfferController::class, "offerBuyForm"])->name('offerBuyForm');
    Route::post('/perchaseOffer', [OfferController::class, "perchaseOffer"])->name('perchaseOffer');

    Route::get('/History', [HistoryController::class, "All_history"])->name('history_page');

});







