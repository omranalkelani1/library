
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>sign_up</title>
	<link rel="stylesheet" href="/css/sign_up.css">
	
	<link rel="stylesheet" href="/css/all.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
	<hr>
	
	
	
	
	
	<div class="card bg-light">
	<article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center">Create Account</h4>
		<p class="text-center">Get started with your free account</p>
		
	
		<form action="sign_up" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i> </span>
				 </div>
				<input name="user_name" class="form-control" placeholder="enter user name" type="text">
			</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="first_name" class="form-control" placeholder="first name" type="text">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="last_name" class="form-control" placeholder="last name" type="text">
		</div> <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
			<input name="Email" class="form-control" placeholder="Email address" type="email">
		</div> <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa-solid fa-location-dot"></i> </span>
			 </div>
			<input name="address" class="form-control" placeholder="address" type="text">
		</div> 
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
			</div>
			<select class="custom-select" style="max-width: 120px;">
				<option selected="">+963</option>
			  
			</select>
			<input name="phone" class="form-control" placeholder="Phone number" type="text">
		</div> <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-building"></i> </span>
			</div>
			<select class="form-control "name="is_admin">
				<option selected=""> Select job type</option>
				<option value="0">customer</option>
				<option value="1">Manager</option>
			</select>
		</div> <!-- form-group end.// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-image"></i> </span>
			 </div>
			<input name="photo" class="form-control" placeholder="chose photo" type="file">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input class="form-control" name="password" placeholder="Create password" type="password">
		</div> <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input class="form-control" placeholder="Repeat password" type="password">
		</div> <!-- form-group// -->                 
<br>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block "> Create Account  </button>
			<br> <br>
		</div> <!-- form-group// -->      
		<p class="text-center">Have an account? <a href="login">Log In</a> </p>                                                                 
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
