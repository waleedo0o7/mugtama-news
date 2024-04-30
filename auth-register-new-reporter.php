<?php include 'layout-header.php'; ?>



<div class="co-breadcrumb py-2 mb-5">
    <div class="container">
        <nav>
            <ol class="breadcrumb mb-0 px-0">
                <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                <li class="breadcrumb-item"><a href="#"> تسجيل مراسل جديد </a></li>
            </ol>
        </nav>
        <h1 class="h4 bold"> تسجيل مراسل جديد </h1>
    </div>
</div>


<main class="main pb-5">

    <div class="container">


        <div class="col-md-9 m-auto">


            <h3 class="text-center mb-4"> قم بتسجيل كافة بيانات حسابك لدينا </h3>

            <form>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> اسم الكاتب </label>
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
                            <label for="exampleInput"> بلد الإقامة </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> نوع المشاركة </label>
                            <select class="custom-select">
                                <option selected> نوع المشاركة </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> النافذة </label>
                            <select class="custom-select">
                                <option selected> النافذة </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <p class="lead"> فى حالة إختيار الحساب يرجى ملىء البيانات البنكية </p>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> الاسم بالكامل ( مطابق للهوية ) </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> اسم المستفيد بالحساب البنكي- باللغة الانجليزية </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> رقم حساب المستفيد البنكي </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> رقم حساب المستفيد/ IBAN </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> اسم البنك </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> اسم البنك - بالانجليزية </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> عملة الحساب </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> اسم الفرع - بالانجليزية </label>
                            <input type="text" class="form-control" id="exampleInput">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="exampleInput"> رمز السويفت أو رقم وعنوان الفرع: </label>
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
                            <label for="exampleInput"> إيميل التواصل </label>
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