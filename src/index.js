
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

    if (scrollPos >= 180) {
        $('a[href^="#nabidka"]').fadeOut(300);
    } else {
        $('a[href^="#nabidka"]').fadeIn(300);
    }
    if (scrollPos >= 588) {
        $('.navbar').addClass('bg-header-purple').removeClass('blur-background');
        $('.navbar img').css('opacity', '0').attr('src', './public/img/logo-drbola-web2.svg').animate({ opacity: 1 }, 300);
    } else {
        $('.navbar').removeClass('bg-header-purple').addClass('blur-background');
        $('.navbar img').css('opacity', '0').attr('src', './public/img/logo-drbola-web1.svg').animate({ opacity: 1 }, 300);
    }
});

$(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();

        var target = $(this.getAttribute('href'));

        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});
