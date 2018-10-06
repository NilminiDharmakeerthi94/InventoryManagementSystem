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
/*
Route::get('/', 'Auth\LoginController@showLoginForm' , function () {
    return view('home');
});

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
  
Route::group([
    'prefix' => 'items',  'middleware'], function(){
    Route::get('/', 'ItemController@index')->name('item.index');
    Route::get('create','ItemController@create')->name('item.create');                    //admin
    Route::post('store','ItemController@store')->name('item.store');
    Route::get('{item}/edit', 'ItemController@edit')->name('item.edit');                  
    Route::patch('{item}/edit','ItemController@update')->name('item.update');
    Route::delete('{item}/delete','ItemController@destroy')->name('item.destroy');
    Route::get('/search', 'ItemController@search')->name('item.search');
});

Route::group([
    'prefix' => 'itemsuser',  'middleware'], function(){
    Route::get('/', 'ItemController@indexuser')->name('itemuser.index');
    Route::get('/search', 'ItemController@search')->name('itemuser.search'); 
  /*  Route::get('create','ItemController@create')->name('item.create');
    Route::post('store','ItemController@store')->name('item.store');                //user item 
    Route::get('{item}/edit', 'ItemController@edit')->name('item.edit');                  
    Route::patch('{item}/edit','ItemController@update')->name('item.update');
    Route::delete('{item}/delete','ItemController@destroy')->name('item.destroy');
    Route::get('/search', 'ItemController@search')->name('item.search');  */
});







Route::group([                               
    'prefix' => 'suppliers', 'middleware'],function(){
    Route::get('/','SupplierController@index')->name('supplier.index'); 
    Route::get('create','SupplierController@create')->name('supplier.create');
    Route::post('store','SupplierController@store')->name('supplier.store');
    Route::get('{supplier}/edit', 'SupplierController@edit')->name('supplier.edit');
    Route::patch('{supplier}/edit','SupplierController@update')->name('supplier.update');
    Route::delete('{supplier}/delete','SupplierController@destroy')->name('supplier.destroy');
    Route::get('/search', 'SupplierController@search')->name('supplier.search');
});

Route::group([
    'prefix' => 'stocks', 'middleware'],function(){
    Route::get('/','StockController@index')->name('stock.index');
    Route::get('create','StockController@create')->name('stock.create');
    Route::post('store','StockController@store')->name('stock.store');
    Route::get('out','StockController@checkout_form')->name('stock.out');
});

 Route::get('/profile', 'ProfileController@index')->name('user.profile');



Route::get('/supply','ContactController@supply')->name('contacts.supply');                 
Route::get('/branch','ContactBranchController@branch')->name('contacts.branch');       //contact
Route::get('/contactuser','ContactController@contactuser')->name('contactuser.owner'); 

 /**branch */
                                                                                          //main home
Route::get('/',function(){
    return view('mainhome');
    });
    
Route::get('/userlogin','UserController@userlogin')->name('auth.userlogin');
        
Route::get('/userlogin', 'UserController@userlogin')->name('userlogin');




                                                                                                //admin contact
//Route::get('/home' , 'AdminController@index');        

Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
    }); 

    
//connection

Route::prefix('contacts')->group(function(){
Route::get('suppply','ContactsupplierController@suppliercontact')->name('contacts.supply');
Route::post('suppply','ContactsupplierController@suppliercontact')->name('contacts.supply');
Route::post('store','ContactsupplierController@suppliercontactstore')->name('contacts.store');
});