<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HeroImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestController;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');



//LOGO
Route::group(['prefix' => 'logo'], function(){
    Route::get('/', [LogoController::class, 'index']);
    Route::post('/insert', [LogoController::class, 'insert']);
    Route::get('/view', [LogoController::class, 'view'])->name('logo.view');
    Route::get('/edit/{logo_id}', [LogoController::class, 'edit'])->name('logo.edit');
    Route::post('/update', [LogoController::class, 'update']);
    Route::get('/delete/{logo_id}', [LogoController::class, 'delete'])->name('logo.delete');
});



//HERO SECTION CONTENT
Route::group(['prefix' => 'hero'], function(){
    Route::get('/', [HeroController::class, 'index']);
    Route::post('/insert', [HeroController::class, 'insert']);
    Route::get('/view', [HeroController::class, 'view'])->name('hero.view');
    Route::get('/edit/{hero_id}', [HeroController::class, 'edit'])->name('hero.edit');
    Route::post('/update', [HeroController::class, 'update']);
    Route::get('/delete/{hero_id}', [HeroController::class, 'delete'])->name('hero.delete');
});



//HERO SECTION IMAGES
Route::group(['prefix' => 'heroimg'], function(){
    Route::get('/', [HeroImageController::class, 'index']);
    Route::post('/insert', [HeroImageController::class, 'insert']);
    Route::get('/view', [HeroImageController::class, 'view'])->name('heroimg.view');
    Route::get('/edit/{hero_id}', [HeroImageController::class, 'edit'])->name('heroimg.edit');
    Route::post('/update', [HeroImageController::class, 'update']);
    Route::get('/delete/{hero_id}', [HeroImageController::class, 'delete'])->name('heroimg.delete');
});



//CONTACT
Route::group(['prefix' => 'contact'], function(){
    Route::get('/', [ContactController::class, 'index']);
    Route::post('/insert', [ContactController::class, 'insert']);
    Route::get('/delete/{contact_id}', [ContactController::class, 'delete'])->name('contact.delete');
});



//SERVICES SECTION
Route::get('/service-title', [ServiceController::class, 'index']);
Route::post('/service-title/insert', [ServiceController::class, 'insert']);
Route::get('/service-title/edit/{service_title_id}', [ServiceController::class, 'edit'])->name('service-title.edit');
Route::post('/service-title/update', [ServiceController::class, 'update']);
Route::get('/service-title/view', [ServiceController::class, 'view'])->name('service-title.view');
Route::get('/service-title/delete/{service_title_id}', [ServiceController::class, 'delete'])->name('service-title.delete');

Route::get('/services', [ServiceController::class, 'services_index']);
Route::post('/services/insert', [ServiceController::class, 'services_insert']);
Route::get('/services/edit/{services_id}', [ServiceController::class, 'services_edit'])->name('services.edit');
Route::post('/services/update', [ServiceController::class, 'services_update']);
Route::get('/services/view', [ServiceController::class, 'services_view'])->name('services.view');
Route::get('/services/delete/{services_id}', [ServiceController::class, 'services_delete'])->name('services.delete');



//PORFOLIO SECTION

/* TAB */
Route::group(['prefix' => 'tab'], function(){
    Route::get('/', [PortfolioController::class, 'tab_index']);
    Route::post('/insert', [PortfolioController::class, 'tab_insert']);
    Route::get('/view', [PortfolioController::class, 'tab_view'])->name('tab.view');
    Route::get('/edit/{tab_id}', [PortfolioController::class, 'tab_edit'])->name('tab.edit');
    Route::post('/update', [PortfolioController::class, 'tab_update']);
    Route::get('/delete/{tab_id}', [PortfolioController::class, 'tab_delete'])->name('tab.delete');
});
/* PORTFOLIO */
Route::group(['prefix' => 'portfolio'], function(){
    Route::get('/', [PortfolioController::class, 'index']);
    Route::post('/insert', [PortfolioController::class, 'insert']);
    Route::get('/view', [PortfolioController::class, 'view'])->name('portfolio.view');
    Route::get('/edit/{portfolio_id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('/update', [PortfolioController::class, 'update']);
    Route::get('/delete/{portfolio_id}', [PortfolioController::class, 'delete'])->name('portfolio.delete');
});


//TEAM SECTION

/* TEAM */
Route::group(['prefix' => 'team'], function(){
    Route::get('/', [TeamController::class, 'index']);
    Route::post('/insert', [TeamController::class, 'insert']);
    Route::get('/view', [TeamController::class, 'view'])->name('team.view');
    Route::get('/edit/{team_id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/update', [TeamController::class, 'update']);
    Route::get('/delete/{team_id}', [TeamController::class, 'delete'])->name('team.delete');
});
/* ACCOUNT */
Route::group(['prefix' => 'account'], function(){
    Route::get('/', [TeamController::class, 'account_index']);
    Route::post('/insert', [TeamController::class, 'account_insert']);
    Route::get('/view', [TeamController::class, 'account_view'])->name('account.view');
    Route::get('/edit/{account_id}', [TeamController::class, 'account_edit'])->name('account.edit');
    Route::post('/update', [TeamController::class, 'account_update']);
    Route::get('/delete/{account_id}', [TeamController::class, 'account_delete'])->name('account.delete');
});
