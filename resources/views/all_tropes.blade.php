<div style="display: none"> {{$i=1;}}</div>

<link rel="stylesheet" href="/css/all.min.css">
<link rel="stylesheet" href="/css/bondi.css">

<link rel="stylesheet" href="/css/bootstrap.min.css">
<table class="table table-dark table-striped">    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم الزبون</th>
        <th scope="col">اسم الكتاب</th>
        <th scope="col">تاريخ الاستعارة</th>
        <th scope="col">سعر الاستعارة</th>
        <th scope="col">حذف</th>
     
      </tr>
    </thead>
    <tbody>
    <x-nav/>
        @foreach ($tropes as $trop)
             <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$trop['user_name']}}</td>
        <td>{{$trop['book_name']}}</td>
        <td>{{$trop['tropes_date']}}</td>
        <td>{{$trop['tropes_price']}}</td>
        <td><a class="btn rounded-pill " href="delete_tropes?id_book={{$trop['id_book']}}&id_customer={{$trop['id_customer']}}" style="background-color: #c3202f;color:white">حذف</a></td>
        
        
      </tr>
      <div style="display: none"> {{$i++;}}</div>
        @endforeach
     
     
    </tbody>
  </table>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/all.min.js"></script>