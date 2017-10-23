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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','GrocerystoreController@homeContent');
Route::get('/event','GrocerystoreController@eventContent');
Route::get('/aboutUs','GrocerystoreController@aboutUsContent');
Route::get('/product','GrocerystoreController@productContent');
Route::get('/services','GrocerystoreController@serviceContent');
Route::get('/households','GrocerystoreController@householdContent');
Route::get('/vegetables','GrocerystoreController@vegetableContent');
Route::get('/kitchen','GrocerystoreController@kitchenContent');
Route::get('/softDrinks','GrocerystoreController@softDrinkContent');
Route::get('/petFood','GrocerystoreController@petFoodContent');
Route::get('/frozenSnacks','GrocerystoreController@frozenSnackContent');
Route::get('/breadBakery','GrocerystoreController@breadBakeryContent');
Route::get('/contactUs','GrocerystoreController@contactUsContent');

Route::get('/signup','CustomerController@customerSingup');
Route::get('/login','CustomerController@customerLogin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/category/new', 'CategoryController@saveCategoryInfo');
Route::get('/category/edit/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');
Route::get('/category/unpublished/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/category/published/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/manage-category', 'CategoryController@manageCategory');

Route::get('/add-brand', 'BrandController@addBrand');
Route::post('/new-brand', 'BrandController@saveBrandInfo');




Route::get('/add-product', 'ProductController@addProduct');
Route::post('/product/new', 'ProductController@saveProductInfo');
Route::get('/manage-product', 'ProductController@manageProduct');
Route::get('/product/view/{id}', 'ProductController@viewProductInfo');
Route::get('/product/edit/{id}', 'ProductController@editProductInfo');
Route::post('/product/update', 'ProductController@updateProductInfo');
Route::get('/product/unpublished/{id}', 'ProductController@unpublishdeProductInfo');
Route::get('/product/published/{id}', 'ProductController@publishdeProductInfo');
Route::get('/product/delete/{id}', 'ProductController@deleteproductinfo');

Route::get('/add-slider', 'SliderController@addSlider');
Route::post('/slider/new', 'SliderController@saveSliderInfo');
Route::get('/manage-slider', 'SliderController@manageSlider');
Route::get('/slider/edit/{id}', 'SliderController@editProductInfo');
Route::post('/slider/update', 'SliderController@updateProductInfo');
Route::get('/slider/unpublished/{id}', 'SliderController@unpublishedSlider');
Route::get('/slider/published/{id}', 'SliderController@publishedSlider');
Route::get('/slider/delete/{id}', 'SliderController@deleteSlider');


