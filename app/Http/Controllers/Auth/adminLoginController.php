<?php
/*
|--------------------------------------------------------------------------
| Admin Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling admin login
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

class AdminLoginController extends Controller
{



    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }




    // |---------------------------------- 02) showLoginForm ----------------------------------|
    //function to show admin login form
    public function showLoginForm()
    {
        return view('auth.adminLogin');
    }



    // |---------------------------------- 03) login ----------------------------------|
    //function to login admins
    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //attempt to login the admins in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //if successful redirect to admin dashboard
            return redirect()->intended(route('admin.dashboard'));
        }
        //if unsuccessfull redirect back to the login for with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }



    // |---------------------------------- 04) logout ----------------------------------|
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
