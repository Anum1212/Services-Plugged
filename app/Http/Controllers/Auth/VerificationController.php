<?php
/*
|--------------------------------------------------------------------------
| Email Verification Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling email verification for any
| user that recently registered with the application. Emails may also
| be re-sent if the user didn't receive the original email message.
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) __construct





namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{

    use VerifiesEmails;

    protected $redirectTo = '/home';



    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
