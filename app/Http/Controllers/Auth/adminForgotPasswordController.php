<?php
/*
|--------------------------------------------------------------------------
| Password Reset Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling password reset emails and
| includes a trait which assists in sending these notifications from
| your application to your users. Feel free to explore this trait.
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) __construct
// 02) showLinkRequestForm
// 03) broker






namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Password;

class AdminForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;




    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('guest:admin');
    }



    // |---------------------------------- 02) showLinkRequestForm ----------------------------------|
    public function showLinkRequestForm()
    {
        return view('auth.passwords.admin-email');
    }



    // |---------------------------------- 03) broker ----------------------------------|
    //defining which password broker to use, in our case its the admins
    protected function broker()
    {
        return Password::broker('admins');
    }
}
