<?php include 'layout-header.php'; ?>


<div class="co-breadcrumb py-2 mb-5">
    <div class="container">
        <nav>
            <ol class="breadcrumb mb-0 px-0">
                <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                <li class="breadcrumb-item"><a href="#"> الكتاب </a></li>
            </ol>
        </nav>
        <h1 class="h4 bold"> الكتاب </h1>
    </div>
</div>


<main class="main pb-5">

    <div class="container">

        <div class="filter-by-chars d-flex mb-5 justify-content-center align-items-center">
            <div class="chars-wrapper mx-3">
                <a href="#" class="one-chart"> الكل </a>
                <a href="#" class="one-chart"> أ </a>
                <a href="#" class="one-chart"> ب </a>
                <a href="#" class="one-chart"> ت </a>
                <a href="#" class="one-chart active"> ث </a>
                <a href="#" class="one-chart"> ج </a>
                <a href="#" class="one-chart"> ح </a>
                <a href="#" class="one-chart"> خ </a>
                <a href="#" class="one-chart"> د </a>
                <a href="#" class="one-chart"> ذ </a>
                <a href="#" class="one-chart"> ر </a>
                <a href="#" class="one-chart"> ز </a>
                <a href="#" class="one-chart"> س </a>
                <a href="#" class="one-chart"> ش </a>
                <a href="#" class="one-chart"> ص </a>
                <a href="#" class="one-chart"> ض </a>
                <a href="#" class="one-chart"> ط </a>
                <a href="#" class="one-chart"> ظ </a>
                <a href="#" class="one-chart"> ع </a>
                <a href="#" class="one-chart"> غ </a>
                <a href="#" class="one-chart"> ف </a>
                <a href="#" class="one-chart"> ق </a>
                <a href="#" class="one-chart"> ك </a>
                <a href="#" class="one-chart"> ل </a>
                <a href="#" class="one-chart"> م </a>
                <a href="#" class="one-chart"> ن </a>
                <a href="#" class="one-chart"> هـ </a>
                <a href="#" class="one-chart"> و </a>
                <a href="#" class="one-chart"> ي </a>
            </div>
        </div><!-- filter-by-chars -->


        <div class="row">

            <?php foreach (range(0, 11) as $i) { ?>
                <div class="col-sm-6 col-md-3 col-lg-2 mb-5">

                    <div class="author-card">

                        <img src="assets/images/author.jpg" class="img-fluid image mb-1 author-image-in-card" alt="">

                        <a href="show-author-details.php" class="name"> د.أشرف دوابه </a>

                    </div><!-- author-card -->

                </div> <!-- col -->
            <?php } ?>
        </div>

    </div>

</main> <!-- main -->

<?php include 'layout-footer.php'; ?>