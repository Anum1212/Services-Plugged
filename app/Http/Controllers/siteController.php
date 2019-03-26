<?php
/*
|--------------------------------------------------------------------------
| site Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling main site actions like navigation etc
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) index
// 02) categories
// 03) blog
// 04) about Us
// 05) Service:: advertisement
// 06) Service:: allServices
// 07) Service:: beautyAndFitness
// 08) Service:: business
// 09) Service:: coaching
// 10) Service:: crafts
// 11) Service:: electrical
// 12) Service:: events
// 13) Service:: home
// 14) Service:: itServices
// 15) Service:: laptopAndMobile
// 16) Service:: mechanical
// 17) Service:: travel
// 18) Service:: vehicleMaintenance






namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{




    // |---------------------------------- 01) index ----------------------------------|
    public function index()
    {
            return view('site.home');
        }




    // |---------------------------------- 02) categories ----------------------------------|
    public function categories()
    {
            return view('site.categories');
        }




    // |---------------------------------- 03) blog ----------------------------------|
    public function blog()
    {
            return view('site.blog');
        }




    // |---------------------------------- 04) about Us ----------------------------------|
    public function aboutUs()
    {
            return view('site.aboutUs');
        }




    // |---------------------------------- 05) Service:: advertisement ----------------------------------|
    public function service_Advertisement()
    {
            return view('site.services.advertisement');
        }




    // |---------------------------------- 06) Service:: allServices ----------------------------------|
    public function service_AllServices()
    {
            return view('site.services.allServices');
        }




    // |---------------------------------- 07) Service:: beautyAndFitness ----------------------------------|
    public function service_BeautyAndFitness()
    {
            return view('site.services.beautyAndFitness');
        }




    // |---------------------------------- 08) Service:: business ----------------------------------|
    public function service_Business()
    {
            return view('site.services.business');
        }




    // |---------------------------------- 09) Service:: coaching ----------------------------------|
    public function service_Coaching()
    {
            return view('site.services.coaching');
        }




    // |---------------------------------- 10) Service:: crafts ----------------------------------|
    public function service_Crafts()
    {
            return view('site.services.crafts');
        }




    // |---------------------------------- 11) Service:: electrical ----------------------------------|
    public function service_Electrical()
    {
            return view('site.services.electrical');
        }




    // |---------------------------------- 12) Service:: events ----------------------------------|
    public function service_Events()
    {
            return view('site.services.events');
        }




    // |---------------------------------- 13) Service:: home ----------------------------------|
    public function service_Home()
    {
            return view('site.services.home');
        }




    // |---------------------------------- 14) Service:: itServices ----------------------------------|
    public function service_ItServices()
    {
            return view('site.services.itServices');
        }




    // |---------------------------------- 15) Service:: laptopAndMobile ----------------------------------|
    public function service_LaptopAndMobile()
    {
            return view('site.services.laptopAndMobile');
        }




    // |---------------------------------- 16) Service:: mechanical ----------------------------------|
    public function service_Mechanical()
    {
            return view('site.services.mechanical');
        }




    // |---------------------------------- 17) Service:: travel ----------------------------------|
    public function service_Travel()
    {
            return view('site.services.travel');
        }




    // |---------------------------------- 18) Service:: vehicleMaintenance ----------------------------------|
    public function service_VehicleMaintenance()
    {
            return view('site.services.vehicleMaintenance');
        }
}
