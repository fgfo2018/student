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

Route::get('/user/create', function () { //多重建立使用者密碼

    $service = new \App\Service\UserService();
    $user = $service->create('君飛', '12345', '12345@gmail.com');

    $service = new \App\Service\UserService();
    $user = $service->create('黃俊耀', '12345', '123456@gmail.com');

    $service = new \App\Service\UserService();
    $user = $service->create('楊芷霖', '12345', '1234567@gmail.com');

    dd($user->toArray());

});

Route::get('/Leave', function () {

    $service = new \App\Service\LeaveService();
    $leave = $service->create('2017-12-18 18:00:00', '2017-12-19 19:00:00', '手指扭到，需請假一天');

});
Route::get('/leave/create', function () {
    return view('leave.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'LoginController@login')->name('login');

