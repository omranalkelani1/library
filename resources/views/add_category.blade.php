<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=", initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add category</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/library.css">
    <link rel="stylesheet" href="/css/sign_up.css">
</head>
<body>
    <x-nav/>
   
    <div class="container">
        <hr>
        
        
        
        
        
        <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Add category</h4>
            <p class="text-center">إضافة تصنيف</p>
           
            <form action="add_category" method="POST">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                     </div>
                    <input name="name" class="form-control" placeholder="category name" type="text">
                </div>
            
                <button type="submit" class="btn btn-primary btn-block " style="bottom: 360px"> Add category  </button>
                                              
        </form>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--container end.//-->
        
        <br><br>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/all.min.js"></script>
</body>
</html>