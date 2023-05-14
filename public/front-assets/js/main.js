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
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".navbar").addClass("sticky");
        } else {
            $(".navbar").removeClass("sticky");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const galleryInner = document.querySelector(".gallery-inner");
    const galleryItems = document.querySelectorAll(".gallery-item");
    const prevButton = document.querySelector(".gallery-prev");
    const nextButton = document.querySelector(".gallery-next");
    let currentIndex = 0;

    function showItem(index) {
        const itemWidth =
            galleryItems[0].offsetWidth +
            parseFloat(getComputedStyle(galleryItems[0]).marginRight);
        const translateX = -index * itemWidth;
        galleryInner.style.transform = `translateX(${translateX}px)`;
    }

    function showNextItem() {
        currentIndex += 4;
        if (currentIndex >= galleryItems.length) {
            currentIndex = 0;
        }
        showItem(currentIndex);
    }

    function showPreviousItem() {
        currentIndex -= 4;
        if (currentIndex < 0) {
            currentIndex = Math.floor((galleryItems.length - 1) / 4) * 4;
        }
        showItem(currentIndex);
    }

    prevButton.addEventListener("click", showPreviousItem);
    nextButton.addEventListener("click", showNextItem);

    showItem(currentIndex);

    window.addEventListener("resize", function () {
        showItem(currentIndex);
    });
});
