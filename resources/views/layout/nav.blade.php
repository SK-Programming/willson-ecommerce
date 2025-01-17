<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js" integrity="sha512-jEnuDt6jfecCjthQAJ+ed0MTVA++5ZKmlUcmDGBv2vUI/REn6FuIdixLNnQT+vKusE2hhTk2is3cFvv5wA+Sgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
  </head>
<body>


  <div class="side-nav" id="sideNav">
  
    <div class="d-flex justify-content-end ">
      <svg width="18" height="18" class="mx-3 my-2 " id="close" viewBox="0 0 18 18" fill="#FFF" xmlns="http://www.w3.org/2000/svg" onclick="closeSidebar()">
        <path d="M10.4099 9L16.7099 2.71C16.8982 2.5217 17.004 2.2663 17.004 2C17.004 1.7337 16.8982 1.47831 16.7099 1.29C16.5216 1.1017 16.2662 0.995911 15.9999 0.995911C15.7336 0.995911 15.4782 1.1017 15.2899 1.29L8.99994 7.59L2.70994 1.29C2.52164 1.1017 2.26624 0.995911 1.99994 0.995911C1.73364 0.995911 1.47824 1.1017 1.28994 1.29C1.10164 1.47831 0.995847 1.7337 0.995847 2C0.995847 2.2663 1.10164 2.5217 1.28994 2.71L7.58994 9L1.28994 15.29C1.19621 15.383 1.12182 15.4936 1.07105 15.6154C1.02028 15.7373 0.994141 15.868 0.994141 16C0.994141 16.132 1.02028 16.2627 1.07105 16.3846C1.12182 16.5064 1.19621 16.617 1.28994 16.71C1.3829 16.8037 1.4935 16.8781 1.61536 16.9289C1.73722 16.9797 1.86793 17.0058 1.99994 17.0058C2.13195 17.0058 2.26266 16.9797 2.38452 16.9289C2.50638 16.8781 2.61698 16.8037 2.70994 16.71L8.99994 10.41L15.2899 16.71C15.3829 16.8037 15.4935 16.8781 15.6154 16.9289C15.7372 16.9797 15.8679 17.0058 15.9999 17.0058C16.132 17.0058 16.2627 16.9797 16.3845 16.9289C16.5064 16.8781 16.617 16.8037 16.7099 16.71C16.8037 16.617 16.8781 16.5064 16.9288 16.3846C16.9796 16.2627 17.0057 16.132 17.0057 16C17.0057 15.868 16.9796 15.7373 16.9288 15.6154C16.8781 15.4936 16.8037 15.383 16.7099 15.29L10.4099 9Z" fill="#FFFFFF"/>
        </svg>
    </div>
  
<div class="gap-3 d-flex flex-column">

  <img src="images/icon.png" class="mx-3 w-25 logo-img mtn" alt="" height="160\">

<a href="{{ url('/') }}" class="mx-4 mt-4 lisst">Home</a>
<a href="{{ url('/') }}" class="mx-4 mt-4 lisst">Explore</a>
<a href="{{ url('/') }}" class="mx-4 mt-4 lisst">Home</a>
<a href="{{ url('/') }}" class="mx-4 mt-4 lisst">Home</a>


    
</div>
  </div>

  
    <nav class="d-flex justify-content-between align-items-center ">

      <svg width="32" height="24" viewBox="0 0 20 12" fill="#FFF" class="mx-3 menu" xmlns="http://www.w3.org/2000/svg" onclick="sideBar()">
        <path d="M9 2L19 2C19.2652 2 19.5196 1.89464 19.7071 1.70711C19.8946 1.51957 20 1.26522 20 1C20 0.734784 19.8946 0.480429 19.7071 0.292892C19.5196 0.105356 19.2652 0 19 0L9 0C8.73478 0 8.48043 0.105356 8.29289 0.292892C8.10536 0.480429 8 0.734784 8 1C8 1.26522 8.10536 1.51957 8.29289 1.70711C8.48043 1.89464 8.73478 2 9 2ZM19 10L1 10C0.734784 10 0.480429 10.1054 0.292892 10.2929C0.105356 10.4804 0 10.7348 0 11C0 11.2652 0.105356 11.5196 0.292892 11.7071C0.480429 11.8946 0.734784 12 1 12L19 12C19.2652 12 19.5196 11.8946 19.7071 11.7071C19.8946 11.5196 20 11.2652 20 11C20 10.7348 19.8946 10.4804 19.7071 10.2929C19.5196 10.1054 19.2652 10 19 10V10ZM1 7L19 7C19.2652 7 19.5196 6.89464 19.7071 6.70711C19.8946 6.51957 20 6.26522 20 6C20 5.73478 19.8946 5.48043 19.7071 5.29289C19.5196 5.10536 19.2652 5 19 5L1 5C0.734784 5 0.480429 5.10536 0.292892 5.29289C0.105356 5.48043 0 5.73478 0 6C0 6.26522 0.105356 6.51957 0.292892 6.70711C0.480429 6.89464 0.734784 7 1 7Z" fill="#FFFFFF"/>
        </svg>
      

      
<img src="images/icon.png" class="mx-3 logo-img" alt="" height="120\">

<div class="navigation">
    <ul>
      <li class="list {{ Request::is('/') ? 'active' : '' }}">
        <a href="{{ url('/') }}">
          <span class="icon">
            <i class="fa-solid fa-house"></i>
          </span>
          <span class="text">Home</span>
        </a>
      </li>
      <li class="list {{ Request::is('explore') ? 'active' : '' }}">
        <a href="{{ url('/explore') }}">
          <span class="icon">
            <i class="fa-solid fa-layer-group"></i>
          </span>
          <span class="text">Explore</span>
        </a>
      </li>
      <li class="list {{ Request::is('profile') ? 'active' : '' }}">
        <a href="{{ url('/profile') }}">
          <span class="icon">
            <i class="fa-solid fa-user"></i>
          </span>
          <span class="text">Profile</span>
        </a>
      </li>
      <li class="list {{  Request::is('cart') ? 'active' : '' }}">
        <a href="{{ url('cart') }}">
          <span class="icon">
            <i class="fa-solid fa-cart-shopping"></i>
          </span>
          <span class="text">Cart</span>
        </a>
      </li>
     
      <li class="list {{ Request::is('contactus') ? 'active' : '' }}">
        <a href="{{ url('/contactus') }}">
          <span class="icon">
            <i class='fas fa-headset'></i>
          </span>
          <span class="text">Contact</span>
        </a>
      </li>
      <div class="indicator"></div>
    </ul>
  </div>
{{--   
<button class="px-4 mx-3 btn login-btn " onclick="window.location.href='{{ url('/login') }}'">  <i class="fa-solid fa-user"></i> Login</button> --}}



<div class="mx-3 dropdown">

  <div class="user-img-cont dropdown-toggle" style="background-image: url('images/user.png');" data-bs-toggle="dropdown" aria-expanded="false"   ></div>

  <ul class="dropdown-menu">
    
    <li><a class="dropdown-item" href='{{ url('/profile') }}'>Profile</a></li>
    <li><a class="dropdown-item" href="#">Logout</a></li>
    
  </ul>
</div>




    </nav>





    
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>