<?php include 'layout-header.php'; ?>

<div class="co-breadcrumb py-2 mb-5">
    <div class="container">
        <nav>
            <ol class="breadcrumb mb-0 px-0">
                <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                <li class="breadcrumb-item active"> مرئيات </li>
            </ol>
        </nav>
        <h1 class="h4 bold"> مرئيات </h1>
    </div>
</div><!-- co-breadcrumb -->

<main class="main pb-5">

    <section class="for-you pb-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2> فيديوهات مميزة </h2>
            </div> <!-- page-title -->

            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media5.jpg" class="img-fluid image">
                            <a href="video-single.php?dir=rtl" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="video-single.php?dir=rtl" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>
            </div> <!-- row -->

            <div class="row">
                <?php foreach (range(0, 3) as $i) { ?>
                    <div class="col-md-3">
                        <div class="one-media">
                            <div class="co-image">
                                <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                <a href="video-single.php?dir=rtl" class="overlay">
                                    <i class="fa fa-play"></i>
                                </a> <!-- overlay -->
                            </div> <!-- co-image -->
                            <div class="details">
                                <a href="video-single.php?dir=rtl" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>
                            </div><!-- details -->
                        </div> <!-- one-media -->
                    </div>
                <?php } ?>
            </div> <!-- row -->

            <div class="text-center pt-4">
                <a href="video-list.php?dir=rtl" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->

    </section> <!-- for-you -->

    <section class="mostest-views section-bg-gray py-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2> الأكثر مشاهدة </h2>
            </div> <!-- page-title -->


            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media5.jpg" class="img-fluid image">
                            <a href="#" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>

                <div class="col-md-6 mb-3">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media6.jpg" class="img-fluid image">
                            <a href="#" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>

                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="one-media">
                            <div class="co-image">
                                <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                <a href="#" class="overlay">
                                    <i class="fa fa-play"></i>
                                </a> <!-- overlay -->
                            </div> <!-- co-image -->
                            <div class="details">
                                <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>
                            </div><!-- details -->
                        </div> <!-- one-media -->
                    </div>

                <?php } ?>

            </div>

            <div class="text-center pt-4">
                <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- mostest-views -->

    <section class="categories bg-primary py-4">
        <div class="container">
            <div class="section-title mb-4">
                <h2 class="color-white"> الأقسام </h2>
            </div> <!-- page-title -->

            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="row">


                        <div class="col-sm-3 col-6 mb-4"> <a href="#" class="btn btn-light w-100 bold">

                                <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">

                                وثائقي

                            </a> </div>

                        <div class="col-sm-3 col-6 mb-4"> <a href="#" class="btn btn-light w-100 bold">


                                <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">

                                فيديو جراف </a> </div>

                        <div class="col-sm-3 col-6 mb-4"> <a href="#" class="btn btn-light w-100 bold">


                                <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">

                                فيديوهات مترجمة </a> </div>

                        <div class="col-sm-3 col-6 mb-4"> <a href="#" class="btn btn-light w-100 bold">


                                <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">

                                برامج تليفزيونية </a> </div>

                        <div class="col-sm-3 col-6 mb-4"> <a href="#" class="btn btn-light w-100 bold">


                                <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">

                                رموز كويتية </a> </div>

                        <div class="col-sm-3 col-6 mb-4"> <a href="#" class="btn btn-light w-100 bold">


                                <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">

                                لقائات و حوارات </a> </div>

                        <div class="col-sm-3 col-6 mb-4"> <a href="#" class="btn btn-light w-100 bold">


                                <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">

                                ترجمات المجتمع </a> </div>



                        <div class="col-sm-3 col-6 mb-4"> <a href="#" class="btn btn-light w-100 bold">


                                <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">

                                قصة خبرية </a> </div>



                    </div>
                </div>
            </div>
        </div>
    </section><!-- categories -->

    <section class="mostest-views py-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2> وثائقي </h2>
            </div> <!-- page-title -->


            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media5.jpg" class="img-fluid image">
                            <a href="#" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>

                <div class="col-md-6 mb-3">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media6.jpg" class="img-fluid image">
                            <a href="#" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>

                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="one-media">
                            <div class="co-image">
                                <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                <a href="#" class="overlay">
                                    <i class="fa fa-play"></i>
                                </a> <!-- overlay -->
                            </div> <!-- co-image -->
                            <div class="details">
                                <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>
                            </div><!-- details -->
                        </div> <!-- one-media -->
                    </div>

                <?php } ?>

            </div>

            <div class="text-center pt-4">
                <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- mostest-views -->

    <section class="mostest-views py-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2> فيديو جراف </h2>
            </div> <!-- page-title -->


            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media5.jpg" class="img-fluid image">
                            <a href="#" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>

                <div class="col-md-6 mb-3">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media6.jpg" class="img-fluid image">
                            <a href="#" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>

                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="one-media">
                            <div class="co-image">
                                <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                <a href="#" class="overlay">
                                    <i class="fa fa-play"></i>
                                </a> <!-- overlay -->
                            </div> <!-- co-image -->
                            <div class="details">
                                <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>
                            </div><!-- details -->
                        </div> <!-- one-media -->
                    </div>

                <?php } ?>

            </div>

            <div class="text-center pt-4">
                <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- mostest-views -->

    <section class="mostest-views py-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2> فيديوهات مترجمة </h2>
            </div> <!-- page-title -->

            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media5.jpg" class="img-fluid image">
                            <a href="#" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>

                <div class="col-md-6 mb-3">
                    <div class="one-media">
                        <div class="co-image">
                            <img src="assets/images/media6.jpg" class="img-fluid image">
                            <a href="#" class="overlay">
                                <i class="fa fa-play"></i>
                            </a> <!-- overlay -->
                        </div> <!-- co-image -->
                        <div class="details">
                            <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                            <div class="d-flex">
                                <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                            </div>
                        </div><!-- details -->
                    </div> <!-- one-media -->
                </div>

                <?php foreach (range(0, 2) as $i) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="one-media">
                            <div class="co-image">
                                <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                <a href="#" class="overlay">
                                    <i class="fa fa-play"></i>
                                </a> <!-- overlay -->
                            </div> <!-- co-image -->
                            <div class="details">
                                <a href="#" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>
                            </div><!-- details -->
                        </div> <!-- one-media -->
                    </div>

                <?php } ?>

            </div>

            <div class="text-center pt-4">
                <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- mostest-views -->

</main> <!-- main -->

<?php include 'layout-footer.php'; ?>