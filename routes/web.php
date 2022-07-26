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

Route::get('/','App\Http\Controllers\WebController@home');
// Route::get('/', function () {
//     return view('web/index');
// });

Route::get('/about', function () {
    return view('web/about');
});

Route::get('/services', function () {
    return view('web/services');
});
Route::post('/contact-save','App\Http\Controllers\Web\ContactController@store');
Route::get('/careers','App\Http\Controllers\Web\CareersController@view');
Route::get('/careers-inner/{id}','App\Http\Controllers\Web\CareersController@get');
Route::post('/careers-save','App\Http\Controllers\Web\CareersController@store');

// Route::get('/gallery','App\Http\Controllers\Web\GalleryController@view');

// Route::get('/gallery-details/{id}','App\Http\web\Controllers\GalleryController@stop0ore');
Route::get('/quote-submit','App\Http\Controllers\web\QuoteController@store');

Route::get('/contact', function () {
    return view('web/contact');
});

Route::get('/gallery', function () {
    return view('web/gallery');
});
// login pnel




Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth']], function() {

    Route::get('/add-gallery', function () {
        return view('admin/add-gallery');
    });
    Route::get('/view-contact','App\Http\Controllers\admin\ContactController@list');
    Route::get('/contact-delete/{id}','App\Http\Controllers\admin\ContactController@delete');
    
    Route::get('/view-inquiry','App\Http\Controllers\admin\InquiryController@list');
    Route::get('/inqiury-delete/{id}','App\Http\Controllers\admin\InqiuryController@delete');
    
    Route::get('/view-quote','App\Http\Controllers\admin\QuoteController@list');
    Route::post('/quote-save/{id}','App\Http\Controllers\admin\QuoteController@update');
    Route::get('/quote-delete/{id}','App\Http\Controllers\admin\QuoteController@delete');

    Route::get('/view-careers','App\Http\Controllers\admin\CareersController@view');
    Route::get('/add-careers','App\Http\Controllers\admin\CareersController@list');
    Route::post('/save-careers','App\Http\Controllers\admin\CareersController@store');
    Route::post('/update-careers/{id}','App\Http\Controllers\admin\CareersController@update');
    Route::get('/career-edit/{id}','App\Http\Controllers\admin\CareersController@edit');
    Route::get('/career-delete/{id}','App\Http\Controllers\admin\CareersController@delete');

    Route::post('/save-gallery','App\Http\Controllers\admin\GalleryController@store');
    Route::get('/view-gallery','App\Http\Controllers\admin\GalleryController@view');
    Route::get('/edit-gallery/{id}','App\Http\Controllers\admin\GalleryController@edit');
    Route::post('/update-gallery/{id}','App\Http\Controllers\admin\GalleryController@update');
    Route::get('/gallery-delete/{id}','App\Http\Controllers\admin\GalleryController@delete');
});
