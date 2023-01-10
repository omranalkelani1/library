
<link rel="stylesheet" href="/css/all.min.css">
<link rel="stylesheet" href="/css/bondi.css">

<link rel="stylesheet" href="/css/all_books.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<x-nav />
{{-- <table class="table table-dark table-striped">    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">صورة الكتاب </th>
        <th scope="col">اسم الكتاب</th>
        <th scope="col">مؤلف الكتاب </th>
        <th scope="col">تاريخ النشر</th>
        <th scope="col">سعر الاستعارة</th>
        <th scope="col">سعر الكتاب </th>
        <th scope="col">استعارة</th>
      
     
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <th scope="row">{{$i}}</th>
        <td> <img src="img/book/{{$book['photo']}}" class="w-25 h-25" alt=""> </td>
        <td>{{$book['book_name']}}</td>
        <td>{{$book['book_author']}}</td>
        <td>{{$book['publication_date']}}</td>
        <td>{{$book['tropes_price']}}</td>
        <td>{{$book['book_price']}}</td>
        <td><a class="btn rounded-pill " href="add_tropes?book_name={{$book['book_name']}}
          &book_id={{$book['id']}}&tropes_price={{$book['tropes_price']}}" style="background-color: #c3202f;color:white">استعارة</a></td>
        
          
        </tr> --}}
        @if (isset($_GET['search_value'])&&$_GET['search_value']!=null)
        <div class="row">
          @foreach ($books as $book)
          @if ( $_GET['search_value']==$book['book_name']||$_GET['search_value']==$book['book_author'])
              
          {{$check=false;}}
          @foreach ($tropes as $trop)
          @if ($trop['id_customer']==$_SESSION['id_customer'] && $trop['id_book']==$book['id'])
          <div style="display: none">  {{$check=true;}}</div>
          @break;
          @endif
          @endforeach
  
          @if ($check==false )
          
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
                          تاريخ النشر : {{$book['publication_date']}} <br>
                          الفئة: @foreach ($categores as $cate)
                          @if ($book['id_category']==$cate['id'])
                          {{$cate['name']}}
                             @endif
                             @endforeach
                            </div>
                            <div class="card-text price ">
                              ل.س {{$book['tropes_price']}}  
                              
                            </div>
                            @if($_SESSION['user_name']=="root")
                            <div class="card-text price ">
                              ل.س {{$book['book_price']}}  
                              
                            </div>
                                      <div class="d-flex ">
                                        <a  href="delete_book?book_id={{$book['id']}}" class="card-button delete-btn"> حذف</a>
                                        <a  href="update_book?book_id={{$book['id']}}" class="card-button update-btn"> تعديل</a>
                                       @else
                                       <a  href="add_tropes?book_name={{$book['book_name']}}
                                      &book_id={{$book['id']}}&tropes_price={{$book['tropes_price']}}" class="card-button"
                                      style="text-decoration: none"> استعارة</a>
                                        @endif
                                      </div>
                          </div>
                        </div>
                    @endif
                    @endif
                    @endforeach
        
        </div>
     @else
         
       <ul class="d-flex list-unstyled justify-content-center   category  align-items-center  mt-5 mb-5"
        >
        <li class="  category-btn rounded-pill"   > <a href="/all_books?cate_id=0">الكل</a>  </li>
         @foreach ($categores as $cate)
           <li class=" category-btn rounded-pill m-2"> <a href="/all_books?cate_id={{$cate['id'] ;}} ">{{$cate['name'];}}</a>  </li>
         @endforeach
        </ul>
        @if (isset($_GET['cate_id'])==false || $_GET['cate_id']==0 )
     
            
        <div class="row">
        @foreach ($books as $book)
    
            <div class="col-md-3"style="direction:rtl;margin-top:50px; ">
              <div class="card-sl">
                      <div class="card-image">
                        <img src="img/book/{{$book['photo']}}">
                      </div>
                    
                      <div class="card-heading">
                        {{$book['book_name'];}}
                      </div>
                      <div class="card-text">
                        اسم المؤلف : {{$book['book_author']}}<br>
                        تاريخ النشر : {{$book['publication_date']}} <br>
                       الفئة: @foreach ($categores as $cate)
                       @if ($book['id_category']==$cate['id'])
                       {{$cate['name'];}}
                           @endif
                           @endforeach
                          </div>
                          <div class="card-text price  ">
                           سعر الاستعارة  {{$book['tropes_price'];}}  ل.س
                         
                          </div>
                          <br>
                          @if($_SESSION['user_name']=="root")
                          <div class="card-text price mb-2">
                          سعر الكتاب  {{$book['book_price']}}   ل.س
                            
                          </div><br>
                          <div class="d-flex">
                            <a  href="delete_book?book_id={{$book['id']}}" class="card-button delete-btn"> حذف</a>
                            <a  href="update_book?book_id={{$book['id']}}" class="card-button update-btn"> تعديل</a>
                          </div>
                           @else
                           <div>
                           <a  href="add_tropes?book_name={{$book['book_name']}}
                          &book_id={{$book['id']}}&tropes_price={{$book['tropes_price']}}" class="card-button"
                          style="text-decoration: none"> استعارة</a>
                           </div>
                            @endif
                          </div>
                    </div>
                    
                    
                    @endforeach
                  </div>
                </div>
                    
                  @else 
                  <div class="row">
                    @foreach ($books as $book)
                    @if ( $_GET['cate_id']==$book['id_category'])
                        
                    {{$check=false;}}
                    @foreach ($tropes as $trop)
                    @if ($trop['id_customer']==$_SESSION['id_customer'] && $trop['id_book']==$book['id'])
                    <div style="display: none">  {{$check=true;}}</div>
                    @break;
                    @endif
                    @endforeach
            
                    @if ($check==false )
                    
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
                                    تاريخ النشر : {{$book['publication_date']}} <br>
                                    الفئة: @foreach ($categores as $cate)
                                    @if ($book['id_category']==$cate['id'])
                                    {{$cate['name']}}
                                       @endif
                                       @endforeach
                                      </div>
                                      <div class="card-text price ">
                                        ل.س {{$book['tropes_price']}}  
                                      </div>
                                      @if($_SESSION['user_name']=="root")
                                      <div class="card-text price ">
                                        ل.س {{$book['book_price']}}  
                                        
                                      </div>
                                        <div class="d-flex">
                                          <a  href="delete_book?book_id={{$book['id']}}" class="card-button delete-btn"> حذف</a>
                                          <a  href="update_book?book_id={{$book['id']}}" class="card-button update-btn"> تعديل</a>
                                        </div>
                                       @else
                                       <a  href="add_tropes?book_name={{$book['book_name']}}
                                      &book_id={{$book['id']}}&tropes_price={{$book['tropes_price']}}" class="card-button"
                                      style="text-decoration: none"> استعارة</a>
                                        @endif
                                    </div>
                                  </div>
                              @endif
                              @endif
                              @endforeach
                  </div>
                  </div>
                  @endif
                 
                     @endif 
                
                      
                 
                 
                
              
                <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/all.min.js"></script>