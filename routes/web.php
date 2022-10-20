<?php

use App\Http\Controllers\AdvertisingController as ControllersAdvertisingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BicharController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CorporateController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InternationalController;
use App\Http\Controllers\Frontend\ManoranjanController;
use App\Http\Controllers\Frontend\MofsalController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\PopularController;
use App\Http\Controllers\Frontend\RajnitiController;
use App\Http\Controllers\Frontend\RecentController;
use App\Http\Controllers\Frontend\SamacharController;
use App\Http\Controllers\Frontend\ShareController;
use App\Http\Controllers\Frontend\SportController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\AdvertisingController;
use App\Http\Controllers\AutomobileController;
use App\Http\Controllers\BibidhController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ITController;

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


Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/bichar',[BicharController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/corporate',[CorporateController::class, 'index']);
Route::get('/international',[InternationalController::class, 'index']);
Route::get('/manoranjan',[ManoranjanController::class, 'index']);
Route::get('/mofsal',[MofsalController::class, 'index']);

Route::get('/popular',[PopularController::class, 'index']);
Route::get('/rajniti',[RajnitiController::class, 'index']);
Route::get('/recent',[RecentController::class, 'index']);
Route::get('/samachar',[SamacharController::class, 'index']);
Route::get('/share',[ShareController::class, 'index']);
Route::get('/sport',[SportController::class, 'index']);
Route::get('/team',[TeamController::class, 'index']);

Route::get('/advpage',[AdvertisingController::class, 'index'])->middleware('isLoggedIn');

Route::get('/advpage/advpost',[AdvertisingController::class, 'mainadv'])->middleware('isLoggedIn');
Route::post('/advpage/advpost',[AdvertisingController::class, 'upload_mainadv']);

Route::get('/advpage/slideradv',[AdvertisingController::class, 'slideradv'])->middleware('isLoggedIn');
Route::post('/advpage/slideradv',[AdvertisingController::class, 'upload_slideradv']);

Route::get('/create_news',[NewsController::class, 'create_news'])->middleware('isLoggedIn');
Route::get('/news_dashboard',[NewsController::class, 'news_dashboard'])->middleware('isLoggedIn');
Route::post('/create_news',[NewsController::class, 'upload_news']);

Route::get('/view_news',[NewsController::class, 'view_news'])->middleware('isLoggedIn');

Route::get('/view_news/delete/{id}',[NewsController::class, 'delete'])->name('view_news.delete')->middleware('isLoggedIn');

Route::get('/view_news/edit/{id}',[NewsController::class, 'edit'])->name('view_news.edit')->middleware('isLoggedIn');
Route::post('/view_news/update/{id}',[NewsController::class, 'update'])->name('view_news.update');


Route::get('/news/{id}',[NewsController::class, 'read_news']);

// authentication

Route::get('/login',[CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::post('/login',[CustomAuthController::class, 'loginUser'])->name('login-user');


Route::get('/register',[CustomAuthController::class, 'register'])->middleware('alreadyLoggedIn');
Route::post('/register',[CustomAuthController::class, 'registerUser'])->name('register-user');


Route::get('/dashboard',[CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/logout',[CustomAuthController::class, 'logout'])->middleware('isLoggedIn');


// backend news

Route::get('/samachar_back',[SamacharController::class, 'samachar_back'])->middleware('isLoggedIn');
Route::get('/rajniti_back',[RajnitiController::class, 'rajniti_back'])->middleware('isLoggedIn');
Route::get('/mofsal_back',[MofsalController::class, 'mofsal_back'])->middleware('isLoggedIn');
Route::get('/sport_back',[SportController::class, 'sport_back'])->middleware('isLoggedIn');
Route::get('/corporate_back',[CorporateController::class, 'corporate_back'])->middleware('isLoggedIn');
Route::get('/share_back',[ShareController::class, 'share_back'])->middleware('isLoggedIn');
Route::get('/international_back',[InternationalController::class, 'international_back'])->middleware('isLoggedIn');
Route::get('/manoranjan_back',[ManoranjanController::class, 'manoranjan_back'])->middleware('isLoggedIn');
Route::get('/automobile_back',[AutomobileController::class, 'automobile_back'])->middleware('isLoggedIn');
Route::get('/it_back',[ITController::class, 'it_back'])->middleware('isLoggedIn');
Route::get('/bibidh_back',[BibidhController::class, 'bibidh_back'])->middleware('isLoggedIn');
Route::get('/bichar_back',[BicharController::class, 'bichar_back'])->middleware('isLoggedIn');

