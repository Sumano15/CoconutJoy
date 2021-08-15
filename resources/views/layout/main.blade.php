<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/53c99fa547.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css.map"> --}}
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/slidingCarousel.css">
    <link rel="stylesheet" href="css/scrolldown.css">
    <link rel="stylesheet" href="css/product.css">
    <title>CoconutJoy | Home</title>
    <style>
    ::-webkit-scrollbar {
      width: 7px;
    }
    
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
    
    ::-webkit-scrollbar-thumb {
      background: black; 
      border-radius: 10px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
      background: grey; 
    }
    .modal-header{
      background-color:black ;
    }
    .modal-body{
      background-color: black;
    }
    </style>
  </head>
  <body>
    @include('partial.navbar')
    @include('partial.modal')
    <div class="container-fluid m-0 p-0">
      <header>
        @yield('head')
      </header>
      @yield('main')
      @yield('foot')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/navbar.js"></script>
    <script src="js/hamburger.js"></script>
    <script src="js/product.js"></script>
    <script>
        function openNav() {
            var tes = $(".hamburger").data("stat");
            if(tes == 0){
            document.getElementById("mySidenav").style.width = "400px";
            $('.hamburger').data('stat',1);
            }else{
            document.getElementById("mySidenav").style.width = "0";
            $('.hamburger').data('stat',0);
            }
        }
    </script>
  </body>
</html>