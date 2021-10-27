
    $(document).ready (function () {
        $('#owl-carousel').owlCarousel({
            rtl:false,
            loop:true,
            // autoplay : true,
            margin:0,
            nav:true,
            responsive:{
                300:{
                    items:3
                },

                500:{
                    items:3
                },
                800:{
                    items:3
                },
                1200:{
                    items:5
                },
                1350:{
                    items:6
                }
            }
        });
        $('#owl-carousel2').owlCarousel({
            rtl:false,
            loop:true,
            // autoplay : true,
            margin:0,
            nav:true,
            responsive:{
                300:{
                    items:2
                },

                500:{
                    items:2
                },
                800:{
                    items:3
                },
                1200:{
                    items:5
                },
                1400:{
                    items:6
                }
            }
        });
        $('.owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            // autoplay : true,
            margin:-2,
            nav:true,
            responsive:{
                300:{
                    items:2
                },

                500:{
                    items:2
                },
                800:{
                    items:3
                },
                1200:{
                    items:4
                },
                1400:{
                    items:5
                }
            }
        });

    });

// for category image scale cleaning

$(".box img").click(function(){
  $(this).toggleClass("flasher");
});
