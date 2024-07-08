<?php include 'layout-header.php'; ?>



<div class="co-breadcrumb py-2 mb-5">
    <div class="container">
        <nav>
            <ol class="breadcrumb mb-0 px-0">
                <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                <li class="breadcrumb-item"><a href="#"> تسجيل مراسل جديد </a></li>
            </ol>
        </nav>
    </div>
</div>


<main class="main pb-5">

    <div class="container">


        <div class="col-md-6 m-auto">


            <h3 class="text-center mb-4"> تسجيل الدخول </h3>

            <form>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> الايميل </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> كلمة السر </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                </div> <!-- row -->

                <button type="submit" class="btn btn-primary" disabled> ارسال </button>

            </form>

        </div>

    </div>

</main> <!-- main -->

<?php include 'layout-footer.php'; ?>