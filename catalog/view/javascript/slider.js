$(document).ready(function(){
    $('.slider').slick({
        arrows: true,
        adaptiveHeight: true,
        slidesToShow: 4,
        adaptiveHeight: true,
        responsive: [
            
            {
              breakpoint: 780,
              settings: {
                slidesToShow: 2
              }
            }
          ]
    });
});