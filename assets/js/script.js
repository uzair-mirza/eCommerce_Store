$(window).on("load", function () {

    "use strict";

    /* ===================================
            Loading Timeout
     ====================================== */

    $('.side-menu').removeClass('hidden');

    setTimeout(function(){
        $('.preloader').fadeOut();
    }, 1000);

});


jQuery(function ($) {


    "use strict";

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 260) { // Set position from top to add class
            $('header').addClass('header-appear');
        }
        else {
            $('header').removeClass('header-appear');
        }
    });

    //scroll to appear
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 500)
            $('.scroll-top-arrow').fadeIn('slow');
        else
            $('.scroll-top-arrow').fadeOut('slow');
    });

    //Click event to scroll to top
    $(document).on('click', '.scroll-top-arrow', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    $(".scroll").on("click", function (event) {
        event.preventDefault();
        $("html,body").animate({
            scrollTop: $(this.hash).offset().top - 60}, 1200);
    });

    /* ===================================
        Side Menu
    ====================================== */
    if ($("#sidemenu_toggle").length) {
        $("#sidemenu_toggle").on("click", function () {
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
        }), $(".side-nav .navbar-nav .nav-link").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        }), $("#btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        });
    }

    /* =====================================
          Parallax
       ====================================== */

    // if($(window).width() < 780) {
    //     $('.parallax').addClass("parallax-disable");
    // } else {
    //     $('.parallax').removeClass("parallax-disable");

    //     // parallax
    //     $(".parallax").parallaxie({
    //         speed: 0.55,
    //         offset: -100,
    //     });
    // }

        /*==============================================
           Featured assets filer js
           ================================================*/
           $(function () {
            // init Isotope
            var $grid = $('.assets-holder').isotope({
                itemSelector: '.nft-item',
                layoutMode: 'fitRows',
                fitRows: {
                    gutter: 20,
                },
            });
            // filter functions
            var filterFns = {
    
                // show if name ends with -ium
                ium: function () {
                    var name = $(this).find('.name').text();
                    return name.match(/ium$/);
                }
            };
    
            // bind filter button click
            $('.asset-filter-list').on('click', 'li', function () {
                var filterValue5254 = $(this).attr('data-filter');
                // use filterFn if matches value
                filterValue5254 = filterFns[filterValue5254] || filterValue5254;
                $grid.isotope({
                    filter: filterValue5254
                });
            });
            // change is-checked class on buttons
            $('.asset-filter-list').each(function (i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'li', function () {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $(this).addClass('is-checked');
                });
            });
        });
    })
    
    $(document).ready(function () {
        "use strict"; // start of use strict

        /*====================================
    All slider
    =======================================*/

    //banner slider
    var swiper = new Swiper(".banner-item-slider", {
        effect: "cube",
        grabCursor: true,
        cubeEffect: {
            shadow: false,
            slideShadows: false,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        loop: true,
        autoplay: true,
    });

    //banner slider-home-4
    var swiper5 = new Swiper(".banner-item-slider-2", {
        effect: "cards",
        grabCursor: true,
        autoplay: true,
        loop: true,
    });

    //auction slider 
    var swiper = new Swiper('.auction-holder', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: true,
        // },
        navigation: {
            nextEl: '.auction-next',
            prevEl: '.auction-prev'
        },
        breakpoints: {
            576: {
                spaceBetween: 20,
                slidesPerView: 2,
            },
            992: {
                spaceBetween: 20,
                slidesPerView: 3,
            },
            1200: {
                spaceBetween: 20,
                slidesPerView: 4,
            }
        }
    });


    //hot slider 
    var swiper = new Swiper('.hot-holder', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: true,
        // },
        navigation: {
            nextEl: '.hot-next',
            prevEl: '.hot-prev'
        },
        breakpoints: {
            576: {
                spaceBetween: 20,
                slidesPerView: 2,
            },
            992: {
                spaceBetween: 20,
                slidesPerView: 3,
            },
            1200: {
                spaceBetween: 20,
                slidesPerView: 4,
            }
        }
    });

    // blog slider start here
    var swiper = new Swiper('.blog-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1200,
        navigation: {
            nextEl: '.blog-slider-next',
            prevEl: '.blog-slider-prev',
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true
    });

    //nft-category thumb slider
    var swiper = new Swiper('.nft-cat-thumb', {
        slidesPerView: 3,
        spaceBetween: 10,
        speed: 2000,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true
    });

    })


        /* ===================================
      Owl Carousel Home One
     ====================================== */
     $(document).ready(function () {
        var carousel = $("#owl-demo");
        carousel.owlCarousel({
        navigation:true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      });  
    });

       /* ===================================
      Owl Carousel Home Two
     ====================================== */
     $(document).ready(function () {
        var carousel = $("#owl-demo-new");
        carousel.owlCarousel({
        navigation:true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      });  
    });

     /* ===================================
      Owl Carousel Component Page 
     ====================================== */
     $(document).ready(function () {
        var carousel = $("#owl-demo-component");
        carousel.owlCarousel({
        // navigation:true,
        // navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      });  
    });

     /* ===================================
      Owl Carousel Component Page 
     ====================================== */
     $(document).ready(function () {
        var carousel = $("#owl-demo-new-follow");
        carousel.owlCarousel({
        // navigation:true,
        // navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      });  
    });

    /* ===================================
      Owl Carousel Component Page 
     ====================================== */
     $(document).ready(function () {
        var carousel = $("#owl-demo-new-follow-1");
        carousel.owlCarousel({
        // navigation:true,
        // navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      });  
    });

    /* ===================================
      Owl Carousel Component Page 
     ====================================== */
     $(document).ready(function () {
        var carousel = $("#owl-demo-new-follow-2");
        carousel.owlCarousel({
        // navigation:true,
        // navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      });  
    });

    /* ===================================
      Owl Carousel Component Page 
     ====================================== */
     $(document).ready(function () {
        var carousel = $("#owl-demo-new-follow-3");
        carousel.owlCarousel({
        // navigation:true,
        // navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      });  
    });
        /* ===================================
      Owl Carousel
     ====================================== */

    //Testimonial Slider

    $('.testimonial-cast').owlCarousel({
        loop: true,
        smartSpeed: 500,
        responsiveClass: true,
        nav:false,
        dots:false,
        autoplay: true,
        margin:0,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                margin: 30,
            },
            480: {
                items: 2,
            },
            992: {
                items: 4,
            }
        }
    });

    $('.list-item-slider').owlCarousel({
        items: 4,
        autoplay: 1500,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        slideBy: 1,
        loop: true,
        margin:0,
        dots: false,
        nav: false,
        responsive: {
            1200: {
                items: 4,
            },
            768: {
                items: 3,
            },
            480: {
                items: 2,
            },
            320: {
                items: 1,
            },
        }
    });



