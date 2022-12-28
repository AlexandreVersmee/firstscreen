/* Add video icon on active element */
/*$('.nav-item .active a').append('<i class="fas fa-video yellow"></i>');*/

$(function() {
    let test = window.location.href
    let page  = test.split('/')[3]
    if (page === "index.php"){
        $("a.index").addClass('active')
    }else{
        $("a[href$='"+page+"']").addClass('active')
    }
});
/*


$('#carouselPartners').on('slide.bs.carousel', function (e) {

    /!*

    CC 2.0 License Iatek LLC 2018
    Attribution required

    *!/

    var $e = $(e.relatedTarget);

    var idx = $e.index();

    var itemsPerSlide = 12;
    var totalItems = $('#carouselPartners .carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('#carouselPartners .carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('#carouselPartners .carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});*/
