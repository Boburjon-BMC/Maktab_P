$(document).ready(function(){
        // owl-carusel section 2
        $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    800:{
                        items:2
                    },
                    1200:{
                        items:3
                    }
                }
            });

        // tabs
        $( function() {
                $( "#tabs" ).tabs();
        } );
        // window scrol
        $(window).scroll(function(){
            if ($(window).scrollTop() > 700) {
                $('.up_link').addClass('active');
            }
            else if($(window).scrollTop() < 700){
                $('.up_link').removeClass('active');
            }
        });


        // tizim boshqaruv oynasi acardiyon
        $( function() {
            $( "#accordion" ).accordion({
              collapsible: true
            });
          } );
});
