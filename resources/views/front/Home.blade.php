@extends('layout.main')
@section('head')
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    {{-- <div class="carousel-indicators c">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> --}}
    <div class="carousel-inner">
      <div class="carousel-item a active" style="background-image: url('/asset/foto/Cocco.jpg')">
        <div class="kontengambar">
          <center><h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3></center>
          <center><p style="font-size: 70px;">Welcome To CoconutJoy.Id</p></center>
        </div>
        <div class="carousel-caption b">
            <center>  
                <a href="#AboutUs">
                    <div class='scrolldown'>
                        <div class="chevrons">
                          <div class='chevrondown'></div>
                          <div class='chevrondown'></div>
                        </div>
                    </div>
                </a>
            </center>
        </div>
      </div>
    </div>
  </div>
@endsection



@section('main')
    <section id="AboutUs">
        <div class="container my-5">
            <center><p style="font-size: 80px;">About Us</p></center>
            <center><p style="font-size: 30px;"><strong>CoconutJoy.</strong>Id</p></center>
            <center><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae in reprehenderit fugiat, autem voluptas nihil explicabo, nobis vel veritatis amet reiciendis possimus, dicta at beatae. Doloremque sapiente, libero minima inventore consequuntur atque excepturi labore! Quibusdam laborum quasi voluptatem consectetur, ratione doloribus suscipit, officia cumque quis hic eius quisquam neque qui expedita iusto quam, quos veniam quia sequi! Placeat animi cupiditate sunt vitae? Sunt cumque iste amet omnis praesentium expedita totam magni. Deleniti ut atque totam quidem sint sed animi dolore!</p></center>
            <a href="#Product">
                <div class="button-container-2">
                    <span class="mas">See Our Products</span>
                  <button type="button" name="Hover">Hover Me!!</button>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div>
            <div class="img1" style="background-image: url(/asset/foto/Cocco.jpg)"> 
                
            </div>
        </div>
    </section>
   <section id ="Product">
    <div class="container">
      <div class="row my-5">
        <center><p style="font-size: 80px;">Product</p></center>
      </div>
      <div class="row my-5">
        <div class="col-sm-12 col-md-4 col-lg-4 my-auto">
          <h1><strong>Name</strong></h1>
          <h2>desc</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, ipsa numquam praesentium reiciendis magnam maxime doloribus, qui fugit odio optio dignissimos aliquam natus perferendis dicta repudiandae consequuntur, quisquam modi eligendi.</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <img src="asset/foto/kopra.png" width="100%" alt="">
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 my-auto">
          <h3>Something</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, numquam?</p>
          <button class="btn btn-dark">tombol</button>
        </div>
      </div>
    </div>
   </section>
   <section>
    <div>
        <div class="img1" style="background-image: url(/asset/foto/Cocco.jpg)"> 
            
        </div>
    </div>
  </section>
    <section id="OurTeams">
        <div class="container my-5">
            <center><p style="font-size:90px;">Our Team</p></center>
            <div class="row my-5">
              <div class="col">
                <div class="foto">
                  <center><img src="asset/foto/abang1.jpg" width="50%" alt="">
                  <h1>Abang 1</h1>
                    <h6>jabatan</h6>
                    <div class="mt-3" >
                      {{-- <a href="" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-facebook" ></i></button></a> --}}
                      <a href="https://www.instagram.com/coconutjoy.id" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-instagram"></i></button></a>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6281250098851&text=tes" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-whatsapp"></i></button></a> --}}
                    </div>
                  </center>
                </div>
              </div>
              <div class="col">
                <div class="foto">
                  <center><img src="asset/foto/abang1.jpg" width="50%" alt="">
                  <h1>Abang 2</h1>
                    <h6>jabatan</h6>
                    <div class="mt-3" >
                      {{-- <a href="" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-facebook" ></i></button></a> --}}
                      <a href="https://www.instagram.com/coconutjoy.id" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-instagram"></i></button></a>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6281250098851&text=tes" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-whatsapp"></i></button></a> --}}
                    </div>
                  </center>
                </div>
              </div>
              <div class="col">
                <div class="foto">
                  <center><img src="asset/foto/abang1.jpg" width="50%" alt="">
                  <h1>Abang 3</h1>
                    <h6>jabatan</h6>
                    <div class="mt-3" >
                      {{-- <a href="" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-facebook" ></i></button></a> --}}
                      <a href="https://www.instagram.com/coconutjoy.id" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-instagram"></i></button></a>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6281250098851&text=tes" style="display:inline;"><button type="button" class="btn btn-outline-dark" style="margin:5px"><i class="fab fa-whatsapp"></i></button></a> --}}
                    </div>
                  </center>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection

@section('foot')
<footer>
    <div class="container-fluid pt-5" style="background-color: black;">
        <div class="row justify-content-center">
            <center><a href="#" style="font-size:50px">CJ.ID</a></center>
        </div>
        <div class="row justify-content-center pb-5">
          <div class="col-md-4 col-sm-6 text-center text-white pt-3">
            &copy;COPYRIGHT CoconutJoy.ID
          </div>

          <div class="col-md-4 col-sm-6 text-center text-white pt-3">
            Phone: +88 (0) 101 0000 000
          </div>

          <div class="col-md-4 col-sm-6 text-center text-white pt-3">
            Email: reserve@albergo.com
          </div>
        </div>

        <hr style="background-color: white;">
        <div class="row ">
          <nav class="navbar navbar-expand-lg navbar-light mx-auto justify-content-center">
            {{-- <div class="collapse navbar-collapse"> --}}
              <ul class="navbar-nav">
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="index.php">Pages</a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="#">Events</a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="#">Rooms</a>
                </li>
              </ul>
            {{-- </div> --}}
          </nav>
        </div>
    </div>
</footer>
@endsection