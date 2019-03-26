<!-- ------------------------ signInUp Light Box Start ------------------------ -->
<div class="modal fade tg-signInUp" tabindex="-1" role="dialog">
    <div class="tg-lightbox">
        <div class="tg-lightbox-content booking_wrap signInUp allModals">
            <h2>Make an appointment</h2>
            <div class="row">

                <div class="col-md-6 text-center" id="customerSignInSection">
                    <div class="formgroup">
                        <h4> I Need Professional Services </h4>
                        <p> Get the best rates on all of our services today.</p>
                        <a class="tg-btn contact_now customerSignIn">Get Started</a>
                    </div>
                </div>

                <div class="col-md-6 text-center" id="vendorSignInSection">
                    <div class="formgroup">
                        <h4> I Want More Customers </h4>
                        <p> Speak directly with customers looking for service in your area.</p>
                        <a class="tg-btn contact_now vendorSignIn">Get Started</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- -------------------- Customer sign In --------------------- -->
        <div class="tg-lightbox-content booking_wrap customerSignInModal allModals">
            <h2><a class="tg-btn contact_now back"> <i class="fa fa-arrow-left"></i> </a> Get Started Customer</h2>
            <div class="col-md-5 col-sm-6 col-xs-12" id="signInFormDiv">
                <form class="">
                    <input type="email" name="useremail" class="form-control" placeholder="Email">
                    <input type="password" name="userpassword" class="form-control" placeholder="Password">
                    <div class="formgroup">
                        <button class="tg-btn contact_now" type="submit">Sign In</button>
                    </div>
                </form>
            </div>

            <div class="col-md-2 hidden-sm hidden-xs" id="signInUpOrImgDiv">
                <img src="{{ asset('images/orImg.png') }}" alt="">
            </div>

            <div class="col-md-5 col-sm-6 col-xs-12" id="signInUpWithSocialAccountDiv">
                <a class="btn btn-block btn-social btn-twitter">
            <span class="fa fa-twitter"></span> Sign in with Twitter
          </a>
                <a class="btn btn-block btn-social btn-facebook">
            <span class="fa fa-facebook"></span> Sign in with Facebook
          </a>
                <br>
                <p>Need an account? <a class="customerSignUp">Sign Up</a></p>
            </div>
        </div>

        <!-- -------------------- Customer sign Up --------------------- -->
        <div class="tg-lightbox-content booking_wrap customerSignUpModal allModals">
            <h2> <a class="tg-btn contact_now back"><i class="fa fa-arrow-left"></i></a>Sign Up Customer</h2>
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12" id="signUpFormDiv">
                    <form>
                        <input type="text" name="username" class="form-control" placeholder="Name">
                        <input type="email" name="useremail" class="form-control" placeholder="Email">
                        <input type="text" name="userAddress" class="form-control" placeholder="Address">
                        <input type="tel" class="form-control" placeholder="Contact" name="usernumber">
                        <div class="formgroup">
                            <button class="tg-btn contact_now" type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-2 hidden-sm hidden-xs" id="signInUpOrImgDiv">
                    <img src="{{ asset('images/orImg.png') }}" alt="">
                </div>

                <div class="col-md-5 col-sm-6 col-xs-12" id="signInUpWithSocialAccountDiv">
                    <a class="btn btn-block btn-social btn-twitter">
              <span class="fa fa-twitter"></span> Sign up with Twitter
            </a>
                    <a class="btn btn-block btn-social btn-facebook">
              <span class="fa fa-facebook"></span> Sign up with Facebook
            </a>
                    <br>
                    <p>Already Have an account? <a class="customerSignIn">Sign In</a></p>
                </div>

            </div>
        </div>


        <!-- -------------------- Vendor sign In --------------------- -->
        <div class="tg-lightbox-content booking_wrap vendorSignInModal allModals">
            <h2><a class="tg-btn contact_now back"> <i class="fa fa-arrow-left"></i> </a> Get Started Vendor</h2>
            <div class="col-md-5 col-sm-6 col-xs-12" id="signInFormDiv">
                <form class="">
                    <input type="email" name="useremail" class="form-control" placeholder="Email">
                    <input type="password" name="userpassword" class="form-control" placeholder="Password">
                    <div class="formgroup">
                        <button class="tg-btn contact_now" type="submit">Sign In</button>
                    </div>
                </form>
            </div>

            <div class="col-md-2 hidden-sm hidden-xs" id="signInUpOrImgDiv">
                <img src="{{ asset('images/orImg.png') }}" alt="">
            </div>

            <div class="col-md-5 col-sm-6 col-xs-12" id="signInUpWithSocialAccountDiv">
                <a class="btn btn-block btn-social btn-twitter">
            <span class="fa fa-twitter"></span> Sign in with Twitter
          </a>
                <a class="btn btn-block btn-social btn-facebook">
            <span class="fa fa-facebook"></span> Sign in with Facebook
          </a>
                <br>
                <p>Need an account? <a class="vendorSignUp">Sign Up</a></p>
            </div>
        </div>

        <!-- -------------------- Vendor sign Up --------------------- -->
        <div class="tg-lightbox-content booking_wrap vendorSignUpModal allModals">
            <h2> <a class="tg-btn contact_now back"><i class="fa fa-arrow-left"></i></a>Sign Up Vendor</h2>
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12" id="signUpFormDiv">
                    <form>
                        <input type="text" name="username" class="form-control" placeholder="Name">
                        <input type="email" name="useremail" class="form-control" placeholder="Email">
                        <input type="text" name="userAddress" class="form-control" placeholder="Address">
                        <input type="tel" class="form-control" placeholder="Contact" name="usernumber">
                        <div class="formgroup">
                            <button class="tg-btn contact_now" type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-2 hidden-sm hidden-xs" id="signInUpOrImgDiv">
                    <img src="{{ asset('images/orImg.png') }}" alt="">
                </div>

                <div class="col-md-5 col-sm-6 col-xs-12" id="signInUpWithSocialAccountDiv">
                    <a class="btn btn-block btn-social btn-twitter">
              <span class="fa fa-twitter"></span> Sign up with Twitter
            </a>
                    <a class="btn btn-block btn-social btn-facebook">
              <span class="fa fa-facebook"></span> Sign up with Facebook
            </a>
                    <br>
                    <p>Already Have an account? <a class="vendorSignIn">Sign In</a></p>
                </div>

            </div>
        </div>

        <div class="row text-center lightBoxFooter">
            <div class="col-sm-4 col-xs-12"><img class="facebook" src="icons/1-01.png" /> Need Help
            </div>
            <div class="col-sm-4 col-xs-12"> <img class="facebook" src="icons/1-07.png" /> Call toll free (866) 888 - 6244 </div>
            <div class="col-sm-4 col-xs-12"><img class="facebook" src="icons/1-06.png" /> Get help via Live Help</div>
        </div>
    </div>
</div>
<!-- ------------------------ signInUp Light Box end ------------------------ -->