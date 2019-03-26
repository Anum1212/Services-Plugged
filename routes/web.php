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
// index
Route::get('/', 'siteController@index')->name('homePage');

// categories
Route::get('/categories', 'siteController@categories')->name('categories');

// blog
Route::get('/blog', 'siteController@blog')->name('blog');

// about Us
Route::get('/why-us', 'siteController@aboutUs')->name('why-us');

// Service:: advertisement
Route::get('services/advertisement', 'siteController@service_Advertisement')->name('services.advertisement');

// Service:: allServices
Route::get('services/allServices', 'siteController@service_AllServices')->name('services.allServices');

// Service:: beautyAndFitness
Route::get('services/beautyAndFitness', 'siteController@service_BeautyAndFitness')->name('services.beautyAndFitness');

// Service:: business
Route::get('services/business', 'siteController@service_Business')->name('services.business');

// Service:: coaching
Route::get('services/coaching', 'siteController@service_Coaching')->name('services.coaching');

// Service:: crafts
Route::get('services/crafts', 'siteController@service_Crafts')->name('services.crafts');

// Service:: electrical
Route::get('services/electrical', 'siteController@service_Electrical')->name('services.electrical');

// Service:: events
Route::get('services/events', 'siteController@service_Events')->name('services.events');

// Service:: home
Route::get('services/home', 'siteController@service_Home')->name('services.home');

// Service:: itServices
Route::get('services/itServices', 'siteController@service_ItServices')->name('services.itServices');

// Service:: laptopAndMobile
Route::get('services/laptopAndMobile', 'siteController@service_LaptopAndMobile')->name('services.laptopAndMobile');

// Service:: mechanical
Route::get('services/mechanical', 'siteController@service_Mechanical')->name('services.mechanical');

// Service:: travel
Route::get('services/travel', 'siteController@service_Travel')->name('services.travel');

// Service:: vehicleMaintenance
Route::get('services/vehicleMaintenance', 'siteController@service_VehicleMaintenance')->name('services.vehicleMaintenance');


// |---------------------------------- customer Routes ----------------------------------|
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// |---------------------------------- Admin Routes ----------------------------------|
Route::prefix('admin')->group(function () {
        //dashboard --> goto admin dashboard
    Route::get('/', 'adminController@index')->name('admin.dashboard');
        //login --> admin login
    Route::get('/login', 'Auth\adminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\adminLoginController@login')->name('admin.login.submit');
        //register --> admin register
    Route::get('/register', 'Auth\adminRegisterController@create')->name('admin.register');
    Route::post('/register', 'Auth\adminRegisterController@store')->name('admin.register.store');
        // resendVerificationEmail
    Route::get('/resendVerificationEmail/{id}', 'adminController@resendVerificationEmail');
        //logout --> admin logout
    Route::post('/logout', 'Auth\adminLoginController@logout')->name('admin.logout');
        //password reset  --> admin password reset
    Route::post('/password/email', 'Auth\adminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\adminForgotPasswordController@showLinkRequestForm')->name('admin.password.update');
    Route::post('/password/reset', 'Auth\adminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\adminResetPasswordController@showResetForm')->name('admin.password.reset');
});



// |---------------------------------- Vendor Routes ----------------------------------|
Route::prefix('vendor')->group(function () {
        //dashboard --> goto vendor dashboard
    Route::get('/', 'vendorController@index')->name('vendor.dashboard');
    //login --> vendor login
    Route::get('/login', 'Auth\vendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Auth\vendorLoginController@login')->name('vendor.login.submit');
    //register --> vendor register
    Route::get('/register', 'Auth\vendorRegisterController@create')->name('vendor.register');
    Route::post('/register', 'Auth\vendorRegisterController@store')->name('vendor.register.store');
    // resendVerificationEmail
    Route::get('/resendVerificationEmail/{id}', 'vendorController@resendVerificationEmail');
    //logout --> vendor logout
    Route::post('/logout', 'Auth\vendorLoginController@logout')->name('vendor.logout');
    //password reset  --> vendor password reset
    Route::post('/password/email', 'Auth\vendorForgotPasswordController@sendResetLinkEmail')->name('vendor.password.email');
    Route::get('/password/reset', 'Auth\vendorForgotPasswordController@showLinkRequestForm')->name('vendor.password.update');
    Route::post('/password/reset', 'Auth\vendorResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\vendorResetPasswordController@showResetForm')->name('vendor.password.reset');
    //save Vendor About Me Details  --> saves Vendor About Me Details
    Route::post('/saveAboutMeDetails/{vendorId}', 'vendorController@saveAboutMeDetails')->name('vendor.saveAboutMeDetails');
    //save Vendor Education Details  --> saves Vendor Education Details
    Route::post('/saveEducationDetails/{vendorId}', 'vendorController@saveVendorEducationDetails')->name('vendor.saveEducationDetails');
    //save Vendor Skills Language Details  --> saves Vendor Education Details
    Route::post('/saveSkillsLanguageDetails/{vendorId}', 'vendorController@saveSkillsLanguageDetails')->name('vendor.saveSkillsLanguageDetails');
    //portfolio Managment Page  --> goto portfolio Managment page
    Route::get('/portfolioManagmentPage/{vendorId}', 'vendorController@portfolioManagmentPage')->name('vendor.portfolioManagmentPage');
    //portfolio Add Page  --> goto portfolio add page
    Route::get('/portfolioAddPage', 'vendorController@portfolioAddPage')->name('vendor.portfolioAddPage');
    //portfolio Add  --> saves new portfolio
    Route::post('/portfolioAdd/{vendorId}', 'vendorController@portfolioAdd')->name('vendor.portfolioAdd');
    //portfolio Edit Page  --> go to portfolio edit page
    Route::get('/portfolioEditPage/{portfolioId}', 'vendorController@portfolioEditPage')->name('vendor.portfolioEditPage');
    //portfolio Edit  --> update portfolio changes
    Route::post('/portfolioEdit/{portfolioId}', 'vendorController@portfolioEdit')->name('vendor.portfolioEdit');
    //portfolio Delete  --> delete portfolio
    Route::get('/portfolioDelete/{portfolioId}', 'vendorController@portfolioDelete')->name('vendor.portfolioDelete');
});



// |---------------------------------- Customer Service Routes ----------------------------------|
Route::prefix('customerService')->group(function () {
        //dashboard --> goto customerService dashboard
    Route::get('/', 'customerServiceController@index')->name('customerService.dashboard');
        //login --> customerService login
    Route::get('/login', 'Auth\customerServiceLoginController@showLoginForm')->name('customerService.login');
    Route::post('/login', 'Auth\customerServiceLoginController@login')->name('customerService.login.submit');
        //register --> customerService register
    Route::get('/register', 'Auth\customerServiceRegisterController@create')->name('customerService.register');
    Route::post('/register', 'Auth\customerServiceRegisterController@store')->name('customerService.register.store');
        // resendVerificationEmail
    Route::get('/resendVerificationEmail/{id}', 'customerServiceController@resendVerificationEmail');
        //logout --> customerService logout
    Route::post('/logout', 'Auth\customerServiceLoginController@logout')->name('customerService.logout');
        //password reset  --> customerService password reset
    Route::post('/password/email', 'Auth\customerServiceForgotPasswordController@sendResetLinkEmail')->name('customerService.password.email');
    Route::get('/password/reset', 'Auth\customerServiceForgotPasswordController@showLinkRequestForm')->name('customerService.password.update');
    Route::post('/password/reset', 'Auth\customerServiceResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\customerServiceResetPasswordController@showResetForm')->name('customerService.password.reset');
});
