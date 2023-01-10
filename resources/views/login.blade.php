<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/library.css">
</head>
<body>
    
    <div class="container-login text-center">
            <form action="/admin" method="POST" class="login-form">
            
                @csrf
                <div>
                <label >User Name:</label>
                    <input type="text"  class="user-name" name="user_name" 
                    placeholder="Enter User Name">
                </div> <br>
                <div>
                <label>Password:</label>
                    <input type="password" class="pass" name="password">
               </div>
               
               <input type="submit" class=" rounded-pill w-50 fw-bold mt-5 " value="login">
         </form>
        </div>
 
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/all.min.js"></script>
    </body>
    </html>