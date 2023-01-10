
{{-- {{
session_start();
$_SESSION['id_customer']=$id_customer;
$_SESSION['user_name']=$user_name;
}} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>library</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bondi.css">
    
</head>

<body>
    <x-nav />
      <div class="landing d-flex justify-content-center align-items-center">
        <div class="text-center text-light " >
          <h1>المكتبة الشاملة</h1>
          <p class="fs-5 text-white-50 mb-4">
           تجد فيها كل ما تحتاجه وأكثر
          </p>
          <a class=" main-btn rounded-pill" href="sign_up">هيا لنبدأ</a>
        </div>
      </div>
      <div class="features  mt-5 mb-4 ">  
        <div class="container">
          <div class="main-title text-center position-relative">
            <i class="fa-solid mb-4 fa-wand-magic-sparkles "></i>
            <h2>تصنيفات الكتب</h2>
            <p class="text-black-50">
            أهم الأصناف
            </p>
          </div>
        </div>
          <div class="row m-lg-5 m-10">
            <div class=" col-md-6 col-lg-4 ">
              <div class="feat text-center lh-lg ">
                <div class="icon-holder  m-3 position-relative">
                  <i class="fa-solid fa-1 position-absolute bottom-0 icon-num  " ></i>
                  <i class="fa-solid fa-pencil icon position-absolute bottom-0 fa-4x"></i>
                </div>
                <h4>
                 إسلامي
                </h4>
                <p class="text-black-50">
                  تجد هنا أشهر كتب الفقه والتفسير والسيرة النبوية الشريفة
                </p>
            </div>
          </div>
          <div class=" col-md-6 col-lg-4 ">
            <div class="feat text-center lh-lg ">
              <div class="icon-holder  m-3 position-relative">
              <i class="fa-solid fa-2 position-absolute bottom-0 icon-num  " ></i>
              <i class="fa-solid fa-tv icon position-absolute bottom-0 fa-4x"></i>
            </div>
                <h4>
                  تعليمي
                </h4>
                <p class="text-black-50">
                  كتب تعليمية للصغار والكبار والتعليم بطريقة سهلة وممتعة
                </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="feat text-center  ">
              <div class="icon-holder  m-3 position-relative">
              <i class="fa-solid fa-3 position-absolute bottom-0 icon-num  " ></i>
              <i class="fa-solid fa-plug icon position-absolute bottom-0 fa-4x"></i>
            </div>
                <h4>
                  كتب علم النفس
                </h4>
                <p class="text-black-50 lh-lg">
                 تجد هناأشهر كتب علم النفس وطريقة التعامل مع الذات ومع الآخرين
                </p>
            </div>
          </div>
        </div>
      </div>
      <div class="our-work mt-10 mb-5">
        <div class="container ">
          <div class="main-title text-center position-relative">
            <i class="fa-solid mb-4 fa-wand-magic-sparkles "></i>
    
            <h2>
            زورونا تجدون كل ما يسركم
            </h2>
          </div>
         
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-20">
              <div class="box d-flex justify-content-center bg-white img-fluid" data-work="رياض الصالحين">
                <img src="img/1.jpg" alt="" >
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box d-flex justify-content-center bg-white" data-work="صحيح البخاري">
                <img src="img/2.jpg" alt="">
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box d-flex justify-content-center bg-white" data-work="كتب تعليمية للكبار">
                <img src="img/3.jpg" alt="">
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box d-flex justify-content-center bg-white" data-work="كتب أدبية">
                <img src="img/4.jpg" alt="">
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box d-flex justify-content-center bg-white"data-work="كتب متنوعة">
                <img src="img/5.jpg" alt="">
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box d-flex justify-content-center bg-white" data-work="كتب تعليمية للصغار">
                <img src="img/6.jpg" alt="">
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box d-flex justify-content-center bg-white" data-work="قصص أنمي للكبار">
                <img src="img/7.jpg" alt="">
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class=" box d-flex justify-content-center bg-white" data-work="قصص أنمي للصغار">
                <img src="img/8.jpg" alt="">
              </div>
            </div>
           
          </div>
          <div class="d-flex justify-content-center mt-5">
            <a class=" main-btn rounded-pill " href="sign_up">أريد المزيد</a>
          </div>
        </div>
      
       
        

      </div>
      <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/all.min.js"></script>
    
    </body>
</html>