<?php include 'layout-header.php'; ?>



<div class="co-breadcrumb py-2 mb-5">
    <div class="container">
        <nav>
            <ol class="breadcrumb mb-0 px-0">
                <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                <li class="breadcrumb-item"><a href="#"> ارسال مقال </a></li>
            </ol>
        </nav>
        <h1 class="h4 bold"> ارسال مقال </h1>
    </div>
</div>


<main class="main pb-5">

    <div class="container">


        <div class="col-md-9 m-auto">


            <h3 class="text-center mb-4"> دوّن مع المجتمع </h3>

            <form>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> اسم المدوّن </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> الجنسية </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> اسم الصحفي </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> رقم الهاتف </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> البريد الإلكتروني </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1"> تعريف شخصي   (٢٥٠ حرفا) </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> رابط الحساب على الفيسبوك </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> رابط الحساب على تويتر </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> رابط الحساب على انستجرام </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                </div> <!-- row -->

                <button type="submit" class="btn btn-primary"> ارسال </button>

            </form>

        </div>

    </div>

</main> <!-- main -->

<?php include 'layout-footer.php'; ?>