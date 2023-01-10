<link rel="stylesheet" href="/css/all.min.css">

<link rel="stylesheet" href="/css/all_books.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<x-nav/>
 <div class="row">
@foreach ($my_favourites as $book)
    


  
<div class="col-md-3"style="direction:rtl;margin-top:50px; ">
  <div class="card-sl">
    <div class="card-image">
      <img src="img/book/{{$book['photo']}}">
    </div>
    
    <div class="card-heading">
      {{$book['book_name']}}
        </div>
        <div class="card-text">
            اسم المؤلف : {{$book['book_author']}}<br>
            تاريخ النشر : {{$book['publication_date']}} 
            
        </div>
        <div class="card-text price ">
            ل.س {{$book['tropes_price']}}  
            
        </div>
        <a  href="/update_tropes?id_book={{$book['id_book']}}" style="background-color: rgb(255, 0, 98);text-decoration:none" class="card-button"> ازالة من المفضلة</a>
          </div>
</div>
  
@endforeach
</div>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/all.min.js"></script>  
