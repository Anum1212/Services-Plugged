// initial vendor template setup
// about me
$(".aboutMeEditField").hide();
$(".aboutMeEditCancelBtn").hide();
$(".aboutMeDetailHide").show();

// vendor education
$(".educationEditField").hide();
$(".educationEditCancelBtn").hide();
$(".educationDetailHide").show();

// vendor skills and Language
$(".skillsEditField").hide();
$(".skillsEditCancelBtn").hide();
$(".skillsDetailHide").show();


/* ------------------- about me  ------------------- */
// when about me edit button is pressed
$("#aboutMeEditBtn").click(function () {
    $(".aboutMeEditField").toggle();
    $(".aboutMeDetailHide").toggle();
    $(".aboutMeEditCancelBtn").toggle();
    $(".aboutMeEditBtn").toggle();
});

// when about me read more button is pressed
$("#aboutMeMoreBtn").click(function () {
    $("#aboutMeLess").hide();
});

/* ------------------- education  ------------------- */
// when education edit button is pressed
$("#educationEditBtn").click(function () {
    $(".educationEditField").toggle();
    $(".educationDetailHide").toggle();
    $(".educationEditCancelBtn").toggle();
    $(".educationEditBtn").toggle();
});

// when add education field btn is pressed
(function () {
    $(document).on('click', '.addEducationFieldBtn', function (e) {
        var clone, vendorEducationList;
        e.preventDefault();
        vendorEducationList = $('#vendorEducation');
        clone = vendorEducationList.children('.form-group:first').clone(true);
        clone.append($('<button>').addClass('btn btn-danger js-remove--exam-row').html('Remove'));
        clone.find('input').val('').attr('id', function () {
            return $(this).attr('id') + '_' + (vendorEducationList.children('.form-group').length + 1);
        });
        return vendorEducationList.append(clone);
    });

    $(document).on('click', '.js-remove--exam-row', function (e) {
        e.preventDefault();
        return $(this).parent().remove();
    });

}).call(this);

/* ------------------- skills and language  ------------------- */
/* ------------------- skills  ------------------- */
// when skills edit button is pressed
$("#skillsEditBtn").click(function () {
  $(".skillsEditField").toggle();
  $(".skillsDetailHide").toggle();
  $(".skillsEditCancelBtn").toggle();
  $(".skillsEditBtn").toggle();
});

// when add skill field btn is pressed
(function () {
  $(document).on('click', '.addSkillsFieldBtn', function (e) {
    var clone, vendorSkillsList;
    e.preventDefault();
    vendorSkillsList = $('#vendorSkills');
    clone = vendorSkillsList.children('.form-group:first').clone(true);
    clone.append($('<button>').addClass('btn btn-danger js-remove--exam-row').html('Remove'));
    clone.find('input').val('').attr('id', function () {
      return $(this).attr('id') + '_' + (vendorSkillsList.children('.form-group').length + 1);
    });
    return vendorSkillsList.append(clone);
  });

  $(document).on('click', '.js-remove--exam-row', function (e) {
    e.preventDefault();
    return $(this).parent().remove();
  });

}).call(this);

/* ------------------- language  ------------------- */
// when add Language field btn is pressed
(function () {
  $(document).on('click', '.addLanguageFieldBtn', function (e) {
    var clone, vendorLanguageList;
    e.preventDefault();
    vendorLanguageList = $('#vendorLanguage');
    clone = vendorLanguageList.children('.form-group:first').clone(true);
    clone.append($('<button>').addClass('btn btn-danger js-remove--exam-row').html('Remove'));
    clone.find('input').val('').attr('id', function () {
      return $(this).attr('id') + '_' + (vendorLanguageList.children('.form-group').length + 1);
    });
    return vendorLanguageList.append(clone);
  });

  $(document).on('click', '.js-remove--exam-row', function (e) {
    e.preventDefault();
    return $(this).parent().remove();
  });

}).call(this);
