<?php
use Core\Router as Route;
use App\controller\SliderController;
//
//Route::get('about/{name}',function (){
//    echo  'home isledi';
//});
Route::get('slider/{id}',[SliderController::class,'index']);
Route::get('user/{name}/{surname}/tofiq/{aaaa}',['ContactController','storeData']);
Route::get('slider/{text}/',['SliderController','index']);
Route::get('/about',function (){
    echo "about sehifesi controllerin icindedi";
});
Route::get('/',['HomeController','index']);
Route::post('/contact/{id}',['ContactController','storeDate']);