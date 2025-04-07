<?php include 'layout-header.php'; ?>

<main class="main homepage">
    <section class="mb-3 mobile-categories-wrapper">
        <div class="container">

            <div class="co-default-slider">
                <div class="co-swiper-slider">
                    <div class="swiper mobile-categories-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach (range(0, 10) as $i) { ?>
                                <div class="swiper-slide">

                                    <div class="slide-content one-category <?php echo 'active' ?>">
                                        <a href="blog-single.php">
                                            <img src="assets/images/cat-0<?php echo $i ?>.png" class="img-fluid image">
                                        </a>
                                        <a href="blog-single.php">
                                            <p class="title bold mb-1"> الأسلام والحياة </p>
                                        </a>

                                    </div> <!-- one-category -->

                                </div>
                            <?php } ?>
                        </div> <!-- swiper-wrapper -->
                        <div class="co-default-swiper-navigation">
                            <div class="swiper-button-prev mobile-categories-swiper-button-prev">
                            </div>
                            <div class="swiper-button-next mobile-categories-swiper-button-next">
                            </div>
                        </div> <!-- co-default-swiper-navigation -->

                    </div> <!-- swiper secondary-swiper -->

                </div> <!-- co-swiper-slider -->
            </div><!-- co-default-slider -->

        </div><!-- container -->
    </section><!-- mb-3 -->

    <section class="mb-3">
        <div class="container">
            <div class="co-latest-news-and-visit-site row">
                <div class="col-lg-9 co-latest-news-bar-slider mb-4 mb-lg-0">
                    <div id="latest-news-bar-slider" class="carousel slide latest-news-bar-slider" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-item-content">
                                    <a class="bar-slider-title" href="blog-single.php">
                                        7 دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج
                                    </a>
                                    <p class="m-0 date small color-gray"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                </div> <!-- d-flex -->
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-item-content">
                                    <a class="bar-slider-title" href="blog-single.php">
                                        7 دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج
                                    </a>
                                    <p class="m-0 date small color-gray"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                </div> <!-- d-flex -->
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-item-content">
                                    <a class="bar-slider-title" href="blog-single.php">
                                        7 دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج دروس للشباب من رحلة الإسراء والمعراج
                                    </a>
                                    <p class="m-0 date small color-gray"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                </div> <!-- d-flex -->
                            </div>
                        </div>

                        <div class="co-arrows">
                            <a class="slider-arrow prev" href="#latest-news-bar-slider" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="slider-arrow next" href="#latest-news-bar-slider" role="button" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>

                    </div> <!-- latest-news-bar-slider -->

                </div><!-- co-latest-news-bar-slider -->

                <div class="col-lg-3 co-visit-site">
                    <a href="https://www.en.mugtama.com">

                        <picture class="banner">
                            <source media="(min-width: 992px)" srcset="assets/images/en.jpg">
                            <img src="assets/images/banner-02.jpg">
                        </picture>

                    </a>
                </div><!-- co-visit-site -->

            </div><!-- co-latest-news-and-visit-site row-->
        </div><!-- container -->
    </section><!-- mb-3 -->

    <section class="co-intro-section mb-4">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 d-lg-block d-flex gap-1 col-authors">


                    <div class="banner-wrapper mb-4">
                        <a href="#">
                            <img src="assets/images/banner-0001.png" class="img-fluid w-100 banner">
                        </a>
                    </div>

                    <div class="banner-wrapper">
                        <a href="#">
                            <img src="assets/images/banner-0001.png" class="img-fluid w-100 banner">
                        </a>
                    </div>

                </div><!-- col-lg-3 -->

                <div class="col-lg-6 col-sliders">
                    <div class="co-sliders">
                        <div class="co-primary-slider mb-3">

                            <div class="co-swiper-slider">

                                <div class="swiper primary-swiper">
                                    <div class="swiper-wrapper">

                                        <?php foreach (range(0, 3) as $i) { ?>
                                            <div class="swiper-slide">
                                                <a href="blog-single.php">
                                                    <div class="slide-content one-news-style-1">
                                                        <img src="assets/images/slider-01.jpg" class="img-fluid image">
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?>

                                    </div> <!-- swiper-wrapper -->

                                    <div class="swiper-pagination primary-swiper-pagination pagination-bottom"></div>
                                </div> <!-- swiper primary-swiper -->


                            </div> <!-- co-swiper-slider -->
                        </div><!-- co-primary-slider -->

                        <div class="co-default-slider">
                            <div class="co-swiper-slider">
                                <div class="swiper default-swiper">
                                    <div class="swiper-wrapper">
                                        <?php foreach (range(0, 5) as $i) { ?>
                                            <div class="swiper-slide">

                                                <div class="slide-content one-news-style-2">
                                                    <a href="blog-single.php">
                                                        <img src="assets/images/secondary-slider.jpg" class="img-fluid image">
                                                    </a>
                                                    <a href="blog-single.php">
                                                        <p class="color-black title bold mb-1"> 10 عبادات مهمة في فصل الشتاء </p>
                                                    </a>

                                                    <div class="d-flex">
                                                        <p class="date small color-gray me-2 mb-1"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                                        <p class="views small color-gray mb-1"> <i class="fa fa-eye"></i> 150 </p>
                                                    </div>

                                                </div>

                                            </div>
                                        <?php } ?>
                                    </div> <!-- swiper-wrapper -->
                                    <div class="co-default-swiper-navigation">
                                        <div class="swiper-button-prev default-swiper-button-prev">
                                        </div>
                                        <div class="swiper-button-next default-swiper-button-next">
                                        </div>
                                    </div> <!-- co-default-swiper-navigation -->

                                </div> <!-- swiper secondary-swiper -->

                            </div> <!-- co-swiper-slider -->
                        </div><!-- co-default-slider -->

                    </div><!-- co-slider -->

                </div><!-- col-lg-3 -->

                <div class="col-lg-3 col-news">
                    <div class="co-latest-news">

                        <div class="co-section-title mb-3">
                            <p class="title"> جديد الموضوعات </p>
                        </div><!-- co-section-title -->

                        <div class="latest-news-list">

                            <div class="one-latest-news one-news-style-3">

                                <a href="blog-single.php">
                                    <img src="assets/images/primary-slider.jpg" class="img-fluid image mb-2">
                                </a>

                                <a href="blog-list.php" class="category"> الأسلام والحياة </a>

                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>

                            </div><!-- one-latest-news -->

                            <div class="one-latest-news one-news-style-3">

                                <a href="#">
                                    <img src="assets/images/primary-slider.jpg" class="img-fluid image mb-2">
                                </a>

                                <a href="#" class="category"> الأسلام والحياة </a>

                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>

                            </div><!-- one-latest-news -->



                        </div><!-- latest-news-list -->

                    </div><!-- co-latest -->

                </div><!-- col-lg-3 -->

            </div><!-- row -->

        </div><!-- container -->

    </section><!-- co-intro-section -->


    <section class="co-authers pb-4">

        <div class="container">

            <div class="co-section-title mb-5">
                <p class="title"> كُتّاب المجتمع </p>
                <a href="author-list.php"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->

            <div class="co-default-slider">
                <div class="co-swiper-slider">
                    <div class="swiper default-six-swiper arrows-left-right">

                        <div class="swiper-wrapper">
                            <?php foreach (range(0, 12) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="author-card">

                                            <img src="assets/images/author.jpg" class="img-fluid image mb-1 author-image-in-card" alt="">

                                            <a href="show-author-details.php" class="name"> د.أشرف دوابه </a>

                                        </div><!-- author-card -->
                                    </div>
                                </div>
                            <?php } ?>
                        </div> <!-- swiper-wrapper -->
                        <div class="co-default-swiper-navigation">
                            <div class="swiper-button-prev default-swiper-button-prev">
                            </div>
                            <div class="swiper-button-next default-swiper-button-next">
                            </div>
                        </div> <!-- co-default-swiper-navigation -->

                    </div> <!-- swiper secondary-swiper -->

                </div> <!-- co-swiper-slider -->
            </div><!-- co-default-slider -->





        </div>


    </section>

    <section class="co-media section-bg-dark py-5">
        <div class="container">

            <div class="co-section-title mb-5">
                <p class="title"> ميديا المجتمع </p>
                <a href="#" class="color-white"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->

            <div class="row media-items-row">

                <?php foreach (range(0, 3) as $i) { ?>
                    <div class="col-lg-6 mb-3">
                        <div class="one-media">
                            <div class="co-image">
                                <a href="video-single.php">
                                    <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                </a>
                                <a href="video-single.php" class="overlay">
                                    <i class="fa fa-play"></i>
                                </a> <!-- overlay -->
                            </div> <!-- co-image -->
                            <div class="details">
                                <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>
                            </div><!-- details -->
                        </div> <!-- one-media -->
                    </div>

                <?php } ?>

            </div>
        </div>
    </section><!-- co-media -->

    <section class="banner py-5">
        <div class="container">
            <div class="col-lg-10 m-auto">
                <a href="blog-single.php"><img src="assets/images/banner-01.jpg" class="img-fluid border-radius-30"></a>
            </div>
        </div>
    </section> <!-- banner -->

    <section class="co-most-views section-bg-gray py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="co-section-title mb-5">
                        <p class="title"> الأكثر قراءة </p>
                        <a href="blog-list.php"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
                    </div><!-- co-section-title -->

                    <div class="row">
                        <?php foreach (range(0, 3) as $i) { ?>
                            <div class="col-lg-6 mb-3">
                                <div class="one-news-style-1 large-image">
                                    <img src="assets/images/mostest.jpg" class="img-fluid image">
                                    <div class="details">
                                        <div class="d-flex">
                                            <p class="date small color-white me-2 mb-1"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                            <p class="views small color-white mb-1"> <i class="fa fa-eye"></i> 150 </p>
                                        </div>
                                    </div><!-- details -->
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div> <!-- col -->
                <div class="col-lg-4">
                    <div class="memories card-colored">

                        <div class="card-header">
                            <p class="m-0"> من ذاكرة "المجتمع" </p>
                        </div><!-- card-header -->

                        <div class="card-content">
                            <div class="memories-news-list">
                                <?php foreach (range(0, 3) as $i) { ?>
                                    <div class="one-news-style-4 p-2">
                                        <img src="assets/images/mostest.jpg" class="img-fluid image">
                                        <div class="details">
                                            <a href="#" class="bold title mb-2"> حقائق في وثائق.. واقعة بين الأميري وعبدالناصر </a>
                                            <div class="d-flex">
                                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                            </div>
                                        </div><!-- details -->
                                    </div> <!-- one-news-style-4 -->
                                <?php } ?>
                            </div> <!-- memories-news-list -->
                        </div><!-- card-content -->

                        <div class="card-footer">
                            <a href="blog-list.php" class="m-0"> مشاهدة المزيد </a>
                        </div><!-- card-footer -->

                    </div>
                </div> <!-- col -->
            </div>
        </div>

    </section><!-- most-views -->

    <section class="co-blog pt-5 pb-1">

        <div class="container">


            <div class="co-section-title mb-5">
                <p class="title"> مُدونة المجتمع </p>
                <a href="blog-list.php"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->


            <div class="co-default-slider">
                <div class="co-swiper-slider">
                    <div class="swiper default-swiper">

                        <div class="swiper-wrapper">
                            <?php foreach (range(0, 5) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content one-news-style-2">
                                        <a href="blog-single.php">
                                            <img src="assets/images/blog.jpg" class="img-fluid image">
                                        </a>
                                        <a href="blog-single.php">
                                            <p class="color-black title bold mb-1"> 10 عبادات مهمة في فصل الشتاء </p>
                                        </a>
                                        <div class="d-flex">
                                            <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                            <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div> <!-- swiper-wrapper -->
                        <div class="co-default-swiper-navigation">
                            <div class="swiper-button-prev default-swiper-button-prev">
                            </div>
                            <div class="swiper-button-next default-swiper-button-next">
                            </div>
                        </div> <!-- co-default-swiper-navigation -->

                    </div> <!-- swiper secondary-swiper -->

                </div> <!-- co-swiper-slider -->
            </div><!-- co-default-slider -->


        </div>


    </section><!-- co-blog -->

    <section class="co-files pt-4 pb-1">

        <div class="container">

            <div class="co-section-title mb-3">
                <p class="title"> ملفات خاصة </p>
                <a href="#"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->

            <div class="co-default-slider">
                <div class="co-swiper-slider">
                    <div class="swiper default-swiper">

                        <div class="swiper-wrapper">
                            <?php foreach (range(0, 5) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content one-image-card">
                                        <a href="blog-single.php">
                                            <img src="assets/images/file.jpg" class="img-fluid image border-radius-10">
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div> <!-- swiper-wrapper -->

                        <div class="co-default-swiper-navigation">
                            <div class="swiper-button-prev default-swiper-button-prev">
                            </div>
                            <div class="swiper-button-next default-swiper-button-next">
                            </div>
                        </div> <!-- co-default-swiper-navigation -->

                    </div> <!-- swiper secondary-swiper -->

                </div> <!-- co-swiper-slider -->
            </div><!-- co-default-slider -->
        </div> <!-- container -->
    </section><!-- co-files -->

    <section class="co-editions pt-4 pb-1">

        <div class="container">

            <div class="co-section-title mb-3">
                <p class="title"> إصدارات </p>
                <a href="blog-list.php"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->

            <div class="co-default-slider">
                <div class="co-swiper-slider">
                    <div class="swiper default-four-swiper">

                        <div class="swiper-wrapper">
                            <?php foreach (range(0, 5) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content one-news-style-2">
                                        <a href="blog-single.php">
                                            <img src="assets/images/editions.jpg" class="img-fluid image">
                                        </a>
                                        <a href="blog-single.php">
                                            <p class="color-black title bold mb-1"> تحديات في مواجهة الهوية الدينية </p>
                                        </a>
                                        <div class="d-flex">
                                            <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                            <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div> <!-- swiper-wrapper -->
                        <div class="co-default-swiper-navigation">
                            <div class="swiper-button-prev default-swiper-button-prev">
                            </div>
                            <div class="swiper-button-next default-swiper-button-next">
                            </div>
                        </div> <!-- co-default-swiper-navigation -->

                    </div> <!-- swiper secondary-swiper -->

                </div> <!-- co-swiper-slider -->
            </div><!-- co-default-slider -->
        </div> <!-- container -->
    </section><!-- co-editions -->

    <section class="co-quotes pt-4 pb-4">

        <div class="container">

            <div class="co-section-title mb-3">
                <p class="title"> راوئع المقولات </p>
                <a href="#"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->

            <div class="co-default-slider">
                <div class="co-swiper-slider">
                    <div class="swiper default-four-swiper">

                        <div class="swiper-wrapper">
                            <?php foreach (range(0, 5) as $i) { ?>
                                <div class="swiper-slide">
                                    <div class="slide-content one-news-style-2">
                                        <a href="blog-single.php"><img src="assets/images/quotes.jpg" class="img-fluid image"></a>
                                        <a href="#">
                                            <p class="color-black title bold mb-1"> إنكم تُناوئون أمة قد ضربها الله بالذل والصغار </p>
                                        </a>
                                        <div class="d-flex">
                                            <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                            <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div> <!-- swiper-wrapper -->
                        <div class="co-default-swiper-navigation">
                            <div class="swiper-button-prev default-swiper-button-prev">
                            </div>
                            <div class="swiper-button-next default-swiper-button-next">
                            </div>
                        </div> <!-- co-default-swiper-navigation -->

                    </div> <!-- swiper secondary-swiper -->

                </div> <!-- co-swiper-slider -->
            </div><!-- co-default-slider -->
        </div> <!-- container -->
    </section><!-- co-editions -->

    <div class="co-muslims section-bg-gray py-5 mb-5">
        <div class="container">

            <div class="co-section-title mb-3">
                <p class="title"> مسلمون حول العالم </p>
                <a href="blog-list.php"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->

            <div class="row">

                <div class="col-lg-8">

                    <div class="co-primary-slider mb-3">

                        <div class="co-swiper-slider">

                            <div class="swiper primary-swiper large">
                                <div class="swiper-wrapper">

                                    <?php foreach (range(0, 3) as $i) { ?>
                                        <div class="swiper-slide">
                                            <a href="blog-single.php">
                                                <div class="slide-content one-news-style-1">
                                                    <img src="assets/images/muslims.jpg" class="img-fluid image">
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>

                                </div> <!-- swiper-wrapper -->

                                <div class="swiper-pagination primary-swiper-pagination pagination-bottom"></div>
                            </div> <!-- swiper primary-swiper -->


                        </div> <!-- co-swiper-slider -->
                    </div><!-- co-primary-slider -->

                </div>
                <div class="col-lg-4">







                    <div class="card-colored">

                        <div class="card-header">
                            <p class="m-0"> اقرأ "المجتمع" PDF </p>
                        </div><!-- card-header -->

                        <div class="card-content">
                            <a href="#"><img src="assets/images/pdf-book.jpg" class="img-fluid w-100 image" alt=""></a>
                        </div><!-- card-content -->


                        <div class="co-btns">
                            <a href="#" class="btn btn-sm btn-light"> <i class="fas fa-cloud-download-alt"></i> أرشيف أعداد المجلة </a>
                            <a href="#" class="btn btn-sm btn-dark"> <i class="fas fa-book-open"></i> قراءة </a>
                        </div>



                    </div>



                </div>
            </div>
        </div><!-- container -->
    </div><!-- co-muslims -->


    <section class="co-caricature section-bg-dark-blue py-5">

        <div class="container">

            <div class="co-section-title mb-5">
                <p class="title"> كاريكاتير المجتمع </p>
                <a href="blog-list.php" class="color-white"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->

            <div class="co-default-slider">
                <div class="co-swiper-slider">
                    <div class="swiper default-swiper">

                        <div class="swiper-wrapper">
                            <?php foreach (range(1, 4) as $i) { ?>
                                <div class="swiper-slide">
                                    <a href="blog-single.php">
                                        <div class="slide-content one-news-style-2">
                                            <img src="assets/images/caricature-<?php echo $i ?>.jpg" class="img-fluid image">
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div> <!-- swiper-wrapper -->
                        <div class="co-default-swiper-navigation">
                            <div class="swiper-button-prev default-swiper-button-prev">
                            </div>
                            <div class="swiper-button-next default-swiper-button-next">
                            </div>
                        </div> <!-- co-default-swiper-navigation -->

                    </div> <!-- swiper secondary-swiper -->

                </div> <!-- co-swiper-slider -->
            </div><!-- co-default-slider -->
        </div> <!-- container -->
    </section><!-- co-editions -->

    <section class="banner py-5">
        <div class="container">
            <a href="blog-single.php"><img src="assets/images/banner-02.jpg" class="img-fluid border-radius-30"></a>
        </div>
    </section> <!-- banner -->

    <div class="co-infographic pt-4 pb-4">
        <div class="container">

            <div class="co-section-title mb-5">
                <p class="title"> إنفوجراف </p>
                <a href="blog-list.php" class="color-black"> مشاهدة المزيد <i class="fa fa-chevron-right"></i> </a>
            </div><!-- co-section-title -->

            <div class="row">

                <div class="col-lg-8">

                    <div class="row">
                        <?php foreach (range(0, 3) as $i) { ?>
                            <div class="col-lg-6 mb-4">
                                <a href="blog-single.php">
                                    <div class="one-news-style-1 x-large-image">
                                        <img src="assets/images/infograph<?php echo $i ?>.jpg" class="img-fluid image ">
                                        <div class="details">
                                            <p class="date small mb-0"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                        </div><!-- details -->
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="co-follow-us">

                        <div class="text-center">
                            <h3> تابعنا </h3>
                            <p class="follow-us-text"> اعثر علينا على الوسائط الاجتماعية </p>
                        </div>

                        <ul class="reset-list social-media-icons-colored mb-4">
                            <li><a href="#" class="color-black facebook"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li><a href="#" class="color-black twitter"> <i class="fab fa-x-twitter"></i> </a></li>
                            <li><a href="#" class="color-black youtube"> <i class="fab fa-youtube"></i> </a></li>
                            <li><a href="#" class="color-black instagram"> <i class="fab fa-instagram"></i> </a></li>
                            <li><a href="#" class="color-black telegram"> <i class="fab fa-telegram"></i> </a></li>
                        </ul>

                    </div><!-- co-follow-us -->
                    <div class="co-adv">
                        <a href="blog-list.php"> <img src="assets/images/adv-01.jpg" class="img-fluid border-radius-10 w-100"> </a>
                    </div>
                </div>
            </div>

        </div><!-- container -->
    </div><!-- co-muslims -->

</main> <!-- main -->

<?php include 'layout-footer.php'; ?>