<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {
	

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/travel', 'TravelController@index')->name('travel');

	Route::post('/contact', 'HomeController@contact');

	Route::group(array('prefix'=> 'error'), function(){
		Route::get('/', 'ErrorController@permission');
		Route::get('/404', 'ErrorController@error404');
		//Route::get('/baoloi', function(){ echo 'bug';});//'ErrorController@permission');
	});

	Route::group(['prefix' => 'ajax'], function(){
		Route::get('/test','AjaxController@testing');
		Route::post('/uploadimageajax','AjaxController@uploadImageAjax');
		Route::get('/getCategorySub/{cat_id}', 'AjaxController@getCategorySub');
		Route::post('/uploadImage', 'AjaxController@uploadImage');
	});

	Route::post('/switchLang', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
	
	Route::auth();
});


Route::group(['middleware' => 'web'], function () {
	Route::group(['prefix' => 'jungle', 'namespace'=>'Backend'], function(){
		Route::get('/login', 'AdminController@getLogin');
		Route::post('/login', 'AdminController@postLogin');
		Route::get('/logout', 'AdminController@getlogout');
		Route::get('/uploads', 'AdminController@uploads');

		Route::group(['middleware'=>'admin'],function(){
			Route::get('/', 'AdminController@index');
			Route::get('/tour/', 'TourController@index');
			Route::get('/tour/create', 'TourController@create');
			Route::post('/tour/create', 'TourController@store');
			Route::post('/tour/createTour', 'TourController@createTour');
			Route::post('/tour/createDetail', 'TourController@createDetail');
			Route::get('/tour/data/{id}', 'TourController@data');
			Route::get('/tour/edit/{id}', 'TourController@store');
			Route::get('/tour/{id}', 'TourController@index');
			Route::get('/tour/search/{keyworks}', 'TourController@search');
			Route::get('/tour/addDetail/{id}', 'TourController@addDetail');
			Route::get('/tour/destroy/{id}', 'TourController@destroy');
			Route::get('/tour/delete/{id}', 'TourController@delete');
			Route::get('/tour/restore/{id}', 'TourController@restore');
			Route::get('/tour/trash/{id}', 'TourController@listTrash');

			Route::get('/tickets/schedule', 'TicketController@schedule');

			Route::get('/offices/listing', 'OfficeController@index');
			Route::get('/offices/addnew', 'OfficeController@addnew');

			Route::group(['prefix' => 'favourite'], function () {
	        Route::get('/create', 'FavouriteController@getCreate');
	        Route::post('/create', 'FavouriteController@postCreate');
	        Route::get('/list', 'FavouriteController@getList');


	    });
			/*
			Route::get('/favourite', 'FavouriteController@index');
			Route::get('/favourite/create', 'FavouriteController@create');
			Route::get('/favourite/store', 'FavouriteController@store');
			*/
		
	       
			Route::get('/profile', 'profileController@index');
			Route::post('/profile', 'profileController@store');
			#Route::get('/profile/{id}}', 'ProfileController@update');
			Route::get('/profile/password/{id}}', 'profileController@updatePass');
			Route::get('/profile/avatar/{id}}', 'profileController@updateAvatar');

			Route::get('/profile/list', 'profileController@listProfile'); # Hien thi danh sach
			Route::get('/profile/create/', 'profileController@create'); # Them moi 1 user View
			Route::post('/profile/create/', 'profileController@createProfile'); # Submit them user
			Route::get('/profile/edit/{id}', 'profileController@editProfile'); # Show Edit
			Route::post('/profile/edit/', 'profileController@update'); # submit Editprofile id
			#Route::post('/profile/update', 'ProfileController@update'); # Submit
			Route::get('/profile/destroy/{id}', 'profileController@destroy'); # Xoa vao sot rac
			Route::get('/profile/restore/{id}', 'profileController@restore'); # khoi phuc
			Route::get('/profile/trash', 'profileController@listTrash'); # List
			Route::get('/profile/delete/{id}', 'profileController@delete'); # Xoa luon khoi sot rac
	   
			Route::get('/setting/introdution', 'SettingController@introdution');

			Route::get('/permission', 'AdminController@permission');
		});
	});
});

Route::auth();

Route::get('/home', 'HomeController@index');
