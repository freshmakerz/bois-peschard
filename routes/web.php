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

Route::get('/', 'PageController@showHome')->name('home');
Route::get('/gites', 'PageController@gitesIndex')->name('gite_index');
Route::get('/gites/{slug}', 'PageController@gitesShow')->name('gite_show');
Route::get('/la-region', 'PageController@regionShow')->name('region_show');
Route::get('/les-loisirs', 'PageController@loisirsShow')->name('loisirs_show');
Route::get('/tarifs', 'PageController@tarifsShow')->name('tarifs_show');
Route::get('/reservation', 'PageController@reservationShow')->name('reservation_show');
Route::get('/livre-d-or', 'PageController@livreOrShow')->name('livre_or_show');
Route::post('/reservation', 'PageController@reservationDo')->name('reservation_do');
Route::get('/contact', 'PageController@contactShow')->name('contact_show');
Route::post('/contact', 'PageController@contactDo')->name('contact_do');
Route::get('lang/{locale}', function ($locale) {
    App::setLocale($locale);
    Session::put('locale', $locale);
    return back();
})->name('lang_switch');
Route::get('/test', function() {
    dd(env('PRISMIC_URL'));
});
Route::get('/evenements', 'PageController@eventsShow')->name('events');
/*


$app->get('tarifs', [
    'as' => 'tarif', 'uses' => 'GiteController@tarifs'
]);
$app->get('loisirs', [
    'as' => 'loisirs', 'uses' => 'GiteController@loisirs'
]);
$app->get('reservation', [
    'as' => 'reservation_show', 'uses' => 'GiteController@reservation'
]);
$app->get('partenaires', [
    'as' => 'partenaires', 'uses' => 'GiteController@partenaires'
]);
$app->get('contact', [
    'as' => 'contact', 'uses' => 'GiteController@contact'
]);
$app->post('reservation', [
    'as' => 'reservation_do', 'uses' => 'GiteController@reservationDo'
]);
$app->get('lang/{lang}', [
    'as' => 'lang_switch', 'uses' => 'GiteController@lang'
]);
$app->get('test', 'GiteController@test');
*/