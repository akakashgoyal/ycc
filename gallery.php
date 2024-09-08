<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from html.themegenix.com/skillgro/blog-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 06:43:02 GMT -->

<head>
    <?php include('includes/links.php') ?>

    <style>
        .gallery-image {
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .gallery-image:hover {
            transform: scale(1.05);
        }

        .modal-fullscreen {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .modal-body img {
            width: 100vw;
            height: 100vh;
            object-fit: contain;
        }

        .modal-content {
            background-color: transparent;
            border: none;
        }

        .modal-body {
            position: relative;
            padding: 0;
        }

        .carousel-control-prev,
        .carousel-control-next {
            top: 50%;
            /* width: 10%; */
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 0;
            height: 20px;
            /* width: 20px; */

        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 2rem;
            height: 2rem;
        }

        .col-lg-4 img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/img/logo/preloader.svg" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <?php include('includes/header.php') ?>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Gallery</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Gallery</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->

        <section class="container mt-150 mb-120">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/images/banner.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="0" alt="Image 1">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/img/blog/blog_post01.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="1" alt="Image 2">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/img/blog/blog_post02.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="2" alt="Image 3">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/images/banner.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="0" alt="Image 1">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/img/blog/blog_post01.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="1" alt="Image 2">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/img/blog/blog_post02.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="2" alt="Image 3">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/images/banner.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="0" alt="Image 1">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/img/blog/blog_post01.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="1" alt="Image 2">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="assets/img/blog/blog_post02.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="2" alt="Image 3">
                    </div>

                    <!-- Add more images as needed -->
                </div>
            </div>

            <!-- Image Gallery Modal -->
            <div class="modal fade" id="imageGalleryModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/images/banner.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="0" alt="Image 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/blog/blog_post01.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="0" alt="Image 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/blog/blog_post02.jpg" class="img-fluid gallery-image" data-bs-toggle="modal" data-bs-target="#imageGalleryModal" data-bs-slide-to="0" alt="Image 1">
                                    </div>
                                    <!-- Add more carousel items for additional images -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->



    <!-- footer-area -->
    <?php include('includes/footer.php') ?>
    <!-- footer-area-end -->


    <!-- JS here -->
    <?php include('includes/javascripts.php') ?>

    <script>
        const galleryImages = document.querySelectorAll('.gallery-image');
        const carousel = new bootstrap.Carousel(document.getElementById('carouselImages'));

        galleryImages.forEach((image, index) => {
            image.addEventListener('click', function() {
                carousel.to(index);
            });
        });
    </script>
</body>


<!-- Mirrored from html.themegenix.com/skillgro/blog-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 06:43:02 GMT -->

</html>