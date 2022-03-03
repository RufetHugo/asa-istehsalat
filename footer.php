
</div>

<footer class="container-fluid px-lg-5 z-index-9 position-relative">
    <div class="bg-main-special radius-30">
        <div class="container-xl">
            <div class="my-3 mb-5 p-3 py-lg-41 text-center d-md-flex align-items-center justify-content-between">
                <div class="font-weight-bold mb-2 mb-md-0 main-color-fot">Bütün hüquqlar qorunur © 2020</div>

                <div class=" mb-2 mb-md-0">
                    <a href="" class="p-2">
                        <i class="mdi mdi-facebook font-20 main-color-fot"></i>
                    </a>
                    <a href="" class="p-2">
                        <i class="mdi mdi-instagram font-20 main-color-fot"></i>
                    </a>
                    <a href="" class="p-2">
                        <i class="mdi mdi-youtube font-20 main-color-fot"></i>
                    </a>
                    <a href="" class="p-2">
                        <i class="mdi mdi-linkedin font-20 main-color-fot"></i>
                    </a>
                </div>

                <div class="font-weight-bold mb-2 mb-md-0 main-color-fot">
                    Bu bir <span class="color-pink">Marcom</span> məhsuludur
                </div>

            </div>
        </div>
    </div>
</footer>


<script src="assets/script/popper.min.js"></script>
<script src="assets/script/tiny-slider.min.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/script/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

<script src="assets/script/wow.min.js"></script>
<script src="assets/script/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.1.5/lightgallery.umd.min.js"></script>


<script>
    lightGallery(document.getElementById('animated-thumbnials'), {
        thumbnail: true,
    });
</script>

<script>
    if ($('.chart-discount-carousel').length > 0) {
        var chartDiscountCarousel = tns({
            container: '.chart-discount-carousel',
            items: 1,
            autoplay: false,
            loop: false,
            nested: true,
            autoplayButtonOutput: true,
            controlsText: ['<i class="mdi mdi-36px mdi-chevron-left"></i>', '<i class="mdi mdi-36px mdi-chevron-right"></i>'],
            controls: true,
            nav: false,
            gutter: 16,
            navPosition: 'bottom',
            mouseDrag: true,
            responsive: {
                0: {
                    items: 1,
                    gutter: 8,
                },
                576: {
                    items: 2,
                    gutter: 16,
                },
                768: {
                    items: 3,
                    gutter: 16,
                },
                992: {
                    items: 5,
                    gutter: 16,
                },
            },
        });
    }
    if ($('.chart-discount-carousel-two').length > 0) {
        var chartDiscountCarouselTwo = tns({
            container: '.chart-discount-carousel-two',
            items: 1,
            autoplay: false,
            loop: false,
            nested: true,
            autoplayButtonOutput: true,
            controlsText: ['<i class="mdi mdi-36px mdi-chevron-left"></i>', '<i class="mdi mdi-36px mdi-chevron-right"></i>'],
            controls: true,
            nav: false,
            gutter: 16,
            navPosition: 'bottom',
            mouseDrag: true,
            responsive: {
                0: {
                    items: 1,
                    gutter: 8,
                },
                576: {
                    items: 2,
                    gutter: 16,
                },
                768: {
                    items: 3,
                    gutter: 16,
                },
            },
        });
    }
    if ($('.chart-discount-carousel-three').length > 0) {
        var chartDiscountCarouselThree = tns({
            container: '.chart-discount-carousel-three',
            items: 1,
            autoplay: false,
            loop: false,
            nested: true,
            autoplayButtonOutput: true,
            controlsText: ['<i class="mdi mdi-36px mdi-chevron-left"></i>', '<i class="mdi mdi-36px mdi-chevron-right"></i>'],
            controls: true,
            nav: false,
            gutter: 16,
            navPosition: 'bottom',
            mouseDrag: true,
            responsive: {
                0: {
                    items: 1,
                    gutter: 8,
                },
                576: {
                    items: 2,
                    gutter: 16,
                },
                768: {
                    items: 3,
                    gutter: 16,
                },
                992: {
                    items: 5,
                    gutter: 16,
                },
            },
        });
    }

    if ($('.gallery-carousel').length > 0) {
        var galleryCarousel = tns({
            container: '.gallery-carousel',
            items: 1,
            autoplay: false,
            loop: false,
            nested: true,
            autoplayButtonOutput: true,
            controlsText: ['<i class="mdi mdi-36px mdi-chevron-left"></i>', '<i class="mdi mdi-36px mdi-chevron-right"></i>'],
            controls: true,
            nav: false,
            gutter: 16,
            navPosition: 'bottom',
            mouseDrag: true,
        });
    }

</script>


</body>
</html>
