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

// Route::get('/', function () {
//     return view('user.home');
// });

//ALL
Route::get('/', 'PostController@home');
Route::get('/search', 'PostController@search');

Route::get('/login', function () {
    return view('user.login');
});
Route::post('/login-post', 'UserController@login');

Route::get('/register', function () {
    return view('user.register');
});
Route::post('/register-post', 'UserController@register');

Route::get('/logout', 'UserController@logout');

//MEMBER
Route::get('/profile/{name}', 'PostController@profile');
Route::get('/edit-profile/{id}', 'UserController@editProfile');
Route::post('/edit-profile', 'UserController@newEditProfile');

Route::get('/lend', 'TransactionController@lendIndex');
Route::post('/lend-post', 'TransactionController@lendItem');

Route::get('/borrow/{product_name}/{id}', 'TransactionController@borrowIndex');
Route::post('/borrow-post', 'TransactionController@borrowItem');

Route::get('/edit/{product_name}/{id}', 'TransactionController@editIndex');
Route::post('/edit-post', 'TransactionController@editItem');

Route::get('/delete-post', 'TransactionController@deleteItem');

Route::get('/lend-history', 'HistoryController@lendHistory')->middleware(\App\Http\Middleware\AuthCheck::class);
Route::get('/lend-accept/{product_name}/{product_id}/{id}', 'HistoryController@lendAccept');
Route::get('/lend-decline/{product_name}/{product_id}/{id}', 'HistoryController@lendDecline');
Route::get('/lend-deliver/{product_name}/{product_id}/{id}', 'HistoryController@lendDeliver');

Route::get('/borrow-history', 'HistoryController@borrowHistory')->middleware(\App\Http\Middleware\AuthCheck::class);
Route::get('/borrow-pay/{product_name}/{product_id}/{id}', 'HistoryController@borrowPay');
Route::get('/borrow-cancel/{product_name}/{product_id}/{id}', 'HistoryController@borrowCancel');
Route::get('/borrow-cancelPayment/{product_name}/{product_id}/{id}', 'HistoryController@borrowCancelPayment');
Route::get('/borrow-approve/{product_name}/{product_id}/{id}', 'HistoryController@borrowApprove');

Route::get('/test', function () {
    return view('staff.test');
});