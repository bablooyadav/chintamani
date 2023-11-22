<?php

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


Route::get('/about-us', function () {
	return view('frontend.about-us');
})->name('about-us');


Route::get('/contact-us', function () {
	return view('frontend.contact-us');
})->name('contact-us');

Route::get('/', [App\Http\Controllers\Frontend\CustomerController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
	Auth::routes();
});


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
	Route::resource('roles', RoleController::class);
	Route::resource('users', UserController::class);
	Route::resource('products', ProductController::class);

	Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index');

	Route::get('/users', [App\Http\Controllers\UsersController::class, 'users'])->name('users');
	Route::get('/add-users', [App\Http\Controllers\UsersController::class, 'addUsers'])->name('add-users');
	Route::get('/edit-users/{id?}', [App\Http\Controllers\UsersController::class, 'editUsers'])->name('edit-users');
	Route::post('/users-save', [App\Http\Controllers\UsersController::class, 'usersSave'])->name('users-save');
	Route::get('/users-delete/{id?}', [App\Http\Controllers\UsersController::class, 'usersDelete'])->name('users-delete');
	Route::get('/users-banned/{id?}', [App\Http\Controllers\UsersController::class, 'usersBanned'])->name('users-banned');
	Route::get('/users-profile/{id?}', [App\Http\Controllers\UsersController::class, 'usersProfile'])->name('users-profile');

	Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles');
	Route::get('/roles-add', [App\Http\Controllers\RoleController::class, 'rolesAdd'])->name('roles-add');
	Route::get('/roles-edit/{id?}', [App\Http\Controllers\RoleController::class, 'rolesEdit'])->name('roles-edit');
	Route::post('/roles-save', [App\Http\Controllers\RoleController::class, 'rolesSave'])->name('roles-save');
	Route::post('/roles-update/{id?}', [App\Http\Controllers\RoleController::class, 'rolesUpdate'])->name('roles-update');
	Route::get('/roles-delete/{id?}', [App\Http\Controllers\RoleController::class, 'rolesDelete'])->name('roles-delete');

	Route::get('/slider', [App\Http\Controllers\SliderController::class, 'index'])->name('slider');
	Route::get('/slider-add', [App\Http\Controllers\SliderController::class, 'create'])->name('slider.add');
	Route::post('/slider-store', [App\Http\Controllers\SliderController::class, 'store'])->name('slider.store');
	Route::get('/slider-edit/{id}', [App\Http\Controllers\SliderController::class, 'edit'])->name('slider.edit');
	Route::post('/slider-update/{id}', [App\Http\Controllers\SliderController::class, 'update'])->name('slider.update');
	Route::get('/slider-delete/{id}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('slider.delete');

	Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
	Route::get('/about-add', [App\Http\Controllers\AboutController::class, 'create'])->name('about.add');
	Route::post('/about-store', [App\Http\Controllers\AboutController::class, 'store'])->name('about.store');
	Route::get('/about-edit/{id}', [App\Http\Controllers\AboutController::class, 'edit'])->name('about.edit');
	Route::post('/about-update/{id}', [App\Http\Controllers\AboutController::class, 'update'])->name('about.update');
	Route::get('/about-delete/{id}', [App\Http\Controllers\AboutController::class, 'destroy'])->name('about.delete');

	Route::get('/financial-specialists', [App\Http\Controllers\FinancialSpecialistsController::class, 'index'])->name('financial-specialists');
	Route::get('/financial-specialists-add', [App\Http\Controllers\FinancialSpecialistsController::class, 'create'])->name('financial-specialists.add');
	Route::post('/financial-specialists-store', [App\Http\Controllers\FinancialSpecialistsController::class, 'store'])->name('financial-specialists.store');
	Route::get('/financial-specialists-edit/{id}', [App\Http\Controllers\FinancialSpecialistsController::class, 'edit'])->name('financial-specialists.edit');
	Route::post('/financial-specialists-update/{id}', [App\Http\Controllers\FinancialSpecialistsController::class, 'update'])->name('financial-specialists.update');
	Route::get('/financial-specialists-delete/{id}', [App\Http\Controllers\FinancialSpecialistsController::class, 'destroy'])->name('financial-specialists.delete');


	Route::get('/your-achivements', [App\Http\Controllers\YourachievementsController::class, 'index'])->name('your-achivements');
	Route::get('/your-achivements-add', [App\Http\Controllers\YourachievementsController::class, 'create'])->name('your-achivements.add');
	Route::post('/your-achivements-store', [App\Http\Controllers\YourachievementsController::class, 'store'])->name('your-achivements.store');
	Route::get('/your-achivements-edit/{id}', [App\Http\Controllers\YourachievementsController::class, 'edit'])->name('your-achivements.edit');
	Route::post('/your-achivements-update/{id}', [App\Http\Controllers\YourachievementsController::class, 'update'])->name('your-achivements.update');
	Route::get('/your-achivements-delete/{id}', [App\Http\Controllers\YourachievementsController::class, 'destroy'])->name('your-achivements.delete');

	Route::get('/why-choose-chintamani', [App\Http\Controllers\WhychooseChintamaniController::class, 'index'])->name('why-choose-chintamani');
	Route::get('/why-choose-chintamani-add', [App\Http\Controllers\WhychooseChintamaniController::class, 'create'])->name('why-choose-chintamani.add');
	Route::post('/why-choose-chintamani-store', [App\Http\Controllers\WhychooseChintamaniController::class, 'store'])->name('why-choose-chintamani.store');
	Route::get('/why-choose-chintamani-edit/{id}', [App\Http\Controllers\WhychooseChintamaniController::class, 'edit'])->name('why-choose-chintamani.edit');
	Route::post('/why-choose-chintamani-update/{id}', [App\Http\Controllers\WhychooseChintamaniController::class, 'update'])->name('why-choose-chintamani.update');
	Route::get('/why-choose-chintamani-delete/{id}', [App\Http\Controllers\WhychooseChintamaniController::class, 'destroy'])->name('why-choose-chintamani.delete');

	Route::get('/become-partner', [App\Http\Controllers\BecomePartnerController::class, 'index'])->name('become-partner');
	Route::get('/become-partner-add', [App\Http\Controllers\BecomePartnerController::class, 'create'])->name('become-partner.add');
	Route::post('/become-partner-store', [App\Http\Controllers\BecomePartnerController::class, 'store'])->name('become-partner.store');
	Route::get('/become-partner-edit/{id}', [App\Http\Controllers\BecomePartnerController::class, 'edit'])->name('become-partner.edit');
	Route::post('/become-partner-update/{id}', [App\Http\Controllers\BecomePartnerController::class, 'update'])->name('become-partner.update');
	Route::get('/become-partner-delete/{id}', [App\Http\Controllers\BecomePartnerController::class, 'destroy'])->name('become-partner.delete');

	Route::get('/support-customer', [App\Http\Controllers\SupportCustomerController::class, 'index'])->name('support-customer');
	Route::get('/support-customer-add', [App\Http\Controllers\SupportCustomerController::class, 'create'])->name('support-customer.add');
	Route::post('/support-customer-store', [App\Http\Controllers\SupportCustomerController::class, 'store'])->name('support-customer.store');
	Route::get('/support-customer-edit/{id}', [App\Http\Controllers\SupportCustomerController::class, 'edit'])->name('support-customer.edit');
	Route::post('/support-customer-update/{id}', [App\Http\Controllers\SupportCustomerController::class, 'update'])->name('support-customer.update');
	Route::get('/support-customer-delete/{id}', [App\Http\Controllers\SupportCustomerController::class, 'destroy'])->name('support-customer.delete');

	Route::get('/who-we-are', [App\Http\Controllers\WhoweareController::class, 'index'])->name('who-we-are');
	Route::get('/who-we-are-add', [App\Http\Controllers\WhoweareController::class, 'create'])->name('who-we-are.add');
	Route::post('/who-we-are-store', [App\Http\Controllers\WhoweareController::class, 'store'])->name('who-we-are.store');
	Route::get('/who-we-are-edit/{id}', [App\Http\Controllers\WhoweareController::class, 'edit'])->name('who-we-are.edit');
	Route::post('/who-we-are-update/{id}', [App\Http\Controllers\WhoweareController::class, 'update'])->name('who-we-are.update');
	Route::get('/who-we-are-delete/{id}', [App\Http\Controllers\WhoweareController::class, 'destroy'])->name('who-we-are.delete');

	Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');
	Route::get('/faq-add', [App\Http\Controllers\FaqController::class, 'create'])->name('faq.add');
	Route::post('/faq-store', [App\Http\Controllers\FaqController::class, 'store'])->name('faq.store');
	Route::get('/faq-edit/{id}', [App\Http\Controllers\FaqController::class, 'edit'])->name('faq.edit');
	Route::post('/faq-update/{id}', [App\Http\Controllers\FaqController::class, 'update'])->name('faq.update');
	Route::get('/faq-delete/{id}', [App\Http\Controllers\FaqController::class, 'destroy'])->name('faq.delete');

	Route::get('/get-free-score', [App\Http\Controllers\GetfreescoreController::class, 'index'])->name('get-free-score');
	Route::get('/get-free-score-add', [App\Http\Controllers\GetfreescoreController::class, 'create'])->name('get-free-score.add');
	Route::post('/get-free-score-store', [App\Http\Controllers\GetfreescoreController::class, 'store'])->name('get-free-score.store');
	Route::get('/get-free-score-edit/{id}', [App\Http\Controllers\GetfreescoreController::class, 'edit'])->name('get-free-score.edit');
	Route::post('/get-free-score-update/{id}', [App\Http\Controllers\GetfreescoreController::class, 'update'])->name('get-free-score.update');
	Route::get('/get-free-score-delete/{id}', [App\Http\Controllers\GetfreescoreController::class, 'destroy'])->name('get-free-score.delete');

	Route::get('/why-choose-us', [App\Http\Controllers\WhyChooseuscoreController::class, 'index'])->name('why-choose-us');
	Route::get('/why-choose-us-add', [App\Http\Controllers\WhyChooseuscoreController::class, 'create'])->name('why-choose-us.add');
	Route::post('/why-choose-us-store', [App\Http\Controllers\WhyChooseuscoreController::class, 'store'])->name('why-choose-us.store');
	Route::get('/why-choose-us-edit/{id}', [App\Http\Controllers\WhyChooseuscoreController::class, 'edit'])->name('why-choose-us.edit');
	Route::post('/why-choose-us-update/{id}', [App\Http\Controllers\WhyChooseuscoreController::class, 'update'])->name('why-choose-us.update');
	Route::get('/why-choose-us-delete/{id}', [App\Http\Controllers\WhyChooseuscoreController::class, 'destroy'])->name('why-choose-us.delete');
});
