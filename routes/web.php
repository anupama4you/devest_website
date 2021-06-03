<?php
namespace App\Http\Controllers;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class,'index'])->name('/');

Route::get('/about', [HomeController::class,'getAbout'])->name('about');

Route::get('/portfolio', [HomeController::class,'getPortfolio'])->name('portfolio');

Route::get('/contact', [HomeController::class,'getContact'])->name('contact');

Route::get('/portfolio_post', [HomeController::class,'getPortfolioPost'])->name('portfolio_post');

Route::get('/blog', [HomeController::class,'getBlog'])->name('blog');

Route::get('admin', [HomeController::class,'showAdmin'])->name('admin.index');

Route::resource('admin/settings',SettingController::class);
