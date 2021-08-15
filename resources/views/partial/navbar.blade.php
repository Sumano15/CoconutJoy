<nav class="nav">
        <div class="container-fluid">
            <div class="logo">
                <a href="#">CJ.ID</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a style="font-size: 25px;font-family: Philosopher-Bold;" href="#AboutUs">About Us</a></li>
                    <li><a style="font-size: 25px;font-family: Philosopher-Bold;" href="#Product">Product</a></li>
                    <li><a style="font-size: 25px;font-family: Philosopher-Bold;" href="#OurTeams">Our Teams</a></li>
                    <li class="d-block d-sm-block d-md-none"><a style="font-size: 25px;font-family: Philosopher-Bold;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">Cotact Us</a></li>
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
              @include('partial.formEmail')
              <h1 class="text-white" style="text-align:left; padding-left:10%;">Follow Us :</h1>
              <div >
                <a href="" style="display:inline;"><button type="button" class="btn btn-outline-light" style="margin:5px"><i class="fab fa-facebook" ></i></button></a>
                <a href="https://www.instagram.com/coconutjoy.id" style="display:inline;"><button type="button" class="btn btn-outline-light" style="margin:5px"><i class="fab fa-instagram"></i></button></a>
                <a href="https://api.whatsapp.com/send?phone=6281250098851&text=tes" style="display:inline;"><button type="button" class="btn btn-outline-light" style="margin:5px"><i class="fab fa-whatsapp"></i></button></a>
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