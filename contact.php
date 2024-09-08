<!doctype html>
<html class="no-js" lang="en">


<head>
    <title>Contact | Youth Coaching Center</title>
    <?php include('includes/links.php') ?>
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
                            <h3 class="title">Contact With Us</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Contact</span>
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

        <!-- contact-area -->
        <section class="contact-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-wrap">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/icons/map.svg" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Address</h4>
                                        <p>Bhim market ,chotpur colony Noida sec-63, Uttar Pradesh 201307</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/icons/contact_phone.svg" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Phone</h4>
                                        <a href="tel:0123456789">+91-9508067835</a>

                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/icons/emial.svg" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">E-mail Address</h4>
                                        <a href="mailto:youthcoachingcentre@gmail.com">youthcoachingcentre@gmail.com</a>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-wrap">
                            <h4 class="title">Send Us Message</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="contact-form" action="https://html.themegenix.com/skillgro/assets/mail.php" method="POST">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input name="name" type="text" placeholder="Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input name="email" type="email" placeholder="E-mail *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input name="website" type="url" placeholder="Contact" required>
                                        </div>
                                    </div>
                                    <div class="form-grp">
                                        <textarea name="message" placeholder="Message *" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">Submit Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
                <!-- contact-map -->
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2215054046123!2d77.39946627550047!3d28.623122675669926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef01b7d55c27%3A0xf1804e0bac53ddb9!2sYOUTH%20COACHING%20CENTRE!5e0!3m2!1sen!2sin!4v1725000410007!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- contact-map-end -->
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->



    <!-- footer-area -->
    <?php include('includes/footer.php') ?>
    <!-- footer-area-end -->


    <!-- JS here -->
    <?php include('includes/javascripts.php'); ?>
</body>

</html>