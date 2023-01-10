<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=", initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update book</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/css/library.css"> --}}
</head>
<body>
    <x-nav/>
   
    <div class="container">
        <hr>
        
        
        
        
        
        <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">update Book</h4>
            <p class="text-center">تعديل كتاب</p>
           @foreach ($books as $book)
               @if ($book['id']==$_GET['book_id'])
                   
               <form action="update_book" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" style="display: none" value={{$_GET['book_id']}}>
                <div class="form-group input-group  d-flex justify-content-center align-items-center mb-3 " >
                    <img src="/img/book/{{$book['photo']}}" class="img-flouid " style="max-height: 70px ;border-radius:20px"  alt="">                
                    </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                    </div>
                    <input name="book_name" class="form-control" value={{$book['book_name']}}  type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                    </div>
                    <input name="book_author" class="form-control" value={{$book['book_author']}} placeholder="auther name" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-book fa-1x"></i> </span>
                    </div>
                    
                    <div class="input-group-prepend">
                        <input name="book_price" class="form-control" value={{$book['book_price']}} placeholder="book price" type="number">
                    </div></div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                        </div>
                    <input name="tropes_price" class="form-control" value={{$book['tropes_price']}} placeholder="tropes price" type="number">
                </div>
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                    </div>
                    <input name="publication_date" class="form-control" value={{$book['publication_date']}} placeholder="publication_date" type="date">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                </div>
                <input name="photo" class="form-control" value{{$book['photo']}}  type="file">
            </div>
            <select class="form-control " name="id_category">
                @foreach ($categores as $cate)
                <option value="{{$cate['id']}}" @if ($cate['id']==$book['id_category'])
                selected
                @endif >{{$cate['name']}}</option>             
                @endforeach
                
            </select>
            <button type="submit" class="btn btn-primary btn-block "> update </button>
            
        </form>
    </article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
@endif
@endforeach
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/all.min.js"></script>
</body>
</html>