 {{-- <footer> --}}
  <footer id="foot">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="footer-logo">
                    <img src="{{ asset('../front-assets/img/logo.png') }}" width="80" height="90"
                        alt="Logo">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 mt-3">
                <div class="footer-links">
                    <p>Our Partners</p>
                    <ul>
                        <li><p>ABC Company</p></li>
                        <li><p>XYZ company</p></li>
                        <li><p>ABC Company</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 mt-3">
                <div class="footer-links">
                    <p>Get In Touch</p>
                    <ul>
                        <li><p>learnwithus@gmail.com</p></li>
                        <li><p>601-548637</p></li>
                        <li><p>+977 9876543210</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-3">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright">
                    <span>&copy; 2023 Learn With Us. All rights reserved</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="follow-us">
                    <span>Follow us on:</span>
                    <ul>
                        <li><a href="facebook.com"><i class="fab fa-facebook text-light"></i></a></li>
                        <li><a href="twitter.com"><i class="fab fa-twitter text-light"></i></a></li>
                        <li><a href="instagram.com"><i class="fab fa-instagram text-light"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</footer>
{{-- Footer ends  --}}


<script>
    //     $(document).ready(function () {
    //     $(".navbar-toggler").click(function () {
    //         $(".collapse").toggleClass("show");
    //     });
    // });
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        const navbarBrandImg = document.querySelector('.navbar-brand img');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const dropdownMenus = document.querySelectorAll('.dropdown-menu');
        const registerBtn = document.querySelector('.btn-outline-success');

        if (window.pageYOffset > 0) {
            navbar.classList.add('scrolled');
            navbarBrandImg.classList.add('scrolled');
            navbarCollapse.classList.add('scrolled');

            navLinks.forEach(link => {
                link.classList.add('scrolled');
            });

            dropdownMenus.forEach(menu => {
                menu.classList.add('scrolled');
            });

            registerBtn.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
            navbarBrandImg.classList.remove('scrolled');
            navbarCollapse.classList.remove('scrolled');

            navLinks.forEach(link => {
                link.classList.remove('scrolled');
            });

            dropdownMenus.forEach(menu => {
                menu.classList.remove('scrolled');
            });

            registerBtn.classList.remove('scrolled');
        }
    });


    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/2ccb7a65cc.js" crossorigin="anonymous"></script>
<script src="{{asset('front-assets/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</body>

</html>