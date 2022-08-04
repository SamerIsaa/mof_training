<script src="{{ asset('landingAssets/js/jquery.js') }}"></script>
<script src="{{ asset('landingAssets/js/popper.min.js') }}"></script>
<script src="{{ asset('landingAssets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('landingAssets/js/owl.js') }}"></script>
<script src="{{ asset('landingAssets/js/wow.js') }}"></script>
<script src="{{ asset('landingAssets/js/script.js') }}"></script>
<div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="ui-id-1-button" id="ui-id-1-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content overflow"></ul></div>
<script>



    //Main Slider Carousel
    if ($('.main-slider-carousel').length) {
        $('.main-slider-carousel').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            loop:false,
            margin:0,
            nav:true,
            autoHeight: true,
            smartSpeed: 500,
            autoplay: 6000,
            rtl:true,
            navText: [ '<span class="flaticon-left-arrow-2"></span>', '<span class="flaticon-next-2"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });
    }





    // Single Item Carousel
    if ($('.single-item-carousel').length) {
        $('.single-item-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            smartSpeed: 500,
            autoplay: 4000,
            rtl:true,
            navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                }
            }
        });
    }



    // Sponsors Item Carousel
    if ($('.sponsors-carousel').length) {
        $('.sponsors-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            smartSpeed: 500,
            rtl:true,
            autoplay: 4000,
            navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:2
                },
                600:{
                    items:3
                },
                800:{
                    items:4
                },
                1024:{
                    items:4
                }
            }
        });
    }

</script>
