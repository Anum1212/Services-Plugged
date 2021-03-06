<?php
/*
|--------------------------------------------------------------------------
| customer service login Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling customer Service login
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) __construct
// 02) showLoginForm
// 03) login
// 04) logout






namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\CustomerService;

class customerServiceLoginController extends Controller
{


    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('guest:customerService', ['except' => ['logout']]);
    }



    // |---------------------------------- 02) showLoginForm ----------------------------------|
    //function to show customerService login form
    public function showLoginForm()
    {
        return view('auth.customerServiceLogin');
    }


    // |---------------------------------- 03) login ----------------------------------|
    //function to login customerServices
    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //attempt to login the customerServices in
        if (Auth::guard('customerService')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //if successful redirect to customerService dashboard
            return redirect()->intended(route('customerService.dashboard'));
        }

        //if Wrong credentials or any other problem redirect back to the login form with form data and appropriate error message
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'Wrong credentials');
    }




    // |---------------------------------- 04) logout ----------------------------------|
    // logout customerService
    public function logout()
    {
        Auth::guard('customerService')->logout();

        return redirect('/');
    }
}
