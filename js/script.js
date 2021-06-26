/* Preloader */

$(window).on('load', function() {

    $('#status').fadeOut();
    $('#preloader').delay(600).fadeOut();
});

/* ------------------------portfolio-----------------------*/

$(window).on('load', function() {

    //initilasing isotope
    $("#isotope-container").isotope({

    });
    //filter items on button 

    $("#isotope-filters").on('click', 'button', function(){

        //get filter value
        var filterValue = $(this).attr('data-filter');
        
        //filter portfolio
        $("#isotope-container").isotope({

            filter: filterValue
        }); 

        //active button
        $("#isotope-container").find('active').removeClass('active');
        $(this).addClass('active');
         
    });
});

/*----------popup-----------

$(function () {

    $("#portfolio-wrapper").magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image'
        
        

    });
});
*/


/*stats*/

$(function () {

    $(".counter").counterUp({

        delay: 50,
        time: 2000
    })
})

/*Organizational Partners*/

$(function () {


    $("#clients-list").owlCarousel ({

        items: 6,
        autoplay: true,
        smartSpeed: 200,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']

    });
})

/*slider*/

$ (function (){

    $("#team-members").owlCarousel({

        items:3,
        autoplay: true,
        loop: true,

    });
});


/*Google Map*/

/*$(window).on('load', function (){

    var addressString = 'Sajek, Rangamati Hill District, Bangladesh';
    var myLatLng = {Lat: 36.825070, lng: -76.413150};

    var map = new google.maps.Map(document.getElementById('map'), {

        zoom: 8,
        center: {Lat: 36.825070, lng: -76.413150}
    });

});

*/

/*------------------------------navbar--------------------------*/

/*show and hide white nav*/

$(function (){

    $(window).scroll(function(){

        if ( $(window).scrollTop() >50 ) {

            $("nav").addClass("white-nav-top");

            //show back to top button

            $("#back-to-top").fadeIn();

        }

        else {

            $("nav").removeClass("white-nav-top");

                //hide back to top
            $("#back-to-top").fadeOut();

        }

    })

})

$(document).ready(function (){


    $("#rightsidebar").autoplay(function (){

        $("landingpage.html").slideUp(1000);
    });
});


/*wow animation*/
//activating
$(function (){

    new WOW().init();

});
//page load anima
$(window).on('load', function(){


    $("#home-heading-1").addClass("animated fadeInDown");
    $("#home-text").addClass("animated zoomIn");
    $("#home-btn").addClass("animated zoomIn");
    $("#arrow-down i").addClass("animated fadeInDown infinite");
    
});

























