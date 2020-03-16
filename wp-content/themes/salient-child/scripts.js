(function ($) {
    $(document).ready(function(){
        $('.custom-post-grid.is-carousel').slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: false
                }
              }
            ]
        })
    })
}(window.jQuery, window, document));