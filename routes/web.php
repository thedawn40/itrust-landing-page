<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Models\Category;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ResourceNewsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SolutionDetailController;
use App\Http\Controllers\CategoryController;

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

//landing page
Route::get('/', [HomeController::class, 'index']);
Route::get('/news-events', [HomeController::class, 'news']);
Route::get('/news-events/{news:slug}', [HomeController::class, 'newsDetail']);
Route::get('/solutions', [HomeController::class, 'solutions']);
Route::get('/solutions/{solution:name}', [HomeController::class, 'solutionDetail']);
Route::get('/contact-us', [HomeController::class, 'contactus']);

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/admin/news', [NewsController::class, 'index']);
// Route::get('/admin/news/{news:slug}', [NewsController::class, 'show']);
// Route::get('/admin/category/{category:slug}', function(Category $category){
//     return view('admin/category',[
//         'title' => $category->name,
//         'news' => $category->news,
//         'category'=> $category->name,
//     ]);
// });
// Route::get('/admin/categories', function(){
//     return view('admin/categories',[
//         'title' => "Post Categories",
//         'categories' => Category::all(),
//     ]);
// });



// Route::get('/admin/solutions-new', function () {
//     return view('admin/solutionsdetail');
// });



Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class,'logout']);


Route::resource('/admin/news', ResourceNewsController::class)->middleware('auth');
Route::get('/resource/news/checkSlug', [ResourceNewsController::class, 'checkSlug'])->middleware('auth');

Route::resource('/admin/partner',PartnerController::class)->middleware('auth');
Route::resource('/admin/client',ClientController::class)->middleware('auth');

Route::resource('/admin/solution', SolutionController::class)->middleware('auth');
Route::resource('/admin/solution/detail', SolutionDetailController::class)->middleware('auth');
Route::get('/admin/solution/detail/create/{solution:id}', [SolutionDetailController::class, 'addDetail'])->middleware('auth');

Route::resource('/message', MessageController::class);

Route::resource('/admin/category', CategoryController::class)->middleware('auth');
Route::get('/resource/category/checkSlug', [CategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/admin/company', CompanyController::class)->middleware('auth');
