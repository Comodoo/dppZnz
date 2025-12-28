<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;



// Achievements
Route::post('/achievements', [AchievementController::class, 'index']);
Route::post('/achievements', [AchievementController::class, 'store']);
Route::put('/achievements/{id}', [AchievementController::class, 'update']);
Route::delete('/achievements/{id}', [AchievementController::class, 'destroy']);

// Feedback
Route::post('/feedback', [FeedbackController::class, 'store']);
Route::put('/feedback/{id}', [FeedbackController::class, 'update']);
Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy']);

// Users
Route::post('admin/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


// routes/web.php
Route::get('/', function () {
    return view('welcome');
});

// Routes za navigation
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/about/mission', function () {
    return view('pages.about.mission');
})->name('mission');

Route::get('/about/mandate', function () {
    return view('pages.about.mandate');
})->name('mandate');

Route::get('/about/pemba', function () {
    return view('pages.about.pemba');
})->name('pemba');

Route::get('/about/organization', function () {
    return view('pages.about.organization');
})->name('organization');

Route::get('/about/regional', function () {
    return view('pages.about.regional');
})->name('regional');

Route::get('/about/crime', function () {
    return view('pages.about.crime');
})->name('crime');

Route::get('/about/human', function () {
    return view('pages.about.human-crime');
})->name('human-crime');

Route::get('/about/road', function () {
    return view('pages.about.road');
})->name('road');


Route::get('/about/economics', function () {
    return view('pages.about.economics');
})->name('economics');

Route::get('/about/rushwa', function () {
    return view('pages.about.rushwa');
})->name('rushwa');
Route::get('/about/cyber', function () {
    return view('pages.about.cyber');
})->name('cyber');


Route::get('/about/planning', function () {
    return view('pages.about.planning');
})->name('planning');

Route::get('/about/div-planning', function () {
    return view('pages.about.div-planning');
})->name('div-planning');
Route::get('/about/utawala', function () {
    return view('pages.about.utawala');
})->name('utawala');
Route::get('/about/nyaraka', function () {
    return view('pages.about.nyaraka');
})->name('nyaraka');

Route::get('/about/ununuzi', function () {
    return view('pages.about.ununuzi');
})->name('ununuzi');

Route::get('/about/account', function(){
    return view('pages.about.account');
})->name('account');
Route::get('/about/mashahidi', function(){
    return view('pages.about.mashahidi');
})->name('mashahidi');
Route::get('/about/ict', function(){
    return view('pages.about.ict');
})->name('ict');
Route::get('/about/audit', function(){
    return view('pages.about.audit');
})->name('audit');

Route::get('/consultive', function () {
    return view('pages.consultive');
})->name('consultive');


Route::get('/director', function () {
    return view('pages.director');
})->name('director');

// Route::get('/services', function () {
//     return view('services');
// })->name('services');

// Route::get('/guidelines', function () {
//     return view('guidelines');
// })->name('guidelines');
Route::get('/photos', function () {
    return view('pages.photo');
})->name('photo');
Route::get('/document', function () {
    return view('pages.media.document');
})->name('document');
Route::get('/video', function () {
    return view('pages.media.video');
})->name('video');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/contact', function () {
    return view('pages.contacts');
})->name('contacts');


use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Users;
use App\Livewire\Admin\Achievements;
use App\Livewire\Admin\Feedback;

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
        Route::get('/users', Users::class)->name('admin.users');
        Route::get('/achievements', Achievements::class)->name('admin.achievements');
        Route::get('/feedback', Feedback::class)->name('admin.feedback');
    });




use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Authentication Routes (CUSTOM)
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

