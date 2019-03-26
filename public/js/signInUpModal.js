$(".allModals").hide();
$(".signInUp").show();


// ------------------ Customer ------------------
// show sign up div
$(".customerSignIn").click(function () {
    $(".allModals").hide();
    $(".customerSignInModal").show();
});

// show sign up div using button in form
$(".customerSignUp").click(function () {
    $(".allModals").hide();
    $(".customerSignUpModal").show();
});



// ------------------ Vendor ------------------
// show sign up div
$(".vendorSignIn").click(function () {
    $(".allModals").hide();
    $(".vendorSignInModal").show();
});

// show sign up div using button in form
$(".vendorSignUp").click(function () {
    $(".allModals").hide();
    $(".vendorSignUpModal").show();
});


// show signInUp div
$(".back").click(function () {
    $(".allModals").hide();
    $(".signInUp").show();
});