
// function owlInitialize() {
//     else{
//         $('.owl-carousel').owlCarousel('destroy')
//     }
// }


function owl_carousel(){
    if ($(window).width() < 600) {
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            //responsiveClass:true,
            dots:true,
            autoplay:true,
            autoplayTimeout: 3000,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:1,
                    nav:false
                },
            }
        })
    } else{
        $('.owl-carousel').owlCarousel('destroy');
    }
}
$(document).ready(function(e) {
    owl_carousel();
});
$(window).on('resize', function () {
    owl_carousel();
});

