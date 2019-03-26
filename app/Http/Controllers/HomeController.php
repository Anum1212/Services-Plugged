<?php
/*
|--------------------------------------------------------------------------
| home(customer) Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling customer dashboard actions
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) __construct
// 02) index






namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{



    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('auth');
    }



    // |---------------------------------- 02) index ----------------------------------|
    public function index()
    {
        return view('customer.dashboard');
    }
}
