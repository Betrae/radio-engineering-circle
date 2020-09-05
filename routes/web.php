<?php

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
Route::view('/', 'pages.rec.index')->name('rec.index');
Route::view('/rec/about', 'pages.rec.about_rec')->name('rec.about');
Route::view('/rec/history', 'pages.rec.history')->name('rec.history');
Route::view('/rec/vmgo', 'pages.rec.vmgo')->name('rec.vmgo');
Route::view('/rec/charter', 'pages.rec.charter')->name('rec.charter');
Route::view('/rec/events', 'pages.rec.events')->name('rec.events');
Route::view('/rec/officers', 'pages.rec.officers')->name('rec.officers');
Route::view('/rec/membership', 'pages.rec.membership')->name('rec.membership');

Route::view('/learn','pages/learn/index')->name('learn.index');
Route::view('/learn/eximination','pages/learn/examination')->name('learn.examination');
Route::view('/learn/operate','pages/learn/operate')->name('learn.operate');
Route::view('/learn/elmer-section','pages/learn/elmersection')->name('learn.elmersection');

Route::view('/sections','pages/sections/index')->name('section.index');

Route::view('/news','pages/news/index')->name('news.index');

Route::view('/info','pages/info/index')->name('info.index');

Route::view('/activities','pages/activities/index')->name('activities.index');

Route::view('/contacts','pages/contacts/index')->name('contacts.index');

Route::view('/join-rec','pages/join/index')->name('join.index');


