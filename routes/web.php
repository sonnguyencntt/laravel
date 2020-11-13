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


Route::get('/', function () {
    return view('welcome');
}); 
Route::get('Khoahoc', function (){
    echo "Xin Chao Cac Ban";
});
Route::get('KhoaPham/Laravel' , function(){
    return "<h1>Khoa Hoc  - Laravel</h1>";
});

//Truyen tham so

Route::get('Hoten/{Ten}' , function($ten){
    return "Ten cua ban là : ".$ten;
});
Route::get('Laravel/{nasd}' , function($ngay){
    echo "Khoa Pham : " .$ngay;
})->where(["nasd" => '[0-9]+']);

//Dinh danh

Route::get('Route1' , ['as'=>'MyRoute', function(){
    echo "Xin chao cac ban";
}]);
Route::get('Goiten' , function(){
    return redirect()->route('MyRoute2');
});
Route::get('Route2' , function(){
    echo "Day la Route2";
})->name('MyRoute2');

//Group
Route::group(['prefix'=>'MyGroup'] , function(){
    Route::get('User1', function(){
        echo "user1";
    });
    Route::get('User2' , function(){
        echo "user2";
    });
    Route::get('User3' , function(){
        echo "user3";
    });
});

//Controller
Route::get('GoiController' , 'MyController@XinChao');

Route::get('ThamSo/{ten}' , 'MyController@Khoahoc');

Route::get('MyRequest' ,'MyController@getUrl');

Route::get('getForm' , function(){
    return view('postForm');
});
Route::post('postForm' , ['as'=>'postForm' ,'uses'=>'MyController@postForm']);

Route::get('setCookie' , 'MyController@setCookie');
Route::get('getCookie' , 'MyController@getCookie');