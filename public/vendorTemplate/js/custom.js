$(".aboutMeEditField").hide();
$(".AboutMeEditCancelBtn").hide();
$(".aboutMeDetailHide").show();
$("#aboutMeEditBtn").click(function () {
    $(".aboutMeEditField").toggle();
    $(".aboutMeDetailHide").toggle();
    $(".AboutMeEditCancelBtn").toggle();
    $(".aboutMeEditBtn").toggle();
});

$("#aboutMeMoreBtn").click(function () {
    $("#aboutMeLess").hide();
});