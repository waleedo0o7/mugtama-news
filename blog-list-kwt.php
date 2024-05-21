<?php include 'layout-header.php'; ?>

<div class="co-breadcrumb py-2 mb-5">
    <div class="container">

        <div class="d-flex">
            <div class="d-block me-3">
                <nav>
                    <ol class="breadcrumb mb-0 px-0">
                        <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                        <li class="breadcrumb-item"><a href="#"> اخبار الكويت </a></li>
                    </ol>
                </nav>
                <h1 class="h4 bold"> اخبار الكويت </h1>
            </div>
            <img src="assets/images/kwt-top.png" class="img-fluid breadcrumb-image-kwt">
        </div>

    </div>
</div><!-- co-breadcrumb -->

<main class="main pb-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="co-related-blogs mb-5">

                    <div class="row">

                        <?php foreach (range(0, 11) as $i) { ?>
                            <div class="col-sm-6">
                                <div class="one-news-style-2 mb-2">
                                    <a href="blog-single.php?dir=rtl"> <img src="assets/images/blog.jpg" class="img-fluid image"> </a>
                                    <a href="blog-single.php?dir=rtl" class="title bold mb-1 color-black"> 10 عبادات مهمة في فصل الشتاء عبادات مهمة في فصل الشتاء عبادات مهمة في فصل الشتاء عبادات مهمة في فصل الشتاءعبادات مهمة في فصل الشتاء عبادات مهمة في فصل الشتاء </a>
                                    <div class="d-flex">
                                        <p class="mb-2 date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                        <p class="mb-2 views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                    </div>



                                    <ul class="reset-list social-media-icons-colored icons-sm icons-start mb-4">
                                        <li><a href="#" class="color-black facebook"> <i class="fab fa-facebook-f"></i> </a></li>
                                        <li><a href="#" class="color-black twitter"> <i class="fab fa-x-twitter"></i> </a></li>
                                        <li><a href="#" class="color-black youtube"> <i class="fab fa-youtube"></i> </a></li>
                                        <li><a href="#" class="color-black instagram"> <i class="fab fa-instagram"></i> </a></li>
                                        <li><a href="#" class="color-black telegram"> <i class="fab fa-telegram"></i> </a></li>
                                        <li><a href="#" class="color-black whatsapp"> <i class="fab fa-whatsapp"></i> </a></li>
                                    </ul>


                                </div>
                            </div>
                        <?php } ?>



                    </div>

                </div> <!-- co-related-blogs -->

            </div>

            <div class="col-lg-4">

                <div class="category-banner-wrapper mb-4">
                    <img src="assets/images/banner-kwt-2.jpg" class="img-fluid border-radius-10">
                </div>

                <div class="co-sidebar">

                    <div class="co-follow-us">

                        <div class="text-center">

                            <h3 class=""> تابعنا </h3>
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

                    <div class="co-section-title mb-3">
                        <p class="title"> أحدث المنشورات </p>
                    </div><!-- co-section-title -->

                    <div class="latest-news-list mb-3">


                        <?php foreach (range(0, 4) as $i) { ?>
                            <div class="one-news-style-4 p-2">
                                <a href="blog-single.php" class="me-3">
                                    <img src="assets/images/mostest.jpg" class="img-fluid image">
                                </a>
                                <div class="details">
                                    <a href="blog-single.php" class="bold title"> حقائق في وثائق.. واقعة بين الأميري وعبدالناصر </a>
                                    <div class="d-flex">
                                        <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                        <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                    </div>
                                </div><!-- details -->
                            </div>
                        <?php } ?>


                    </div><!-- latest-news-list -->




                    <div class="co-adv">
                        <a href="#" class=""> <img src="assets/images/adv-01.jpg" class="img-fluid border-radius-10 w-100"> </a>
                    </div>


                </div><!-- co-sidebar -->
            </div>

        </div>

    </div>

</main> <!-- main -->

<?php include 'layout-footer.php'; ?>