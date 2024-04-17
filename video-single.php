<?php include 'layout-header.php'; ?>

<div class="co-breadcrumb py-2 mb-5">
    <div class="container">
        <nav>
            <ol class="breadcrumb mb-0 px-0">
                <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                <li class="breadcrumb-item"><a href="#"> مرئيات </a></li>
                <li class="breadcrumb-item active"> حقائق في وثائق.. واقعة بين الأميري وعبدالناصر </li>
            </ol>
        </nav>
        <h1 class="h4 bold"> حقائق في وثائق.. واقعة بين الأميري وعبدالناصر </h1>
    </div>
</div><!-- co-breadcrumb -->

<main class="main pb-5">

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="co-video mb-4">
                    <iframe width="100%" height="460" src="https://www.youtube.com/embed/YdVyLAeS4NA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div> <!-- co-video -->

                <div class="title-and-views mb-2">
                    <div class="d-block">
                        <h1 class="title h4 mb-0"> حقائق في وثائق.. واقعة بين الأميري وعبدالناصر </h1>
                    </div>
                    <div class="co-views-and-likes d-flex">
                        <div class="co-likes me-2">
                            <p class="bold m-0"> <span>580</span> إعجاب </p>
                        </div>
                        <div class="co-views">
                            <p class="bold m-0"> <span>580</span> مشاهدة </p>
                        </div>
                    </div>
                </div> <!-- title-and-views -->

                <div class="date-and-actions mb-4">
                    <p class="date small color-gray m-0 "> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                    <div class="actions">
                        <a href="#" class="btn btn-sm btn-outline-success me-1"> <i class="fa fa-thumbs-up like"></i> اعجبني </a>
                        <a href="#" class="btn btn-sm btn-outline-danger"> <i class="fa fa-thumbs-down dislike"></i> لم يعجبني </a>
                    </div>
                </div>

                <div class="description">

                    <p>
                        في أواخر العام الماضي، أتمت وكالة الأمم المتحدة لإغاثة وتشغيل اللاجئين الفلسطينيين (أونروا) عامها الـ74، قامت خلالها بتقديم الإغاثة والخدمات الصحية والتعليمية لنحو 6 ملايين لاجئ فلسطيني في الضفة الغربية وقطاع غزة ودول الجوار، ولطالما عانت الوكالة، خاصة في السنوات الأخيرة، من محاولات وضغوطات لحلها.
                    </p>

                    <p>
                        يتم تمويل «الأونروا» بالكامل تقريباً من التبرعات الطوعية التي تقدمها الدول الأعضاء في منظمة الأمم المتحدة، وفي عام 2022م، وطبقاً للأرقام الواردة من الوكالة، بلغت إجمالي تعهدات الوكالة البالغة 1.17 مليار دولار؛ 44.3% منها كانت من الدول الأعضاء في الاتحاد الأوروبي، التي تبرعت بمبلغ 520.3 مليون دولار، بما في ذلك تلك التي أتت من خلال المفوضية الأوروبية، وكانت الولايات المتحدة وألمانيا والاتحاد الأوروبي والسويد أكبر المانحين الأفراد، حيث تبرعوا بنسبة تراكمية بلغت 61.4% من إجمالي تمويل الوكالة، وتصدرت الولايات المتحدة قائمة المانحين بـ 344 مليون دولار، تلتها ألمانيا بمساعدات وصلت الى 202 مليون دولار.
                    </p>


                    <p>وعلى صعيد الدول العربية كانت السعودية في المرتبة الثامنة بين المانحين بـ27 مليون دولار، والكويت في المرتبة التاسعة عشرة بـ12 مليون دولار، ثم قطر في المرتبة العشرين بـ 10.5 ملايين دولار.</p>
                </div>

                <div class="share-this">

                    <h5 class="mb-3"> شارك الفيديو </h5>

                    <ul class="d-flex social-media-links links-lg reset-list">
                        <li class="me-2"> <a href="#" class="link facebook"> <i class="fab  fa-facebook-f"></i> </a> </li>
                        <li class="me-2"> <a href="#" class="link twitter"> <i class="fab  fa-twitter"></i> </a> </li>
                        <li class="me-2"> <a href="#" class="link whatsapp"> <i class="fab  fa-whatsapp"></i> </a> </li>
                        <li class="me-2"> <a href="#" class="link telegram"> <i class="fa  fa-paper-plane"></i> </a> </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-4">
                <div class="co-sidebar">
                    <div class="section-title mb-3">
                        <h2> فيديوهات ذات صلة </h2>
                    </div> <!-- page-title -->

                    <?php foreach (range(0, 4) as $i) { ?>

                        <div class="one-news-style-4 video mb-1">
                            <div class="co-image">
                                <img src="assets/images/media<?php echo $i ?>.jpg" class="img-fluid image">
                                <a href="#" class="overlay">
                                    <i class="fa fa-play"></i>
                                </a> <!-- overlay -->
                            </div> <!-- co-image -->

                            <div class="details">
                                <a href="#" class="bold title"> حقائق في وثائق.. واقعة بين الأميري وعبدالناصر </a>
                                <div class="d-flex">
                                    <p class="date small color-gray me-2"> <i class="fa fa-clock"></i> فبراير 11, 2024 </p>
                                    <p class="views small color-gray"> <i class="fa fa-eye"></i> 150 </p>
                                </div>
                            </div><!-- details -->
                        </div> <!-- one-news-style-4 -->
                    <?php } ?>

                </div><!-- co-sidebar -->
            </div>

        </div> <!-- container -->
    </div>



</main> <!-- main -->

<?php include 'layout-footer.php'; ?>