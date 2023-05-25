$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on("click", function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top,
                },
                800,
                function () {
                    window.location.hash = hash;
                }
            );
        }
    });

    // Add sticky navbar on scroll
    // $(window).scroll(function () {
    //   if ($(this).scrollTop() > 100) {
    //     $('.navbar').addClass('sticky');
    //   } else {
    //     $('.navbar').removeClass('sticky');
    //   }
    // });
});

const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const carousel = document.querySelector(".carousel-container");
const track = document.querySelector(".track");
let width = carousel.offsetWidth;
let index = 0;
window.addEventListener("resize", function () {
    width = carousel.offsetWidth;
});
next.addEventListener("click", function (e) {
    e.preventDefault();
    index = index + 1;
    prev.classList.add("show");
    track.style.transform = "translateX(" + index * -width + "px)";
    if (track.offsetWidth - index * width < index * width) {
        next.classList.add("hide");
    }
});
prev.addEventListener("click", function () {
    index = index - 1;
    next.classList.remove("hide");
    if (index === 0) {
        prev.classList.remove("show");
    }
    track.style.transform = "translateX(" + index * -width + "px)";
});
