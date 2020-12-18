<?php

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


Route::get('/', 'SiteController@home')->name('home');
Route::get('{iso}/ebook', 'SiteController@ebook')->name('ebook');
Route::get('test', 'SiteController@test')->name('test');
Route::get('/clear', 'SiteController@clear')->name('clear');
Route::get('/debug', 'SiteController@debug')->name('debug');
Route::get('bible/chapter/{chapter_name}', 'BibleController@downloadChapter')->name('downloadChapter');
Route::get('bible/book/{book_name}', 'BibleController@downloadBook')->name('downloadBook');
Route::get('bible/all/{bible_name}', 'BibleController@downloadBible')->name('downloadBible');
