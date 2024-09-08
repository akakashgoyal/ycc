<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Success Story - SkillGro</title>
    <?php include('includes/links.php'); ?>
    <style>
        /* Custom Styles for Success Story Page */
        .success__card {
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
            margin-top: 20px;
        }

        .success__card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .success__card-content {
            text-align: center;
        }

        .success__title {
            font-size: 1.75rem;
            color: #333;
            margin-bottom: 10px;
        }

        .success__quote {
            font-size: 1rem;
            color: #555;
            font-style: italic;
            margin-bottom: 15px;
        }

        .success__details {
            font-size: 1rem;
            color: #444;
        }

        .success__name,
        .success__location,
        .success__achievement {
            margin: 5px 0;
        }

        .success__name strong,
        .success__location strong,
        .success__achievement strong {
            color: #333;
        }

        .breadcrumb__area {
            padding: 15px 0;
            background: #f4f4f4;
        }

        .breadcrumb__content {
            text-align: center;
        }

        .breadcrumb__content .title {
            font-size: 1.5rem;
            color: #333;
        }

        .breadcrumb {
            font-size: 0.875rem;
            color: #666;
        }

        .breadcrumb-separator {
            margin: 0 5px;
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
    <?php include('includes/header.php'); ?>
    <!-- header-area-end -->

    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Success Stories</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index-2.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Success Stories</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- success-area -->
        <section class="success__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="success__card ">
                            <img src="assets/img/instructor/h2_instructor01.png" style="height: 200px; object-fit:contain ; background-color: #a596cb" alt="Prachi Bhadauria">
                            <div class="success__card-content">
                                <h3 class="success__title">Success Story</h3>
                                <p class="success__quote">
                                    "I believe in the power of visualization; when I see anything happening, it becomes easier to memorize. And BYJU'S made things much easier before the final exams."
                                </p>
                                <div class="success__details">
                                    <p class="success__name"><strong>State Topper | Prachi Bhadauria | Rajasthan</strong></p>

                                    <p class="success__achievement"><strong>99.83% in Class 10 - 2021</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- success-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <?php include('includes/footer.php'); ?>
    <!-- footer-area-end -->

    <!-- JS here -->
    <?php include('includes/javascripts.php'); ?>
</body>

</html>