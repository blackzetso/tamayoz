<?php

//use App\Http\Controllers\admin\loginController;

use App\Models\About;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\admin\SigninController;
use App\Http\Controllers\admin\AccountController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\HomepageController;
use App\Http\Controllers\admin\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\admin\AboutController as AdminAboutConrller;
use App\Http\Controllers\admin\BlogController as AdminBlogControlelr;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\TeamController as AdminTeamController;
use App\Http\Controllers\admin\ClientController as AdminClientControlelr;
use App\Http\Controllers\admin\SocialController as AdminSocialController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\ServiceController as AdminServiceController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\admin\TestimonialController as AdminTestimonialControlelr;
use App\Http\Controllers\admin\TrainingController as AdminTrainingControlelr;


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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::get('/',[HomeController::class,'home']);
    Route::get('/signin',[SigninController::class,'index'])->name('admin.login');
    Route::resource('/portfolios', PortfolioController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/trainings', TrainingController::class);
});

Route::middleware(['check_admin','auth'])->group(function(){
    Route::get('/admin',[DashboardController::class,'index']);
    Route::resource('/admin/sliders', HomepageController::class);
    Route::resource('/admin/trainings', AdminTrainingControlelr::class);
    Route::resource('/admin/portfolios', AdminPortfolioController::class);
    Route::resource('/admin/categories', AdminCategoryController::class);
    Route::resource('/admin/socials', AdminSocialController::class);
    Route::resource('/admin/services', AdminServiceController::class);
    Route::resource('/admin/team', AdminTeamController::class);
    Route::put('/admin/{id}/img', [AdminTeamController::class,'img'])->name('team.img');
    Route::resource('/admin/clients', AdminClientControlelr::class);
    Route::put('/admin/{id}/clients', [AdminClientControlelr::class,'img'])->name('client.img');
    Route::resource('/admin/testimonials', AdmintesTimonialControlelr::class);
    Route::put('/admin/{id}/testimonials', [AdmintesTimonialControlelr::class,'img'])->name('testimonial.img');
    Route::resource('/admin/blogs', AdminBlogControlelr::class);
    Route::put('/admin/{id}/blogs', [AdminBlogControlelr::class,'img'])->name('client.img');
    //
    Route::get('/admin/about', [AdminAboutConrller::class,'edit']);
    Route::put('/admin/about/update', [AdminAboutConrller::class,'update'])->name('about.update');
    Route::put('/admin/about/image', [AdminAboutConrller::class,'updateImage'])->name('about.img');
    Route::get('/admin/contact', [AdminContactController::class,'edit']);
    Route::put('/admin/contact', [AdminContactController::class,'update'])->name('contact.update');
    Route::get('/admin/Account', [AccountController::class,'index']);
    Route::put('/admin/Account', [AccountController::class,'update'])->name('account.update');
    Route::put('/admin/pass', [AccountController::class,'updatepass'])->name('pass.update');
    Route::put('/admin/Accountimg', [AccountController::class,'img'])->name('account.img');
    Route::get('/admin/settings', [SettingController::class,'index']);
    // Route::put('/admin/settings', [SettingController::class,'update'])->name('account.update');
    // Route::put('/admin/pass', [SettingController::class,'updatepass'])->name('pass.update');
    Route::put('/admin/logo', [SettingController::class,'logo'])->name('setting.logo');
});

Auth::routes();












