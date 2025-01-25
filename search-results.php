<?php include 'layout-header.php'; ?>


<div class="co-breadcrumb py-2 mb-5">

    <section class="p-4 search-section">

        <div class="col-md-6 m-auto">
            <h2 class="text-center mb-3"> نتائج البحث عن " فلسطين " </h2>
            <div class="form-group co-input-with-btn mb-0">
                <input type="text" class="form-control search bg-white" placeholder="بحث" value="فلسطين">
                <a href="video-list.php" class="btn btn-primary action-btn button"> بحث </a>
            </div>
        </div>
    </section>

</div>

<main class="main search-results">

    <div class="container">

        <div class="tap-buttons-wrapper mb-5 d-none">

            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#" class="btn btn-outline-primary active btn-lg"> مقالات </a>
                <a href="#" class="btn btn-outline-primary btn-lg"> ملفات </a>
                <a href="#" class="btn btn-outline-primary btn-lg"> اعداد </a>
                <a href="#" class="btn btn-outline-primary btn-lg"> اقوال مأثورة </a>
                <a href="#" class="btn btn-outline-primary btn-lg"> كاريكاتير </a>
                <a href="#" class="btn btn-outline-primary btn-lg"> انفوجراف </a>
            </div>

        </div><!-- tap-buttons-wrapper -->


        <div class="tap-buttons-wrapper mb-5">

            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#" class="btn btn-outline-primary ajax-data active" data-related-wrapper="articles-wrapper"> المقالات </a>
                <a href="#" class="btn btn-outline-primary ajax-data" data-related-wrapper="visuals-wrapper"> مرئيات </a>
                <a href="#" class="btn btn-outline-primary ajax-data" data-related-wrapper="infographics-wrapper"> انفوجرافيك </a>
                <a href="#" class="btn btn-outline-primary ajax-data" data-related-wrapper="caricatures-wrapper"> الكاريكاتير </a>
            </div>

        </div>




        <div class="tap-content-wrapper">

            <div class="result-section-wrapper">
                <div class="co-blogs-list mb-5">
                    <div class="row">

                        <?php foreach (range(0, 11) as $i) { ?>
                            <div class="col-lg-4">
                                <div class="one-news-style-2 blog mb-2">
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
                </div> <!-- co-blogs-list -->
            </div>

        </div><!-- tap-content-wrapper -->




        <br /><br /><br /><br />




        <!-- THIS CONTENT TO BE IN tap-content-wrapper DIV  -->
        <div class="result-section-wrapper">

            <div class="row">
                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-lg-4">
                        <div class="one-news-style-2 file mb-2">
                            <a href="blog-single.php?dir=rtl"> <img src="assets/images/file.jpg" class="img-fluid image"> </a>
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
        </div>

        <!-- THIS CONTENT TO BE IN tap-content-wrapper DIV  -->
        <div class="result-section-wrapper">

            <div class="row">
                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-lg-4">
                        <div class="one-news-style-2 edition mb-2">
                            <a href="blog-single.php?dir=rtl"> <img src="assets/images/editions.jpg" class="img-fluid image"> </a>
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
        </div>

        <!-- THIS CONTENT TO BE IN tap-content-wrapper DIV  -->
        <div class="result-section-wrapper">

            <div class="row">
                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-lg-4">
                        <div class="one-news-style-2 quote mb-2">
                            <a href="blog-single.php?dir=rtl"> <img src="assets/images/quotes.jpg" class="img-fluid image"> </a>
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
        </div>

        <!-- THIS CONTENT TO BE IN tap-content-wrapper DIV  -->
        <div class="result-section-wrapper">

            <div class="row">
                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-lg-4">
                        <div class="one-news-style-2 caricature mb-2">
                            <a href="blog-single.php?dir=rtl"> <img src="assets/images/caricature-<?php echo $i + 1 ?>.jpg" class="img-fluid image"> </a>
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
        </div>

        <!-- THIS CONTENT TO BE IN tap-content-wrapper DIV  -->
        <div class="result-section-wrapper">

            <div class="row">
                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-lg-4">
                        <div class="one-news-style-2 infograph mb-2">
                            <a href="blog-single.php?dir=rtl"> <img src="assets/images/infograph<?php echo $i + 1 ?>.jpg" class="img-fluid image"> </a>
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
        </div>


    </div>

</main>

<?php include 'layout-footer.php'; ?>