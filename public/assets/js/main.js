(function($){
	"use strict";
	jQuery(document).on('ready', function () {

        // Header Sticky
		$(window).on('scroll',function() {
            if ($(this).scrollTop() > 120){  
                $('.navbar-area').addClass("is-sticky");
            }
            else{
                $('.navbar-area').removeClass("is-sticky");
            }
        });
        
        // Mean Menu
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
        });
		
		// Popup Image
        $('.popup-btn').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
            }
        });

        // Search Popup JS
        $('.others-option .close-btn').on('click',function() {
            $('.search-overlay').fadeOut();
            $('.search-btn').show();
            $('.close-btn').removeClass('active');
        });
        $('.others-option .search-btn').on('click',function() {
            $(this).hide();
            $('.search-overlay').fadeIn();
            $('.close-btn').addClass('active');
        });
		
		// Popup Video
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
        });
		
		// Button Hover JS
        $(function() {
            $('.default-btn')
            .on('mouseenter', function(e) {
                var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
                $(this).find('span').css({top:relY, left:relX})
            })
            .on('mouseout', function(e) {
                var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
                $(this).find('span').css({top:relY, left:relX})
            });
        });

        // Sidebar Modal
        $(".burger-menu").on('click',  function() {
			$('.sidebar-modal').toggleClass('active');
		});
        $(".sidebar-modal-close-btn").on('click',  function() {
			$('.sidebar-modal').removeClass('active');
        });

        // Home Slides
		$('.home-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
			autoplayHoverPause: true,
            autoplay: true,
            smartSpeed: 1000,
            animateOut: "fadeOut",
            items: 1,
            navText: [
                "<i class='flaticon-left-chevron'></i>",
                "<i class='flaticon-right-chevron'></i>"
            ],
            responsive: {
                0: {
                    autoHeight: true,
                },
            }
        });
		$('.home-slides-two').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
            autoplayHoverPause: true,
            animateOut: "slideOutDown",
            animateIn: "slideInDown",
            autoplay: true,
            smartSpeed: 1000,
            items: 1,
            navText: [
                "<i class='flaticon-left-chevron'></i>",
                "<i class='flaticon-right-chevron'></i>"
            ],
            responsive: {
                0: {
                    autoHeight: true,
                },
            }
        });
        $(".home-slides, .home-slides-two").on("translate.owl.carousel", function(){
            $(".main-banner-content .sub-title, .banner-content .sub-title").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content h1, .banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content p, .banner-content p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content .btn-box, .banner-content .btn-box").removeClass("animated fadeInUp").css("opacity", "0");
        });
        $(".home-slides, .home-slides-two").on("translated.owl.carousel", function(){
            $(".main-banner-content .sub-title, .banner-content .sub-title").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content h1, .banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content p, .banner-content p").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content .btn-box, .banner-content .btn-box").addClass("animated fadeInUp").css("opacity", "1");
        });

        // Team Slides
		$('.team-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: true,
			autoplayHoverPause: true,
            autoplay: true,
            center: true,
            margin: 30,
            navText: [
                "<i class='flaticon-left-chevron'></i>",
                "<i class='flaticon-right-chevron'></i>"
            ],
			responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1200: {
                    items: 3,
				}
            }
        });

        // Partner Slides
		$('.partner-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			autoplayHoverPause: true,
            autoplay: true,
            margin: 30,
            navText: [
                "<i class='flaticon-left-chevron'></i>",
                "<i class='flaticon-right-chevron'></i>"
            ],
			responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 3,
                },
                768: {
                    items: 3,
                },
                1200: {
                    items: 5,
				}
            }
        });

        // Services Slides
		$('.services-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: true,
			autoplayHoverPause: true,
            autoplay: true,
            margin: 30,
            navText: [
                "<i class='flaticon-left-chevron'></i>",
                "<i class='flaticon-right-chevron'></i>"
            ],
			responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1200: {
                    items: 3,
				}
            }
        });

        // Feedback Carousel
		var $imagesSlider = $(".feedback-slides .client-feedback>div"),
		$thumbnailsSlider = $(".client-thumbnails>div");
		// Images Options
		$imagesSlider.slick({
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			cssEase: 'linear',
			fade: true,
			autoplay: true,
			draggable: true,
			asNavFor: ".client-thumbnails>div",
			prevArrow: '.client-feedback .prev-arrow',
			nextArrow: '.client-feedback .next-arrow'
		});
		// Thumbnails Options
		$thumbnailsSlider.slick({
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 1,
			cssEase: 'linear',
			autoplay: true,
			centerMode: true,
			draggable: false,
			focusOnSelect: true,
			asNavFor: ".feedback-slides .client-feedback>div",
			prevArrow: '.client-thumbnails .prev-arrow',
            nextArrow: '.client-thumbnails .next-arrow',
        });
        // Feedback Item Slides
		$('.feedback-item-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			autoplayHoverPause: true,
            autoplay: true,
            mouseDrag: true,
            margin: 30,
            navText: [
                "<i class='flaticon-left-chevron'></i>",
                "<i class='flaticon-right-chevron'></i>"
            ],
			responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1200: {
                    items: 3,
                },
            }
        });
        
        // Nice Select JS
        $('select').niceSelect();

        // Why Choose Us Image Slides
		$('.why-choose-us-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: true,
			autoplayHoverPause: true,
            autoplay: true,
            items: 1,
            animateOut: 'fadeOut',
            navText: [
                "<i class='flaticon-left-chevron'></i>",
                "<i class='flaticon-right-chevron'></i>"
            ]
        });

        // Subscribe form
		$(".newsletter-form").validator().on("submit", function (event) {
			if (event.isDefaultPrevented()) {
			// handle the invalid form...
				formErrorSub();
				submitMSGSub(false, "Please enter your email correctly.");
			} else {
				// everything looks good!
				event.preventDefault();
			}
		});
		function callbackFunction (resp) {
			if (resp.result === "success") {
				formSuccessSub();
			}
			else {
				formErrorSub();
			}
		}
		function formSuccessSub(){
			$(".newsletter-form")[0].reset();
			submitMSGSub(true, "Thank you for subscribing!");
			setTimeout(function() {
				$("#validator-newsletter").addClass('hide');
			}, 4000)
		}
		function formErrorSub(){
			$(".newsletter-form").addClass("animated shake");
			setTimeout(function() {
				$(".newsletter-form").removeClass("animated shake");
			}, 1000)
		}
		function submitMSGSub(valid, msg){
			if(valid){
				var msgClasses = "validation-success";
			} else {
				var msgClasses = "validation-danger";
			}
			$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
		}
		// AJAX MailChimp
		$(".newsletter-form").ajaxChimp({
			url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
			callback: callbackFunction
        });

        // Achievements Image Slides
		$('.achievements-image-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: true,
			autoplayHoverPause: true,
            autoplay: true,
            items: 1,
            animateOut: 'fadeOut',
            navText: [
                "<i class='flaticon-left-chevron'></i>",
                "<i class='flaticon-right-chevron'></i>"
            ]
        });

        // FAQ Accordion
        $(function() {
            $('.accordion').find('.accordion-title').on('click', function(){
                // Adds Active Class
                $(this).toggleClass('active');
                // Expand or Collapse This Panel
                $(this).next().slideToggle('fast');
                // Hide The Other Panels
                $('.accordion-content').not($(this).next()).slideUp('fast');
                // Removes Active Class From Other Titles
                $('.accordion-title').not($(this)).removeClass('active');		
            });
        });

        // Tabs
        (function ($) {
            $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
            $('.tab ul.tabs li a').on('click', function (g) {
                var tab = $(this).closest('.tab'), 
                index = $(this).closest('li').index();
                tab.find('ul.tabs > li').removeClass('current');
                $(this).closest('li').addClass('current');
                tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
                tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
                g.preventDefault();
            });
        })(jQuery);

        // Odometer JS
        $('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
        });

        // Go to Top
        $(function(){
            // Scroll Event
            $(window).on('scroll', function(){
                var scrolled = $(window).scrollTop();
                if (scrolled > 600) $('.go-top').addClass('active');
                if (scrolled < 600) $('.go-top').removeClass('active');
            });  
            // Click Event
            $('.go-top').on('click', function() {
                $("html, body").animate({ scrollTop: "0" },  500);
            });
        });
		
    });

    // WOW JS
	$(window).on ('load', function (){
        if ($(".wow").length) { 
            var wow = new WOW({
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       20,          // distance to the element when triggering the animation (default is 0)
            mobile:       true, // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
          });
          wow.init();
        }
	});

    // Preloader
	jQuery(window).on('load', function() {
		$('.preloader').fadeOut();
	});
}(jQuery));