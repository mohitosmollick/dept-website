<?php

use App\Http\Controllers\Dashboard\BatchController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ChairmanController;
use App\Http\Controllers\Dashboard\dashboardController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\userController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\SubCat\SubCatContoller;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

//dashboard
Route::get('/admin',[dashboardController::class,'admin'])->name('view.admin');

//user
Route::get('show_user',[userController::class,'userShow'])->name('show.user');
Route::get('user_delete/{user_id}',[userController::class,'userDelete'])->name('user.delete');

//profile
Route::get('/profile',[userController::class,'profile'])->name('profile');
Route::get('/edit/profile',[userController::class,'editProfile'])->name('editProfile');
Route::post('/name/update',[userController::class,'nameUpdate'])->name('nameUpdate');
Route::post('/job/update',[userController::class,'jobUpdate'])->name('jobUpdate');
Route::post('/password/update',[userController::class,'passwordUpdate'])->name('passwordUpdate');
Route::post('/image/update',[userController::class,'updateProfileImage'])->name('updateProfileImage');

//category
Route::get('categories',[CategoryController::class,'category'])->name('category.show');
Route::post('category',[CategoryController::class,'AddCategory'])->name('addCategory');
Route::get('cat_delete/{cat_id}',[CategoryController::class, 'softDelete'])->name('softDelete');
Route::get('edit/category/{cat_id}',[CategoryController::class,'editCategory'])->name('editCategory');
Route::post('update/category',[CategoryController::class,'updateCategory'])->name('update_category');
Route::get('restore/category/{cat_id}',[CategoryController::class,'restoreCategory'])->name('restore_category');
Route::get('delete/category/{cat_id}',[CategoryController::class,'deleteCategory'])->name('hard_delete_category');


//category
Route::get('subcategories',[SubCatContoller::class,'SubCatShow'])->name('SubCatShow');
Route::post('subcategory',[SubCatContoller::class,'addSubCategory'])->name('addSubCategory');
Route::get('subcat_delete/{cat_id}',[SubCatContoller::class, 'softDeleteSubCat'])->name('softDeleteSubCat');
Route::get('edit/subcategory/{cat_id}',[SubCatContoller::class,'editSubCategory'])->name('editSubCategory');
Route::post('update/subcategory',[SubCatContoller::class,'updateSubCategory'])->name('updateSubCategory');
Route::get('restore/subcategory/{cat_id}',[SubCatContoller::class,'restoreSubcategory'])->name('restoreSubcategory');
Route::get('delete/subcategory/{cat_id}',[SubCatContoller::class,'deleteSubcategory'])->name('deleteSubcategory');

//Batch
Route::get('show/batch',[BatchController::class,'batchesShow'])->name('batchesShow');
Route::post('add/batch',[BatchController::class,'AddBatch'])->name('AddBatch');
Route::get('cat_delete/{cat_id}',[BatchController::class, 'softDelete'])->name('softDelete');
Route::get('edit/batch/{cat_id}',[BatchController::class,'editBatch'])->name('editBatch');
Route::post('update/batch',[BatchController::class,'updateBatch'])->name('updateBatch');
Route::get('restore/batch/{cat_id}',[BatchController::class,'restoreBatch'])->name('restoreBatch');
Route::get('delete/batch/{cat_id}',[BatchController::class,'deleteBatch'])->name('deleteBatch');

//Slider Image
Route::get('show/slider',[SliderController::class,'sliderShow'])->name('sliderShow');
Route::post('add/slider',[SliderController::class,'AddSlider'])->name('AddSlider');
Route::get('slider_delete/{cat_id}',[SliderController::class, 'softDelete'])->name('softDelete');

//About
Route::get('show/about',[ChairmanController::class,'About'])->name('about');
Route::post('add/about',[ChairmanController::class,'addAbout'])->name('addAbout');
Route::get('edit/about/{id}',[ChairmanController::class,'editAbout'])->name('editAbout');
Route::post('update/about',[ChairmanController::class,'updateChairman'])->name('updateChairman');
Route::post('update/photo',[ChairmanController::class,'updatePhoto'])->name('updatePhoto');

//Search Batch
Route::get('search/batch',[BatchController::class,'SearchBatch'])->name('SearchBatch');
Route::get('show/batch',[BatchController::class,'batchesShow'])->name('batchesShow');

//Post create
//Route::get('post/create',[PostController::class,'postCreate'])->name('postCreate');
Route::get('post/create',[PostController::class,'postCreate'])->name('postCreate');
Route::post('getSubCategory',[PostController::class,'addSubCategory'])->name('getSubCategory');
Route::post('add/post',[PostController::class,'AddPost'])->name('AddPost');
//Route::get('cat_delete/{cat_id}',[BatchController::class, 'softDelete'])->name('softDelete');
//Route::get('edit/batch/{cat_id}',[BatchController::class,'editBatch'])->name('editBatch');
//Route::post('update/batch',[BatchController::class,'updateBatch'])->name('updateBatch');
//Route::get('restore/batch/{cat_id}',[BatchController::class,'restoreBatch'])->name('restoreBatch');
//Route::get('delete/batch/{cat_id}',[BatchController::class,'deleteBatch'])->name('deleteBatch');

//Post page front
Route::get('posts',[PostController::class,'postPage'])->name('postPage');
Route::get('single/post/{id}',[PostController::class,'singlePost'])->name('singlePost');
Route::get('category/post/{id}',[PostController::class,'categoryPost'])->name('categoryPost');

//events
Route::get('event/show',[EventController::class,'eventShow'])->name('eventShow');
Route::get('event/{id}',[EventController::class,'singleEvent'])->name('singleEvent');
Route::get('add/event',[EventController::class,'addEvent'])->name('addEvent');
Route::post('create/event',[EventController::class,'createEvent'])->name('createEvent');


