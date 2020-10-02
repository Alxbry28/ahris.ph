<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('login', 'App\Http\Controllers\FrontendController@login');
Route::get('register', 'App\Http\Controllers\FrontendController@register');
Route::get('blogs', 'App\Http\Controllers\FrontendController@ahrisblog');
// Admin Routes 
Route::get('admin-dashboard/home', 'App\Http\Controllers\FrontendController@adminDashboard');
Route::get('admin-dashboard/ar-admin-profile', 'App\Http\Controllers\FrontendController@adminProfile');
Route::get('admin-dashboard/ar-analytics', 'App\Http\Controllers\FrontendController@adminAnalytics');
Route::get('admin-dashboard/ar-crashlogs-report', 'App\Http\Controllers\FrontendController@adminCrashLogs');
Route::get('admin-dashboard/ar-transaction-overview', 'App\Http\Controllers\FrontendController@adminOverview');
Route::get('admin-dashboard/ar-user-authentication', 'App\Http\Controllers\FrontendController@adminUserAuth');
Route::get('admin-dashboard/ar-user-control', 'App\Http\Controllers\FrontendController@adminUserControl');
Route::get('admin-dashboard/ar-web-monitoring', 'App\Http\Controllers\FrontendController@adminMonitoring');
Route::get('admin-dashboard/ar-web-updates', 'App\Http\Controllers\FrontendController@adminWebUpdates');


// User Routes 
Route::get('dashboard/profile', 'App\Http\Controllers\FrontendController@userProfile');
Route::get('dashboard/personal-settings', 'App\Http\Controllers\FrontendController@userPersonalSettings');
Route::get('dashboard/modal', 'App\Http\Controllers\FrontendController@modalUsername');


// Company Routes 
Route::get('company/dashboard', 'App\Http\Controllers\FrontendController@companyDashboard');

// Company Sub-Routes for Quick Actions



// Email Route
Route::get('send-mail', [SendEmailController::class, 'sendEmail']);

