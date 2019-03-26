<?php
/*
|--------------------------------------------------------------------------
| admin Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling admin dashboard actions
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

class adminController extends Controller
{



    // |---------------------------------- 1) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



//  |---------------------------------- 01) index ----------------------------------|
    public function index()
    {
            return view('admin.dashboard');
        }
}
