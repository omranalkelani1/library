

   <link rel="stylesheet" href="css/bondi.css">
   <link rel="stylesheet" href="/css/all.min.css">
   <link rel="stylesheet" href="/css/bootstrap.min.css">
   @if (isset($_SESSION['id_customer']) ==false)
   <div style="display:none">
      {{session_start();}}
    </div>
  @endif
  @if(isset($_SESSION['user_name'])&&$_SESSION['user_name']=="root")
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">library</a></a>
     
          
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
        <i class="fa-solid fa-bars"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link p-lg-3 active" aria-current="page" href="admin">Home</a>
          </li>
          
           
          <li class="nav-item ">
            <a class="nav-link p-lg-3" href="all_tropes">all topres</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link p-lg-3" href="add_book">add book</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link p-lg-3" href="add_category">add category</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link p-lg-3" href="log_out">log out</a>
          </li>
          
      
         
        
          
        </ul>
    
      </div>
    </nav>
  @else
      
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
          <a class="navbar-brand" href="#">library</a></a>
          @if (isset($_SESSION['id_customer']) )
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-lg-3 active" aria-current="page" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-lg-3" href="all_books">All Books</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link p-lg-3" href="profile">profile</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link p-lg-3" href="my_tropes">my topres</a>
              </li>
                <li class="nav-item ">
                <a class="nav-link p-lg-3" href="my_favourite">my favourite</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link p-lg-3" href="log_out">log out</a>
              </li>
              
            
              
            </ul>
        
         @if($_SERVER['REQUEST_URI']=="/all_books")
         <form action="/search_book" method="GET">  <div class="search ps-3 pe-3 d-none d-lg-block" >
           <input type="search" name="search_value" placeholder="ابحث هنا">
            <input type="submit"  value="بحث" class="btn-search">
            {{-- <input type="submit" class="fa-solid fa-magnifying-glass"> --}}
          </div></form>
          @endif
           @endif
           @if (isset($_SESSION['id_customer'])==false )
           
           
           <a class=" main-btn rounded-pill me-2 " style="font-size: 18px" href="login">login</a>
           @endif
           {{-- <a class=" main-btn rounded-pill ml-2"style="font-size: 18px"  href="sign_up">sign up</a> --}}
           {{-- {{ $_SESSION['id_customer'];}} --}}
          </div>
        </div>
      </nav>
      @endif
      