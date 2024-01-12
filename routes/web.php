<?php


use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\Ads;

use App\Http\Controllers\HomeeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SubsidiariesController;
use App\Http\Controllers\LatestNewsController;
use App\Http\Controllers\ServiceController;

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

Route::get('/login', [AdminAuth::class, 'loginpage'])->name('login');
Route::post('/admin/login', [AdminAuth::class, 'login'])->name('admin.login');
Route::post('/register', [CustomerAuth::class, 'register'])->name('customer.register');
Route::post('/admin/register', [AdminAuth::class, 'register'])->name('admin.register');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [AdminAuth::class, 'dashboard']);
    Route::get('/dashboard', [AdminAuth::class, 'dashboard'])->name('admin.dashboard');



    Route::get('/home/hero', [HomeeController::class, 'home'])->name('admin.home.hero');
    Route::post('/home/hero/update', [HomeeController::class, 'updatehomehero'])->name('home.hero.back.update');
    Route::get('/home/who/we/are', [HomeeController::class, 'whoweare'])->name('admin.home.whoweare');
    Route::post('/home/who/we/are/update',[HomeeController::class,'updatewhoweare'])->name('admin.home.whoweare.update');

    Route::get('/home/clients', [HomeeController::class, 'clients'])->name('admin.home.client');
    Route::post('/home/clients/add', [HomeeController::class, 'addclients'])->name('admin.home.client.add');
    Route::post('/home/clients/update/{id}', [HomeeController::class, 'updateclients'])->name('admin.home.client.update');
    Route::get('/home/clients/delete/{id}', [HomeeController::class, 'deleteclients'])->name('admin.home.client.delete');

    Route::get('/about/hero', [AboutController::class, 'about'])->name('admin.about.hero');
    Route::post('/about/hero/update', [AboutController::class, 'updateheroabout'])->name('about.hero.back.update');
    
    Route::get('/about/values', [AboutController::class, 'aboutvalues'])->name('admin.about.values');
    Route::post('/about/values/update', [AboutController::class, 'updateaboutvalues'])->name('admin.about.values.update');


    Route::get('/home/team', [AboutController::class, 'team'])->name('admin.about.team');
    Route::post('/home/team/add', [AboutController::class, 'addteam'])->name('admin.about.team.add');
    Route::post('/home/team/update/{id}', [AboutController::class, 'updateteam'])->name('admin.about.team.update');
    Route::get('/home/team/delete/{id}', [AboutController::class, 'deleteteam'])->name('admin.about.team.delete');


    Route::get('/subsidiaries', [SubsidiariesController::class, 'subsidiaries'])->name('admin.subsidiaries');
    Route::post('/subsidiaries/add', [SubsidiariesController::class, 'addsubsidiaries'])->name('admin.subsidiaries.add');
    Route::post('/subsidiaries/update/{id}', [SubsidiariesController::class, 'updatesubsidiaries'])->name('admin.subsidiaries.update');
    Route::get('/subsidiaries/delete/{id}', [SubsidiariesController::class, 'deletesubsidiaries'])->name('admin.subsidiaries.delete');

    
    Route::get('/latest/news', [LatestNewsController::class, 'latestnews'])->name('admin.latest');
    Route::post('/latest/news/add', [LatestNewsController::class, 'addlatestnews'])->name('admin.latest.add');
    Route::post('/latest/news/update/{id}', [LatestNewsController::class, 'updatelatestnews'])->name('admin.latest.update');
    Route::get('/latest/news/delete/{id}', [LatestNewsController::class, 'deletelatestnews'])->name('admin.latest.delete');


    Route::get('/services', [ServiceController::class, 'services'])->name('admin.services');

    Route::get('/milestone', [AboutController::class, 'milestone'])->name('admin.milestone');
    Route::post('/milestone/add', [AboutController::class, 'addmilestone'])->name('admin.milestone.add');
    Route::post('/milestone/update/{id}', [AboutController::class, 'updatemilestone'])->name('admin.milestone.update');
    Route::get('/milestone/delete/{id}', [AboutController::class, 'deletemilestone'])->name('admin.milestone.delete');


    Route::get('/contact', [AboutController::class, 'contact'])->name('admin.contact');
    Route::post('/contact/update', [AboutController::class, 'updatecontact'])->name('admin.contact.update');


    Route::get('/logout', [AdminAuth::class, 'logout'])->name('admin.logout');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
