<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;

use App\Http\Controllers\Dashboard\DashboardController;

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


Route::get('language/{locale}', function ($locale) {

    app()->setLocale($locale);

    session()->put('locale', $locale);

    return redirect()->back();
})->name('language');


Route::prefix('admin')->middleware('localization')->namespace('Dashboard')->name('admin.')->group(function () {

    /* Auth Routes */
    Route::get('login', [AuthController::class , 'showLoginForm'])->name('login');
    Route::post('login',[AuthController::class , 'login'] )->name('login.post');
    Route::get('logout',[AuthController::class , 'logout'])->name('logout');


    /* Dashboard Routes */
    Route::middleware('auth')->group(function () {

        Route::get('/', [DashboardController::class , 'home'])->name('home');

        // admins
        Route::resource('/admins' , 'AdminController');
        Route::get('profile', 'AdminController@profile')->name('profile');
        Route::post('update-profile', 'AdminController@updateProfile')->name('update_profile');

        // banners
        Route::resource('/banners' , 'BannerController');

        // feautures
        Route::resource('/feautures' , 'FeautureController');

        // abouts
        Route::resource('/abouts' , 'AboutController');

        // categories
        Route::resource('/categories' , 'CategoryController');

        // services
        Route::resource('/services' , 'ServiceController');

        // works
        Route::resource('/works' , 'ProjectController');

        // clints
        Route::resource('/clints' , 'ClintController');

        // teams
        Route::resource('/teams' , 'TeamController');




        // setting

            // about
            Route::get('/about' , 'StaticController@about')->name('about');
            Route::put('/about' , 'StaticController@about_store')->name('about-store');

            // setting
            Route::get('/setting' , 'StaticController@setting')->name('setting');
            Route::put('/settings' , 'StaticController@setting_store')->name('setting-store');
            Route::resource('/abouts' , 'AboutController');

        // server Email
        // about
        Route::get('/server-email' , 'ServerEmailController@index')->name('server-email');
        Route::get('/contact-us' , 'ServerEmailController@contactUs')->name('contact-us');

    });
});


