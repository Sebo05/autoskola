
let slideIndex = 0;
let timer;

function showSlides() {
    let slides = $(".mySlides");
    let dots = $(".dot");
    slides.hide();
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    dots.removeClass("active");
    slides.eq(slideIndex - 1).show();
    dots.eq(slideIndex - 1).addClass("active");
    timer = setTimeout(showSlides, 8000);
}

function currentSlide(n) {
    clearTimeout(timer);
    showSlides(slideIndex = n);
}

$('.dot').click(function() {
    let index = $(this).index();
    if ($(this).hasClass("active")) return;
    else {
        currentSlide(index + 1);
        clearTimeout(timer);
        timer = setTimeout(showSlides, 8000);
    }
});

showSlides();

$(window).scroll(function() {
    let scrollPos = $(window).scrollTop();

    if(scrollPos >= 588) {
        $('.navbar').addClass('bg-header-purple').removeClass('blur-background');
    } else {
        $('.navbar').removeClass('bg-header-purple').addClass('blur-background');
    }
});

