<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=", initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add book</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/sign_up.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/css/library.css"> --}}
</head>
<body>
    <x-nav/>
   
    <div class="container">
        
        
        
        
        
        
        <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Add Book</h4>
            <p class="text-center">إضافة كتاب</p>
           
            <form action="add_book" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                     </div>
                    <input name="book_name" class="form-control" placeholder="book name" type="text">
                </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                 </div>
                <input name="book_author" class="form-control" placeholder="auther name" type="text">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book fa-1x"></i> </span>
                 </div>
              
                <input name="book_price" class="form-control" placeholder="book price" type="number">
        </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                 </div>
                <input name="tropes_price" class="form-control" placeholder="tropes price" type="number">
            </div>
        
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                 </div>
                <input name="publication_date" class="form-control" placeholder="publication_date" type="date">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                 </div>
                <input name="photo" class="form-control"  type="file">
            </div>
            <select class="form-control " name="id_category">
            @foreach ($categores as $cate)
                 <option value="{{$cate['id']}}">{{$cate['name']}}</option>             
            @endforeach
                 
                </select>
                <button type="submit" class="btn btn-primary btn-block "> Add Book  </button>
                                              
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