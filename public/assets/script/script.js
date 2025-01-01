$(".slider").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow"),
    nextArrow: $(".next-arrow"),
});
$(".slider-2").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow.prev-arrow-2"),
    nextArrow: $(".next-arrow.next-arrow-2"),
});
$(".slider-3").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow.prev-arrow-2"),
    nextArrow: $(".next-arrow.next-arrow-2"),
});
$(".slider-4").slick({
    arrows: true,
    infinite: true,
    prevArrow: $(".prev-arrow.prev-arrow-2"),
    nextArrow: $(".next-arrow.next-arrow-2"),
});

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

Fancybox.bind("[data-fancybox]", {});
