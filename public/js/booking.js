/* ---------------------------------------
     Ajax Code for Contact Form
     --------------------------------------- */
    jQuery('.booking_wrap').on('click', '.contact_now', function (e) {
        e.preventDefault();
        var $this = jQuery(this);

        var serialize_data = $this.parents('.booking_wrap').find('.booking_form').serialize();
        var dataString = serialize_data;

        $this.parents('.booking_wrap').find('.message_contact').html('').hide();
        jQuery($this).parents('fieldset').append("<i class='fa fa-refresh fa-spin'></i>");
        $this.parents('.booking_wrap').find('.message_contact').removeClass('alert-success');
        $this.parents('.booking_wrap').find('.message_contact').removeClass('alert-danger');

        var path = document.location
        var loc = window.location;
        var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/'));
        var dir = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));

        jQuery.ajax({
            type: "POST",
            url: dir + '/php/booking.php',
            data: dataString,
            dataType: "json",
            success: function (response) {
                jQuery($this).parents('fieldset').find('i').remove();
                jQuery('.message_contact').show();
                if (response.type == 'error') {
                    $this.parents('.booking_wrap').find('.message_contact').addClass('alert alert-danger').show();
                    $this.parents('.booking_wrap').find('.message_contact').html(response.message);
                } else {
                    $this.parents('.booking_wrap').find('.booking_form').get(0).reset();
                    $this.parents('.booking_wrap').find('.message_contact').addClass('alert alert-success').show();
                    $this.parents('.booking_wrap').find('.message_contact').html(response.message);
                }
            }
        });

        return false;

    });