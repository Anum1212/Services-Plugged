<?php
/*
|--------------------------------------------------------------------------
| Password Reset Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling password reset requests
| and uses a simple trait to include this behavior. You're free to
| explore this trait and override any methods you wish to tweak.
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) __construct
// 02) showResetForm
// 03) guard
// 04) broker






namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Password;
use Auth;

class AdminResetPasswordController extends Controller
{

    use ResetsPasswords;

    protected $redirectTo = '/admin';



    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('guest:admin');
    }



    // |---------------------------------- 02) showResetForm ----------------------------------|
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.admin-reset')
            ->with(
                ['token' => $token, 'email' => $request->email]
            );
    }




    // |---------------------------------- 03) guard ----------------------------------|
    //defining which guard to use in our case, it's the admin guard
    protected function guard()
    {
        return Auth::guard('admin');
    }



    // |---------------------------------- 04) broker ----------------------------------|
    //defining our password broker function
    protected function broker()
    {
        return Password::broker('admins');
    }
}
