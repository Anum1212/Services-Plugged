<?php
/*
|--------------------------------------------------------------------------
| vendor register Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling vendor register
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
use App\Vendor;
use Auth;

class vendorRegisterController extends Controller
{



    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('guest:vendor', ['except' => ['logout']]);
    }



        // |---------------------------------- 02) index ----------------------------------|
    public function index()
    {
        return view('vendor.dashboard');
    }




    // |---------------------------------- 03) create ----------------------------------|
    public function create()
    {
        return view('auth.vendorRegister');
    }




    // |---------------------------------- 04) store ----------------------------------|
    public function store(Request $req)
    {

      // validate the data
        $this->validate($req, [
        'name'          =>      'required|string|max:255',
        'email'         =>      'required|string|email|max:255|unique:vendors',
        'password'      =>      'required|string|min:6|confirmed'

      ]);
            // store in the database
            $vendors = new vendor;
            $vendors->name = $req->name;
            $vendors->email = $req->email;
            $vendors->password=bcrypt($req->password);

            $vendors->save();

            return redirect()->route('vendor.dashboard');
    }



    // |---------------------------------- 05) logout ----------------------------------|
    public function logout()
    {
        Auth::guard('vendor')->logout();

        return redirect('/');
    }
}
