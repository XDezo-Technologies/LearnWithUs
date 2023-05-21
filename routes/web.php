<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;
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

Route::resource('/', 'App\Http\Controllers\indexFrController');
Route::resource('/course-category', 'App\Http\Controllers\coursesFrController');
Route::resource('/wishlists', 'App\Http\Controllers\wishlistFrController');
Route::resource('/newsletter', 'App\Http\Controllers\NewsletterController');
Route::resource('/aboutus', 'App\Http\Controllers\AboutsFrController');
Route::resource('/instructor', 'App\Http\Controllers\instructorFrController');
Route::resource('/blogs', 'App\Http\Controllers\blogFrController');
// Route::resource('/search', 'App\Http\Controllers\searchController');
Route::resource('/purchased', 'App\Http\Controllers\purchasedController');
Route::resource('/user-profile', 'App\Http\Controllers\userProfileController');
Route::resource('/booking', 'App\Http\Controllers\bookingFrController');

Route::get('/course-detail', function () {
    return view('course-detail');
});
Route::get('/blog-detail', function () {
    return view('blog-detail');
});
// Route::get('/user-profile', function () {
//     return view('user-profile');
// });
// Route::get('/booking', function () {
//     return view('booking');
// });
// Route::resource('/booking', 'App\Http\Controllers\orderController');
Route::put('update/{id}', [App\Http\Controllers\AdminFrController::class, 'index'])->name('updated');
Route::post('/esewa', [App\Http\Controllers\EsewaController::class, 'esewaPay'])->name('esewa');
Route::get('/search', [App\Http\Controllers\searchController::class])->name('search');


Route::get('/success', [App\Http\Controllers\EsewaController::class, 'esewaPaySuccess']);
Route::get('/failure', [App\Http\Controllers\EsewaController::class, 'esewaPayFailed']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('/admin', 'App\Http\Controllers\AdminsController');
    Route::resource('/file', 'App\Http\Controllers\FilesController');
    Route::resource('/slider', 'App\Http\Controllers\SliderController');
    Route::resource('/client', 'App\Http\Controllers\ClientsController');
    Route::resource('/fact', 'App\Http\Controllers\FactsController');
    Route::resource('/whyChooseUs', 'App\Http\Controllers\WhyChooseUsController');
    Route::resource('/wishlist', 'App\Http\Controllers\WishlistController');
    Route::resource('/teacher', 'App\Http\Controllers\TeachersController');
    Route::resource('/about', 'App\Http\Controllers\AboutsController');
    Route::resource('/aboutFeature', 'App\Http\Controllers\AboutsFeaturesController');
    Route::resource('/course', 'App\Http\Controllers\CoursesController');
    Route::resource('/courseBooked', 'App\Http\Controllers\CourseBookedController');
    Route::resource('/blog', 'App\Http\Controllers\BlogsController');
    Route::resource('/contactForm', 'App\Http\Controllers\ContactFormController');
    Route::resource('/setting', 'App\Http\Controllers\SettingsController');
    Route::resource('/testimonial', 'App\Http\Controllers\TestimonialsController');
    Route::resource('/testimonial', 'App\Http\Controllers\TestimonialsController');
});
