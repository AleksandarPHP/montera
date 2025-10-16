$(".slider").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow"),
    nextArrow: $(".next-arrow"),
});

$("#apartment-basic").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
});

$("#apartment-basic2").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
});

$("#grand-1").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
});

$("#grand-2").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
});

$(".slider-2").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow prev-arrow-2"),
    nextArrow: $(".next-arrow next-arrow-2"),
});

$(".slider-4").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow prev-arrow-4"),
    nextArrow: $(".next-arrow next-arrow-4"),
});
$(".slider-5").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow prev-arrow-5"),
    nextArrow: $(".next-arrow next-arrow-5"),
});
$(".slider-6").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow prev-arrow-6"),
    nextArrow: $(".next-arrow next-arrow-6"),
});
$(".slider-7").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow prev-arrow-7"),
    nextArrow: $(".next-arrow next-arrow-7"),
});
$(".slider-8").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow prev-arrow-8"),
    nextArrow: $(".next-arrow next-arrow-8"),
});
$(".slider-9").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow prev-arrow-9"),
    nextArrow: $(".next-arrow next-arrow-9"),
});

$(".slider-3").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow prev-arrow-3"),
    nextArrow: $(".next-arrow next-arrow-3"),
});
// $(".slider-4").slick({
//     arrows: true,
//     infinite: true,
//     prevArrow: $(".prev-arrow.prev-arrow-2"),
//     nextArrow: $(".next-arrow.next-arrow-2"),
// });

$(".building-slider").slick({
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});
$(".location-slider").slick({
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
});

$(".apartments-slider").slick({
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 999,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$(".navigator-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    infinite: false,
    slidesToShow: 8,
    slidesToScroll: 1,
    variableWidth: true,
    swipeToSlide: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                swipeToSlide: true,
                infinite: false,
            },
        },
    ],
});

Fancybox.bind("[data-fancybox]", {});
