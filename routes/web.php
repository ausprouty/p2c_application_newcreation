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
Route::get('/ebook', 'SiteController@ebook')->name('ebook');
Route::get('/clear', 'SiteController@clear')->name('clear');
Route::get('/debug', 'SiteController@debug')->name('debug');
Route::get('bible/{book_name}', 'BibleController@download')->name('download');

Route::get('welcome/{locale}', function ($locale) {
    if (! in_array($locale, ['ar','en', 'fa', 'ur'])) {
        abort(400);
    }
    App::setLocale($locale);
});

Route::get('set-locale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->middleware('check.locale')->name('locale.setting');
