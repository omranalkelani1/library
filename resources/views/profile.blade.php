
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>profile</title>
	<link rel="stylesheet" href="/css/sign_up.css">
	
	<link rel="stylesheet" href="/css/all.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
	<x-nav/>
	<div class="container">
	<hr>
	
	
	
    @foreach ($customers as $customer)
        
	@if ($customer['id']==$_SESSION['id_customer'])
        
	<div class="card bg-light">

        <article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center   "style="font-size:5rem" >PROFILE</h4>
		
        
		<form action="profile?id={{$customer['id']}}" method="POST" enctype="multipart/form-data">
			@csrf
          
			<div class="form-group input-group  d-flex justify-content-center align-items-center mb-3 " >
            <img src="/img/customer/{{$customer['photo']}}" class="img-flouid " style="max-height: 70px ;border-radius:20px"  alt="">                
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="first_name" class="form-control" placeholder="first name" value="{{$customer['first_name']}}" type="text">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="last_name" class="form-control" placeholder="last name" value="{{$customer['last_name']}}" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="Email" class="form-control" placeholder="Email address" value="{{$customer['Email']}}" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa-solid fa-location-dot"></i> </span>
                </div>
                <input name="address" class="form-control" placeholder="address" value="{{$customer['address']}}" type="text">
            </div> 
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
              
                <input name="phone" class="form-control" placeholder="Phone number" value="{{$customer['phone']}}"type="text">
            </div> <!-- form-group// -->
          
           
            <br><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block "> تعديل الحساب  </button>
            </div> <!-- form-group// -->      
        </form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


@endif
@endforeach

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/all.min.js"></script>
</body>
</html>
