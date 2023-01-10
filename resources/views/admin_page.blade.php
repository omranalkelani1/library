<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin.css">
    {{-- <link rel="stylesheet" href="/css/bondi.css">
    <link rel="stylesheet" href="/css/library.css"> --}}
</head>
<body>
    <x-nav/>
     <div class="row d-flex justify-content-center align-items-center "> 
    {{-- <div class="w-100 body"> --}}
        <div class=" col-lg-6">
            <a class=" my_btn  rounded-pill " href="add_category">إضافة تصنيق جديد</a>
    
    </div>
    <div class="col-lg-6 ">

        <a class=" my_btn rounded-pill " href="add_book">إضافة كتاب جديد</a>
    </div>
    <div class="col-lg-6">
        <a class=" my_btn rounded-pill mt-3" href="all_tropes">كل الاستعارات</a>

    </div>
    <div class="col-lg-6">
        <a class=" my_btn rounded-pill mt-3" href="all_books">كل الكتب</a>

    </div>
</div>
     {{-- </div> --}}
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/all.min.js"></script>
</body>
</html>