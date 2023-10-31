<?php

use App\Http\Controllers\Dashboard\BatchController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ChairmanController;
use App\Http\Controllers\Dashboard\dashboardController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\SubjectController;
use App\Http\Controllers\Dashboard\userController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Notice\NoticeController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Role\RoleController;
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
Route::post('search/batches',[BatchController::class,'batchStudent'])->name('batchStudent');

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
Route::get('edit/event/{id}',[EventController::class,'editEvent'])->name('editEvent');
Route::get('delete/event/{id}',[EventController::class,'deleteEvent'])->name('deleteEvent');
Route::post('update/event',[EventController::class,'updateEvent'])->name('updateEvent');
Route::post('update/event/img',[EventController::class,'updateEventImg'])->name('updateEventImg');

//Notice
Route::get('notice/show',[NoticeController::class,'showNotice'])->name('showNotice');
Route::get('notice/add',[NoticeController::class,'addNotice'])->name('addNotice');
Route::post('notice/create',[NoticeController::class,'createNotice'])->name('createNotice');
Route::get('delete/notice/{id}',[NoticeController::class,'deleteNotice'])->name('deleteNotice');
Route::get('edit/notice/{id}',[NoticeController::class,'editNotice'])->name('editNotice');
Route::post('update/notice',[NoticeController::class,'updateNotice'])->name('updateNotice');
Route::post('update/notice/image',[NoticeController::class,'updateNoticeImg'])->name('updateNoticeImg');

//Subject
Route::get('show/subject',[SubjectController::class,'subject'])->name('subject');
Route::post('add/subject',[SubjectController::class,'addSubject'])->name('addSubject');
Route::get('edit/subject/{id}',[SubjectController::class,'editSubject'])->name('editSubject');
Route::post('update/subject',[SubjectController::class,'updateSubject'])->name('updateSubject');
Route::get('delete/subject/{id}',[SubjectController::class,'deleteSubject'])->name('deleteSubject');
Route::post('update/subject/image',[SubjectController::class,'SubjectImageUp'])->name('SubjectImageUp');

//roleManager
Route::get('permission',[RoleController::class,'Permission'])->name('Permission');
Route::post('add/permission',[RoleController::class,'addPermission'])->name('addPermission');
Route::get('role',[RoleController::class,'roleManager'])->name('roleManager');
Route::post('add/role',[RoleController::class,'roleAdd'])->name('roleAdd');
Route::post('add/user/role',[RoleController::class,'addUserRole'])->name('addUserRole');

//remove roll
Route::get('remove/user/role/{id}',[RoleController::class,'removeRole'])->name('removeRole');



