"use strict";
/* -------------------------------------
 Google Analytics
 change UA-XXXXX-X to be your site's ID.
 -------------------------------------- */
(function (b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
    b[l].l = +new Date;
    e = o.createElement(i);
    r = o.getElementsByTagName(i)[0];
    e.src = '//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e, r)
}(window, document, 'script', 'ga'));
ga('create', 'UA-XXXXX-X', 'auto');
ga('send', 'pageview');
/* -------------------------------------
 CUSTOM FUNCTION WRITE HERE
 -------------------------------------- */
$(document).ready(function (e) {
    /* -------------------------------------
     HOME SLIDER
     -------------------------------------- */
    $("#home-slider").owlCarousel({
        autoPlay: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigation: false,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    /* -------------------------------------
     HOME3 SLIDER
     -------------------------------------- */
    var swiper = new Swiper('#tg-swiper-slider', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30
    });
    /* -------------------------------------
     SKILLS PROGRESS BAR
     -------------------------------------- */
    try {
        $('#tg-skills').appear(function () {
            jQuery('.tg-skill-holder').each(function () {
                jQuery(this).find('.tg-skill-bar').animate({
                    width: jQuery(this).attr('data-percent')
                }, 2500);
            });
        });
    } catch (err) {
    }
    /* -------------------------------------
     SERVICES SKILLS
     -------------------------------------- */
    try {
        $('#tg-services-skills, #tg-services-skills1, #tg-services-skills3 ,#tg-services-skills4, #tg-services-skills5, #tg-services-skills6, #tg-services-skills7, #tg-services-skills8, #tg-services-skills9, #tg-services-skills10, #tg-services-skills11, #tg-services-skills12').appear(function () {
            jQuery('.tg-skill-holder').each(function () {
                jQuery(this).find('.tg-skill-bar').animate({
                    width: jQuery(this).attr('data-percent')
                }, 2500);
            });
        });
    } catch (err) {
    }
    /* -------------------------------------
     HOME SLIDER
     -------------------------------------- */
    $("#tg-team-slider").owlCarousel({
        autoPlay: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigation: false,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    /* -------------------------------------
     SERVICES SLIDER
     -------------------------------------- */
    $("#tg-services-slider").owlCarousel({
        items: 4,
        autoPlay: false,
        slideSpeed: 300,
        pagination: false,
        paginationSpeed: 400,
        navigation: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsTablet: [767, 2],
        itemsMobile: [568, 1]
    });
    /* -------------------------------------
     TESTIMONIALS SLIDER
     -------------------------------------- */
    (function () {
        var sync1 = $("#tg-message-slider");
        var sync2 = $("#tg-author-slider");
        sync1.owlCarousel({
            autoPlay: true,
            singleItem: true,
            slideSpeed: 1000,
            navigation: false,
            pagination: false,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
        });
        sync2.owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [991, 2],
            itemsTablet: [767, 3],
            itemsMobile: [479, 1],
            pagination: false,
            responsiveRefreshRate: 100,
            afterInit: function (el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });
        function syncPosition(el) {
            var current = this.currentItem;
            $("#tg-author-slider")
                    .find(".owl-item")
                    .removeClass("synced")
                    .eq(current)
                    .addClass("synced")
            if ($("#tg-author-slider").data("owlCarousel") !== undefined) {
                center(current)
            }
        }
        $("#tg-author-slider").on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });
        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for (var i in sync2visible) {
                if (num === sync2visible[i]) {
                    var found = true;
                }
            }
            if (found === false) {
                if (num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if (num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if (num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if (num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }
    }(jQuery));
    /* -------------------------------------
     BLOG DETAIL SLIDER
     -------------------------------------- */
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        breakpoints: {
            767: {
                slidesPerView: 1
            }
        }
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        direction: 'vertical',
        touchRatio: 0.2,
        slideToClickedSlide: true,
        slidesPerView: 3
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
    $(window).load(function () {
        $('.tg-portfolio-content').isotope({
            itemSelector: '.masonry-grid'
        });
    });
    /* ---------------------------------------
     PORTFOLIO FILTERABLE
     -------------------------------------- */
    var $container = $('.tg-portfolio-content');
    var $optionSets = $('.option-set');
    var $optionLinks = $optionSets.find('a');
    function doIsotopeFilter() {
        if ($().isotope) {
            var isotopeFilter = '';
            $optionLinks.each(function () {
                var selector = $(this).attr('data-filter');
                var link = window.location.href;
                var firstIndex = link.indexOf('filter=');
                if (firstIndex > 0) {
                    var id = link.substring(firstIndex + 7, link.length);
                    if ('.' + id == selector) {
                        isotopeFilter = '.' + id;
                    }
                }
            });
            $container.isotope({
                filter: isotopeFilter
            });
            $optionLinks.each(function () {
                var $this = $(this);
                var selector = $this.attr('data-filter');
                if (selector == isotopeFilter) {
                    if (!$this.hasClass('active')) {
                        var $optionSet = $this.parents('.option-set');
                        $optionSet.find('.active').removeClass('active');
                        $this.addClass('active');
                    }
                }
            });
            $optionLinks.on('click', function () {
                var $this = $(this);
                var selector = $this.attr('data-filter');
                $container.isotope({itemSelector: '.masonry-grid', filter: selector});
                if (!$this.hasClass('active')) {
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.active').removeClass('active');
                    $this.addClass('active');
                }
                return false;
            });
        }
    }
    var isotopeTimer = window.setTimeout(function () {
        window.clearTimeout(isotopeTimer);
        doIsotopeFilter();
    }, 1000);
    /* -------------------------------------
     PRETTY PHOTO GALLERY
     -------------------------------------- */
    $("a[data-rel]").each(function () {
        $(this).attr("rel", $(this).data("rel"));
    });
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'dark_square',
        slideshow: 3000,
        autoplay_slideshow: false,
        social_tools: false
    });
    /* -------------------------------------
     HIDE NAVIGATION
     -------------------------------------- */
    function hideNav() {
        $('#tg-navigation').on('click', function () {
            $('#tg-navigation').removeClass('in');
        });
    }
    hideNav();
    /* -------------------------------------
     COUNTER
     -------------------------------------- */
    try {
        $('.tg-counters').appear(function () {
            $('.tg-timer').countTo()
        });
    } catch (err) {
    }
    /* -------------------------------------
     THEME ACCORDION
     -------------------------------------- */
    $('#accordion .panel-heading, #accordion .tg-panel-heading').on('click', function () {
        $('.panel-heading, .tg-panel-heading').removeClass('active');
        $(this).parents('.panel-heading, .tg-panel-heading').addClass('active');
        $('.panel').removeClass('active');
        $(this).parent().addClass('active');
    });
    /* -------------------------------------
     Google Map
     -------------------------------------- */
    $("#tg-map").gmap3({
        marker: {
            address: "1600 Elizabeth St, Melbourne, Victoria, Australia",
            options: {
                title: "Robert Frost Elementary School"
            }
        },
        map: {
            options: {
                zoom: 16,
                scrollwheel: false,
                disableDoubleClickZoom: true,
            }
        }
    });
    
    /* ---------------------------------------
     Ajax Code for Contact Form
     --------------------------------------- */
    jQuery('.contact_wrap').on('click', '.contact_now', function (e) {
        e.preventDefault();
        var $this = jQuery(this);

        var serialize_data = $this.parents('.contact_wrap').find('.contact_form').serialize();
        var dataString = serialize_data;

        $this.parents('.contact_wrap').find('.message_contact').html('').hide();
        jQuery($this).parents('fieldset').append("<i class='fa fa-refresh fa-spin'></i>");
        $this.parents('.contact_wrap').find('.message_contact').removeClass('alert-success');
        $this.parents('.contact_wrap').find('.message_contact').removeClass('alert-danger');

        var path = document.location
        var loc = window.location;
        var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/'));
        var dir = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));

        jQuery.ajax({
            type: "POST",
            url: dir + '/php/mailer.php',
            data: dataString,
            dataType: "json",
            success: function (response) {
                jQuery($this).parents('fieldset').find('i').remove();
                jQuery('.message_contact').show();
                if (response.type == 'error') {
                    $this.parents('.contact_wrap').find('.message_contact').addClass('alert alert-danger').show();
                    $this.parents('.contact_wrap').find('.message_contact').html(response.message);
                } else {
                    $this.parents('.contact_wrap').find('.contact_form').get(0).reset();
                    $this.parents('.contact_wrap').find('.message_contact').addClass('alert alert-success').show();
                    $this.parents('.contact_wrap').find('.message_contact').html(response.message);
                }
            }
        });

        return false;

    });

});