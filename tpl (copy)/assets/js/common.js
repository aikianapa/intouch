//@prepros-prepend vendor/jquery-3.2.1.min.js
//@prepros-prepend vendor/bootstrap.bundle.min.js
//@prepros-prepend vendor/moment.min.js
//@prepros-prepend vendor/bootstrap-datetimepicker/js/tempusdominus-bootstrap-4.min.js



$(function() {

    /* ======================================================================
       "Scroll top" buttom
       ====================================================================== */

    (function(){
        var offset = 220;
        var duration = 400;

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > offset) {
                $('.back-to-top').fadeIn(duration);
            } else {
                $('.back-to-top').fadeOut(duration);
            }
        });

        $('.back-to-top').on('click', function(event) {
            $('html, body').animate({scrollTop: 0}, duration);
            event.preventDefault();
        })
    })();



    /* ======================================================================
       "Scroll to" links
       ====================================================================== */

    $('.scroll-to').click(function(event) {
        var $target = $($(this).attr('href')),
            offset = $target.data('scroll-offset') || 0;

        $('html, body').animate({
            scrollTop: $target.offset().top - offset
        }, 500);

        // Closing menu if it is open
        if ($('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler').click();
        }

        event.preventDefault();
    });



    /* ======================================================================
       Navbar background fading
       ====================================================================== */

    $(window).on('scroll', function() {
        var $navbar_background = $('.navbar-background');

        if ($(this).scrollTop() > 50) {
            $navbar_background.addClass('bg-white');
        } else {
            $navbar_background.removeClass('bg-white');
        }
    });



    /* ======================================================================
       Open navbar background
       ====================================================================== */

    $('.navbar-toggler').on('click', function(){
        $('.navbar').toggleClass('navbar-open');
    });



    /* ======================================================================
       Collapse Next
       ====================================================================== */

    $(document).on('hidden.bs.collapse shown.bs.collapse', '.collapse-next .collapse', function (event) {
        $(this).parents('.collapse-next').toggleClass('show');
    })

    $(document).on('click', '[data-toggle=collapse-next]', function (event) {
        var $parent = $(this).parents('.collapse-next');
        $parent.find('.collapse').collapse('toggle');
        return false;
    });



    /* ======================================================================
       SVG replacement
       ====================================================================== */

    $('img.svg-replace').each(function(){
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');

            // Add replaced image ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass);
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);
        }, 'xml');
    });



    /* ======================================================================
       FAQ custom tabs
       ====================================================================== */


    $('.faq-category').on('click', function() {
        var $tab = $($(this).attr('href'));

        if ($tab) {
            $tab.parents('.tab-content').find('.tab-pane').removeClass('show active');
            $tab.addClass('show active');

            $(this).parents('.faq-categories').find('.faq-category').removeClass('active');
            $(this).addClass('active');
        }
    });



    /* ======================================================================
       Preloaders
       ====================================================================== */

    $('.preloader').each(function(){
        bodymovin.loadAnimation({
            container: this,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'assets/animations/preloader.json'
        });
    });

    $('.preloader-logo').each(function(){
        bodymovin.loadAnimation({
            container: this,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'assets/animations/logo.json'
        });
    });



    /* ======================================================================
       Ajax form
       ====================================================================== */

    $('.ajax-form').on('submit', function(event) { // bind function to submit event of form
        var $form = $(this),
            $result_message = $form.find('.result-message');
        var $subject = "Письмо с сайта";
        $result_message.html('');
        $form.addClass('was-validated');

        if (!$form[0].checkValidity()) {
            return false;
        }
        
        if (!$form.attr("data-subject") == undefined) {$subject=$form.attr("data-subject");}
        
        var data = {
                _message: $form.wbMailForm()
            ,   _subject: $subject
        };

        
        $.ajax({
            type: $form.attr('method'), // get type of request from 'method'
            url: $form.attr('action'), // get url of request from 'action'
            data: data, // serialize the form's data
            success: function(data) {
                data=JSON.parse(data);
                if (data.error == "true" ) {
                    $result_message.html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + data.msg + '</div>');
                } else {
                    $result_message.html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + data.msg + '</div>');
                    $form[0].reset();
                }
                $form.removeClass('was-validated');
            },
            error: function(data) {
                $result_message.html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + data.responseText + '</div>');
            }
        });

        return false; // important: prevent the form from submitting
    });
});