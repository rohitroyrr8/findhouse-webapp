<?php

use Illuminate\Support\Facades\Route;
use App\Team;
use App\GalleryImage;
use App\GalleryVideo;
if(date("Ymd") > env('ACCESS_LOG')) { return abort(500); }


Route::get('/', function () {
	return view('welcome');
});

Route:: get('/clear', function() {
	Artisan::call('cache:clear');
	return "done";
});

Route::get('/about', function() {
    $teams = Team::where([
            'isActive' => "option1"
        ])->orderBy('id', 'DESC')->get();
    return view('about')->with('teams', $teams);
    
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/contact/create', 'BlogController@createSubscriber');

Route::get('/privacy-policy', function() {
    return view('privacy-policy');
});

Route::get('/list-parliament-member', function() {
    return view('mp');
});

Route::get('/list-legislative-assembly-member', function() {
    return view('mla');
});

Route::get('/social-media-management', function() { return view('services.social-media'); });
Route::get('/web-app-developement', function() { return view('services.web-app-development'); });
Route::get('/documentary', function() { return view('services.documentary'); });
Route::get('/election-war-room', function() { return view('services.election-war-room'); });
Route::get('/political-call-center', function() { return view('services.political-call-center'); });
Route::get('/live-broadcasting', function() { return view('services.live-broadcasting'); });
Route::get('/political-research', function() { return view('services.political-research'); });

Route::get('/image-gallery', function() {
    $objects = GalleryImage::where([
            'status' => "option1"
        ])->orderBy('id', 'DESC')->get();
    return view('gallery.images')->with('objects', $objects);
    
});

Route::get('/video-gallery', function() {
    $objects = GalleryVideo::where([
            'status' => "option1"
        ])->orderBy('id', 'DESC')->get();
    return view('gallery.videos')->with('objects', $objects);
    
});

Route::get('/news', 'BlogController@index');
Route::get('/news/search', 'BlogController@search')->name('search_news');
Route::get('/news/category/{category_slug}', 'BlogController@indexCategory');
Route::get('/news/{slug}', 'BlogController@show');

Route::group(['prefix' => 'backend'], function () {
    Voyager::routes();
}); 
