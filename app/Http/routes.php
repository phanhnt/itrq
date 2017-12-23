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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
	return "hello";
});

Route::get('abc/{thamso}', function($thamso){
	return "hello hãy nhìn cái $thamso";
});
Route::get('abc/{thamso?}', function($thamso){
	return "hello hãy nhìn cái $thamso";
});

Route::get('abc/{ten}/{tuoi}', function($ten,$tuoi){
	return "$ten năm nay $tuoi tuổi ";
})-> where ([ 'ten' => '[a-z]+', 'tuoi' => '[0-9]{2}']);

Route::get('su-dung-view-va-truyen-tham-so', function(){
	$ten="Phương Anh";
	return view('routeTut',compact('ten'));
});
Route::get('/parent', function(){
	return view('tutBlade.parent');
});
Route::get('/child', function(){
	return view('tutBlade.child');
});
