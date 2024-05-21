<?php include 'layout-header.php'; ?>

<div class="co-breadcrumb py-2">
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

    <section class="categories bg-primary py-4  mb-5">
        <div class="container">
            <div class="section-title mb-4">
                <h2 class="color-white text-center"> الأقسام </h2>
            </div> <!-- section-title -->

            <div class="row mb-3">

                <div class="col-lg-10 m-auto">
                    <div class="categories-btns-wrapper">
                        <a href="video-list.php" class="btn btn-light w-100 bold">
                            <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">
                            وثائقي
                        </a>

                        <a href="video-list.php" class="btn btn-light w-100 bold">
                            <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">
                            برامج إعلامية
                        </a>

                        <a href="video-list.php" class="btn btn-light w-100 bold">
                            <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">
                            ترجمات المجتمع
                        </a>

                        <a href="video-list.php" class="btn btn-light w-100 bold">
                            <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">
                            أعلام
                        </a>


                        <a href="video-list.php" class="btn btn-light w-100 bold">
                            <img src="assets/images/cat-icon-1.png" class=" img-fluid category-icon">
                            قصة خبرية
                        </a>



                    </div>
                </div>
            </div>
        </div>
    </section><!-- categories -->

    <section class="pb-4">
        <div class="col-md-5 m-auto">
            <h4 class="text-center mb-3"> ابحث في مرئيات </h4>
            <div class="form-group co-input-with-btn mb-0">
                <input type="text" class="form-control search" placeholder="بحث">
                <a href="video-list.php" class="btn btn-primary action-btn button"> بحث </a>
            </div>
        </div>
    </section>

    <section class="py-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2> الأكثر مشاهدة </h2>
            </div> <!-- section-title -->

            <div class="row media-items-row">

                <?php foreach (range(0, 3) as $i) { ?>
                    <div class="col-md-6 mb-3">
                        <div class="one-media">
                            <div class="co-image">
                                <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                <a href="video-single.php" class="overlay">
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
                <a href="video-list.php" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- -->

    <section class="section-bg-gray py-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2> وثائقي </h2>
            </div> <!-- section-title -->

            <div class="row media-items-row">

                <?php foreach (range(0, 3) as $i) { ?>
                    <div class="col-md-6 mb-3">
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
                <a href="video-list.php" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- -->

    <section class="py-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2> برامج إعلامية</h2>
            </div> <!-- section-title -->


            <div class="row media-items-row">

                <?php foreach (range(0, 3) as $i) { ?>
                    <div class="col-md-6 mb-3">
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
                <a href="video-list.php" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- -->

    <section class="section-bg-gray py-4">

        <div class="container">

            <div class="section-title mb-4">
                <h2>ترجمات المجتمع </h2>
            </div> <!-- section-title -->

            <div class="row media-items-row">

                <?php foreach (range(0, 3) as $i) { ?>
                    <div class="col-md-6 mb-3">
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
                <a href="video-list.php" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- -->

    <section class="py-4">
        <div class="container">

            <div class="section-title mb-4">
                <h2> اعلام </h2>
            </div> <!-- section-title -->

            <div class="row media-items-row">

                <?php foreach (range(0, 3) as $i) { ?>
                    <div class="col-md-6 mb-3">
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
                <a href="video-list.php" class="btn btn-primary"> مشاهدة المزيد </a>
            </div> <!-- "text-center -->

        </div> <!-- container -->
    </section> <!-- -->

</main> <!-- main -->

<?php include 'layout-footer.php'; ?>