<?php
/*
|--------------------------------------------------------------------------
| customer Service Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling customer service dashboard actions
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) __construct
// 0) index






namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerServiceController extends Controller
{




    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('auth:customerService');
    }



//  |---------------------------------- 02) index ----------------------------------|
    public function index()
    {
            return view('customerService.dashboard');
        }
}
