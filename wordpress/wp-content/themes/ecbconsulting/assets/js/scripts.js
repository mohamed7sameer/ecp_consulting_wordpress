"use strict"; 

function globalCarousel() { 
    return { prevArrow: "<button type=\"button\" class=\"slick-prev\"><i class=\"fas fa-angle-left\"></i></button>", nextArrow: "<button type=\"button\" class=\"slick-next\"><i class=\"fas fa-angle-right\"></i></button>" }
}
    
function index() {
    if(document.querySelectorAll(".carousel-header").length > 0){
        $(".carousel-header").slick({ 
            prevArrow: globalCarousel().prevArrow, nextArrow: globalCarousel().nextArrow, infinite: true, speed: 1000, autoplay: true, autoplaySpeed: 2000, fade: true, cssEase: "linear" }); $(".carousel-mo-2").slick({ prevArrow: globalCarousel().prevArrow, nextArrow: globalCarousel().nextArrow, autoplay: true, autoplaySpeed: 1000, dots: true });
        setTimeout(function () {
            if ($("#hotspotImg").length > 0) { $("#hotspotImg").hotSpot({ bindselector: "hover" }) } 
        }, 1000)
    }
}
function project() {
    if($(".co-carousel-project").length > 0){
        $(".co-carousel-project").slick({ prevArrow: globalCarousel().prevArrow, nextArrow: globalCarousel().nextArrow, autoplay: true, autoplaySpeed: 1000, dots: true })
    }
}
function sortPorfolio() {
    if($(".portfolio-co-cards .co-grid").length > 0){
        var $grid = $(".portfolio-co-cards .co-grid").isotope({ itemSelector: ".filter-item" }); $(".nav-portfolio").on("click", "button", function () {
        var filterValue = $(this).attr("data-filter"); $grid.isotope({ filter: filterValue }) })
    }
    
}
$(function () {
    $.scrollUp({ scrollName: "scrollUp", scrollDistance: 300, scrollFrom: "top", scrollSpeed: 300, easingType: "linear", animation: "fade", animationSpeed: 200, scrollTrigger: false, scrollTarget: false, scrollText: "<i class=\"fas fa-chevron-up\"></i>", scrollTitle: false, scrollImg: false, activeOverlay: false, zIndex: 2147483647 })
});



onload = function(){
    index()
    project()
    sortPorfolio()
}

    

