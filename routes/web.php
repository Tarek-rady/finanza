<?php

use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\FrontEnd\ClintController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\FeatureController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\ProjectController;
use App\Http\Controllers\FrontEnd\ServiceController;
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

Route::middleware('localization')->namespace('Web')->name('web.')->group(function () {


    Route::get('/'         , [HomeController::class , 'home'])->name('home');
    Route::get('/about-us' , [AboutController::class , 'about'])->name('about-us');
    Route::get('/services' , [ServiceController::class , 'services'])->name('services');
    Route::get('/service-details/{id}' , [ServiceController::class , 'service_details'])->name('service-details');
    Route::get('/projects' , [ProjectController::class , 'projects'])->name('projects');
    Route::get('/features' , [FeatureController::class , 'features'])->name('features');
    Route::get('/teams' ,    [ClintController::class , 'teams'])->name('teams');
    Route::get('/clints' ,   [ClintController::class , 'clints'])->name('clints');
    Route::get('/contact-us',[ContactController::class , 'contact'])->name('contacts');
    Route::post('/contact-us',[ContactController::class , 'contact_us'])->name('contact-us');
    Route::get('/page-404',[ClintController::class , 'page_404'])->name('page-404');





    Route::post('/server-email' , [HomeController::class , 'servce_email'])->name('server-email');
    Route::post('contact' , [HomeController::class , 'contact_us'])->name('contact-home');

});





