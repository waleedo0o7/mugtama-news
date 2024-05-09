<?php include 'layout-header.php'; ?>

<div class="co-breadcrumb py-2">
    <div class="container">
        <nav>
            <ol class="breadcrumb mb-0 px-0">
                <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                <li class="breadcrumb-item active"> مرئيات </li>
            </ol>
        </nav>
        <h1 class="h4 bold"> ترجمات المجتمع </h1>
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


    <section class="py-4">

        <div class="container">


            <div class="row">

                <?php foreach (range(0, 5) as $i) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="one-media">
                            <div class="co-image">
                                <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                <a href="video-single.php" class="overlay">
                                    <i class="fa fa-play"></i>
                                </a> <!-- overlay -->
                            </div> <!-- co-image -->
                            <div class="details">
                                <a href="video-single.php" class="title"> الإسراء والمعراج محور قصة المسجد الأقصى وفلسطين </a>
                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>
                            </div><!-- details -->
                            <ul class="reset-list social-media-icons-colored icons-sm icons-start mb-4">
                                <li><a href="#" class="color-black facebook"> <i class="fab fa-facebook-f"></i> </a></li>
                                <li><a href="#" class="color-black twitter"> <i class="fab fa-x-twitter"></i> </a></li>
                                <li><a href="#" class="color-black youtube"> <i class="fab fa-youtube"></i> </a></li>
                                <li><a href="#" class="color-black instagram"> <i class="fab fa-instagram"></i> </a></li>
                                <li><a href="#" class="color-black telegram"> <i class="fab fa-telegram"></i> </a></li>
                            </ul>

                        </div> <!-- one-media -->
                    </div>

                <?php } ?>

            </div>


        </div> <!-- container -->
    </section> <!-- -->

</main> <!-- main -->

<?php include 'layout-footer.php'; ?>