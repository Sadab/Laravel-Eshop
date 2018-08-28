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
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/signup', 'LoginController@signup')->name('signup');
Route::post('/signup', 'LoginController@signupDb');
Route::post('/login', 'LoginController@verify');
Route::get('/login/logout', 'LoginController@logout')->name('logout');


Route::get('/','home\HomeController@index')->name('home');
Route::get('/product/details/{id}','home\HomeController@singleProduct')->name('product.single');




/* #################  ADMIN ROUTES ############# */

Route::group(['middleware' => 'sess'], function()
{

	Route::get('/dashbord','admin\AdminController@index')->name('admin.home');
	Route::get('/dashbord/admin-account','admin\AdminController@account')->name('admin.account');
	Route::get('/dashbord/admin-editprofile','admin\AdminController@editprofile')->name('edit.profile');
	Route::post('/dashbord/admin-editprofile','admin\AdminController@updateprofile');
	Route::get('/dashbord/admin-changepassword','admin\AdminController@ChangePassword')->name('changepass');
	Route::post('/dashbord/admin-changepassword','admin\AdminController@UpdatePassword');
	Route::get('/dashbord/order','OrderController@Index')->name('order.list');
	Route::get('/dashbord/order/view/{id}','OrderController@ViewOrder')->name('order.view');
	Route::get('/dashbord/order/delete/{id}','OrderController@DeleteOrder')->name('order.delete');
	Route::get('/dashbord/user/list','admin\AdminController@UserList')->name('user.list');
	Route::get('/dashbord/user/delete/{id}','admin\AdminController@UserDelete')->name('user.delete');




	/* #################  Brand ROUTE ############# */

	Route::get('/dashbord/brand','admin\BrandController@index')->name('brand.list');
	Route::get('/dashbord/brand/create','admin\BrandController@create')->name('brand.create');
	Route::post('/dashbord/brand/create','admin\BrandController@insert');
	Route::get('/dashbord/brand/edit/{id}','admin\BrandController@edit')->name('brand.edit');
	Route::post('/dashbord/brand/edit/{id}','admin\BrandController@update');
	Route::get('/inactive_brand/{id}','admin\BrandController@inactive_brand');
	Route::get('/active_brand/{id}','admin\BrandController@active_brand');
	Route::get('/dashbord/brand/delete/{id}','admin\BrandController@delete')->name('brand.delete');




	/* #################  Category ROUTE ############# */



	Route::get('/dashbord/category','admin\CategoryController@index')->name('category.list');
	Route::get('/dashbord/category/create','admin\CategoryController@create')->name('category.create');
	Route::post('/dashbord/category/create','admin\CategoryController@insert');
	Route::get('/dashbord/category/edit/{id}','admin\CategoryController@edit')->name('category.edit');
	Route::post('/dashbord/category/edit/{id}','admin\CategoryController@update');
	Route::get('/inactive_category/{id}','admin\CategoryController@inactive_category');
	Route::get('/active_category/{id}','admin\CategoryController@active_category');
	Route::get('/dashbord/category/delete/{id}','admin\CategoryController@delete')->name('category.delete');
	Route::get('/feature_inactive_category/{id}','admin\CategoryController@feature_inactive_category');
	Route::get('/feature_active_category/{id}','admin\CategoryController@feature_active_category');





	/* #########################################  PRODUCT ROUTE ############################################ */

	/* ##################################  PRODUCT LIST ROUTE ############################## */

	Route::get('/dashbord/product/list','admin\ProductController@productList')->name('product.list');
	Route::get('/dashbord/product/add','admin\ProductController@addProductIndex')->name('product.add');
	Route::post('/dashbord/product/add','admin\ProductController@addProductInsert');
	Route::get('/dashbord/product/view/{id}','admin\ProductController@ProductView')->name('product.view');
	Route::get('/dashbord/product/edit/{id}','admin\ProductController@ProductEdit')->name('product.edit');
	Route::post('/dashbord/product/edit/{id}','admin\ProductController@ProductUpdate');
	Route::get('/dashbord/product/delete/{id}','admin\ProductController@ProductDelete')->name('product.delete');
	Route::get('/feature_inactive_product/{id}','admin\ProductController@feature_inactive_product');
	Route::get('/feature_active_product/{id}','admin\ProductController@feature_active_product');




	/* ##################################  PRODUCT COLOR ROUTE ############################## */

	Route::get('/dashbord/product/color','admin\ProductController@ColorIndex')->name('product.color');
	Route::post('/dashbord/product/color','admin\ProductController@insertColor');
	Route::get('/dashbord/product/color/edit/{id}','admin\ProductController@updateColor')->name('color.edit');
	Route::post('/dashbord/product/color/edit/{id}','admin\ProductController@upgradeColor');
	Route::get('/dashbord/product/color/delete/{id}','admin\ProductController@deleteColor')->name('color.delete');



	/* ##################################  PRODUCT SIZE ROUTE ############################## */

	Route::get('/dashbord/product/size','admin\ProductController@SizeIndex')->name('product.size');
	Route::post('/dashbord/product/size','admin\ProductController@insertSize');
	Route::get('/dashbord/product/size/edit/{id}','admin\ProductController@updateSize')->name('size.edit');
	Route::post('/dashbord/product/size/edit/{id}','admin\ProductController@upgradeSize');
	Route::get('/dashbord/product/size/delete/{id}','admin\ProductController@deleteSize')->name('size.delete');

});