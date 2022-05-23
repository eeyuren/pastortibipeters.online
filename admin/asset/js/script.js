$(document).ready(function(){
    //featured categories owl carousel display
	$('.owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        autoplay:true,
        autoplayTimeout:5000,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            400:{
                items:2,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:4,
                nav:true,
                loop:true
            }
        }
	})
})