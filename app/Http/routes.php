<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as' => 'home', function () {
	//return throw new Exception("Tracy works");
	
    return view('index');
}]);

Route::get('about',['as' => 'about',  function () {
    return view('about');
}]);
Route::get('service',['as' => 'service', function () {
	
    return view('service');
}]);
Route::get('portfolio',['as' => 'portfolio', function () {
	
    return view('portfolio');
}]);
Route::get('contact',['as' => 'contact', function () {
	
    return view('contact');
}]);


// Route::post('contact',['as' => 'contact.store', function () {
	
  
// }]);

Route::get('post/{id}',function($id){
	return 'Post:'.$id;
})->where('id','[0-9]+');

// Route::get('hello/{name?}',function($name = 'everybody'){
// 	return 'hello, '.$name;
// });
Route::get('hello',function(){
	return view('hello.index');
}); 

// Route::get('hello',['as'=>'hello',function(){
// 	return view('welcome');
// }]);

Route::group(['prefix'=>'admin'],function(){
	
	Route::get('dashboard',function(){
		return 'admin dashboard';
	});

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
