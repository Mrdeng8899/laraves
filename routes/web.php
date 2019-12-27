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
//Route::get('/home',function (){
//   return "这是home文件";
//});
// 控制器的路由写法
Route::get('/home','TestController@test');


// 使用群组的方式定义把一样的提取出来
Route::group(['prefix'=>'home/test'],function (){
    // 定于 db类的增删改查
    Route::get('add','TestController@add');
    Route::get('del','TestController@del');
    Route::get('update','TestController@update');
    Route::get('select','TestController@select');
    Route::get('test3','TestController@test3');
});
Route::get('home/test/test4','TestController@test4');

// 模板继承的路由  test4是模板
Route::get('home/test/test5','TestController@test5');

// 商品的天气首页路由
Route::get('admin/index','IndexController@index');
// 商品列表页的路由
Route::get('admin/list','IndexController@list')->name('list');
// 商品页删除的路由
Route::get('admin/del/{id?}','IndexController@del');

// 商品修改页面的路由展示
Route::get('admin/edit/{id?}','IndexController@edit');

// 商品修改提交u
Route::post('admin/update/{id}','IndexController@update')->name('update');

// 数据新增的页面展示
Route::get('admin/add','IndexController@add')->name('add');

// 数据的新增添加到数据库的路由方法
Route::get('admin/save','IndexController@save')->name('save');

// 搜索页面的数据展示
Route::get('admin/search','IndexController@search')->name('search');