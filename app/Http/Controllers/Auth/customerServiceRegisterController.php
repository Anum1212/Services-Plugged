<?php
/*
|--------------------------------------------------------------------------
| customer service register Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling customer Service register
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) __construct
// 02) index
// 03) create
// 04) store
// 05) logout






namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\CustomerService;
use Auth;

class customerServiceRegisterController extends Controller
{



        // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('guest:customerService', ['except' => ['logout']]);
    }



    // |---------------------------------- 02) index ----------------------------------|
    public function index()
    {
        return view('customerService.dashboard');
    }




    // |---------------------------------- 03) create ----------------------------------|
    public function create()
    {
        return view('auth.customerServiceRegister');
    }



    // |---------------------------------- 04) store ----------------------------------|
    public function store(Request $req)
    {

      // validate the data
        $this->validate($req, [
        'name'          =>      'required|string|max:255',
        'email'         =>      'required|string|email|max:255|unique:customer_services',
        'password'      =>      'required|string|min:6|confirmed'

      ]);
            // store in the database
            $customerServices = new customerService;
            $customerServices->name = $req->name;
            $customerServices->email = $req->email;
            $customerServices->password=bcrypt($req->password);

            $customerServices->save();

            return redirect()->route('customerService.dashboard');
    }




    // |---------------------------------- 5) logout ----------------------------------|
    public function logout()
    {
        Auth::guard('customerService')->logout();

        return redirect('/');
    }
}
