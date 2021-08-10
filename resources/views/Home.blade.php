<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/53c99fa547.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css.map">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <title>CoconutJoy | Home</title>
  </head>
  <body>
    <nav class="nav">
        <div class="container-fluid">
            <div class="logo">
                <a href="#">CJ.ID</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a style="font-size: 25px;font-family: Philosopher-Bold;" href="#">About Us</a></li>
                    <li><a style="font-size: 25px;font-family: Philosopher-Bold;" href="#">Product</a></li>
                    <li><a style="font-size: 25px;font-family: Philosopher-Bold;" href="#">Our Teams</a></li>
                    <li><a style="font-size: 25px;font-family: Philosopher-Bold;" href="#">Contact Us</a></li>
                </ul>
            </div>

            <div id="mySidenav" class="sidenav d-none d-md-block d-xl-block d-xxl-block">
              <center><a href="#">CJ.ID</a></center>
              <hr class="text-white">
              <!-- <br> -->
              <h1 class="text-white" style="text-align:left; padding-left:10%;">Contact</h1>
              <!-- <h5 style="text-align:left; padding-left:15%;"><i class="fab fa-instagram" style="padding-right:10px;"></i>Instagram</h5>
              <h5 style="text-align:left; padding-left:15%;"><i class="fab fa-facebook" style="padding-right:10px;"></i>Facebook</h5>
              <h5 style="text-align:left; padding-left:15%;"><i class="fas fa-envelope" style="padding-right:10px;"></i>Email</h5>
              <h5 style="text-align:left; padding-left:15%;"><i class="fab fa-whatsapp" style="padding-right:10px;"></i>Whatsapp</h5> -->
              <form class="text-white" >
                <div class="mx-3">
                  <label for="firstname" class="form-label">First Name*</label>
                  <input type="text" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Your First Name" required>
                </div>
                <div class="mx-3">
                  <label for="lastname" class="form-label">Last Name*</label>
                  <input type="text" class="form-control" id="lastname" aria-describedby="lastname" placeholder="Your Last Name" required>
                </div>
                <div class="mx-3">
                  <label for="email" class="form-label">Email*</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Your Email" required>
                </div>
                <div class="mx-3">
                  <label for="subject" class="form-label">Subject*</label>
                  <input type="text" class="form-control" id="subject" aria-describedby="subject" placeholder="subject" required>
                </div>
                <div class="mb-3 mx-3">
                  <label for="message" class="form-label">Messages*</label>
                  <textarea class="form-control" placeholder="Your Messages Here" id="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-outline-light">Submit</button>
                <hr>
              </form>
              <h1 class="text-white" style="text-align:left; padding-left:10%;">Follow Us :</h1>
              <div >
                <a href="" style="display:inline;"><button type="button" class="btn btn-outline-light" style="margin:5px"><i class="fab fa-facebook" ></i></button></a>
                <a href="https://www.instagram.com/coconutjoy.id" style="display:inline;"><button type="button" class="btn btn-outline-light" style="margin:5px"><i class="fab fa-instagram"></i></button></a>
                <a href="https://api.whatsapp.com/send?phone=081250098851&text=tes" style="display:inline;"><button type="button" class="btn btn-outline-light" style="margin:5px"><i class="fab fa-whatsapp"></i></button></a>
              </div>
            </div>

            <div class="hamburger d-none d-md-block d-xl-block d-xxl-block" onclick=openNav() data-stat="0">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/navbar.js"></script>
    <script src="js/hamburger.js"></script>
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