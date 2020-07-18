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

// index - also included for bottom navigation bar
// top navigation bar
/*Route::get('/', function () {
    return view('welcome');
});*/

// index - also included for bottom navigation bar
// top navigation bar
Route::get('/', 'PagesController@index');
Route::post('/index', 'PagesController@storereview');

Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');
Route::get('/admin', 'PagesController@admin');

Route::get('/reviews', 'PagesController@reviews');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/support', 'PagesController@support');

Route::get('/users', 'PagesController@users');

// public navigation bar
Route::get('/profile', 'PagesController@profile');
Route::get('/buy', 'PagesController@buy');
Route::get('/events', 'PagesController@events');
Route::get('/news', 'PagesController@news');
Route::get('/animal', 'PagesController@animal');
Route::get('/animal/{id}/info', 'PagesController@animalInfo');

// Route::get('/search', 'PagesController@search');

// Route::get('/animal/{id}/{animal_id}/info', 'PagesController@animalInfo');

Route::post('search', ['as' => 'search', 'uses' => 'SearchController@index']);


// Route::post('/search', function(){
//     $search = Input::get('search');
//     if($search != ""){
//         $data = DB::table('animals')->where('name', 'LIKE', '%' . $search . '%')
//         ->orWhere('species', 'LIKE', '%' . $search . '%')
//         ->get();
//         if(count($data) > 0)
//             return view('admin')->withDetails($data)->withQuery($search);
//     }
//     return view ('admin')->withMessage('No results found.');
// });




Route::resource('categories', 'CategoriesController');
Route::resource('animals', 'AnimalController');
Route::resource('advertisements', 'AdvertisementController');
Route::resource('reviews', 'ReviewsController');
Route::resource('users', 'UserController');

// Route::get('/services/{service_id}/{service_name}/{service_price}', 'PagesController@show');
Route::get('/animals/{id}/show', 'AnimalController@show');
Route::get('/advertisements/{id}/show', 'AdvertisementController@show');

Auth::routes();

// Route::get('/', 'HomeController@index');

Route::get('/isAdmin', function () {
    })->middleware('1');

Route::get('/isSponsor', function () {
})->middleware('isSponsor');