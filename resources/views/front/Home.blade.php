@extends('layout.main')
@section('head')
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    {{-- <div class="carousel-indicators c">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> --}}
    <div class="carousel-inner">
      <div class="carousel-item a active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
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
          {{-- <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p> --}}
        </div>
      </div>
      <div class="carousel-item a" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption b">
          {{-- <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p> --}}
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
      <div class="carousel-item a" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption b">
          {{-- <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p> --}}
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
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
    <section id="Product">
        <div class="container my-5">
            <center><p style="font-size: 80px;">Our Products</p></center>
            <div class="section animate">
                <div class="middle">
                   <img src="https://images.unsplash.com/photo-1460400408855-36abd76648b9?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                </div>
                <div class="left title">
                   <div class="content">
                      <h2>Product 1.</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga veniam obcaecati dignissimos, quae voluptatibus tempora aperiam corrupti animi! Minus dolor facilis voluptates fugiat atque voluptas autem sed possimus pariatur facere!</p>
                      <a href="#" class="btn-primary">Learn more</a>
                   </div>
                </div>
                <div class="right tiles">
                   <img src="https://images.unsplash.com/photo-1460400408855-36abd76648b9?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1460400408855-36abd76648b9?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1460400408855-36abd76648b9?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1460400408855-36abd76648b9?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                </div>
             </div>
             
             <div class="section">
                <div class="middle">
                   <img src="https://images.unsplash.com/photo-1464655646192-3cb2ace7a67e?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                </div>
                <div class="right title">
                   <div class="content">
                    <h2>Product 2.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga veniam obcaecati dignissimos, quae voluptatibus tempora aperiam corrupti animi! Minus dolor facilis voluptates fugiat atque voluptas autem sed possimus pariatur facere!</p>
                    <a href="#" class="btn-primary">Learn more</a> 
                </div>
                </div>
                
                <div class="left tiles">
                   <img src="https://images.unsplash.com/photo-1464655646192-3cb2ace7a67e?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1464655646192-3cb2ace7a67e?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1464655646192-3cb2ace7a67e?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1464655646192-3cb2ace7a67e?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                </div>
                
             </div>
             
             <div class="section">
                <div class="middle">
                   <img src="https://images.unsplash.com/photo-1465326117523-6450112b60b2?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                </div>
                <div class="left title">
                   <div class="content">
                    <h2>Product 3.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga veniam obcaecati dignissimos, quae voluptatibus tempora aperiam corrupti animi! Minus dolor facilis voluptates fugiat atque voluptas autem sed possimus pariatur facere!</p>
                    <a href="#" class="btn-primary">Learn more</a>
                </div>
                </div>
                
                <div class="right tiles">
                   <img src="https://images.unsplash.com/photo-1465326117523-6450112b60b2?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1465326117523-6450112b60b2?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1465326117523-6450112b60b2?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1465326117523-6450112b60b2?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                </div>
                
             </div>
             
             <div class="section">
                <div class="middle">
                   <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                </div>
                <div class="right title">
                   <div class="content">
                    <h2>Product 4.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga veniam obcaecati dignissimos, quae voluptatibus tempora aperiam corrupti animi! Minus dolor facilis voluptates fugiat atque voluptas autem sed possimus pariatur facere!</p>
                    <a href="#" class="btn-primary">Learn more</a>
                </div>
                </div>
                
                <div class="left tiles">
                   <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                   <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?dpr=2&auto=format&crop=entropy&fit=crop&w=250&h=250&q=80" />
                </div>
                
             </div>
        </div>
    </section>
    <section id="OurTeams">
        <div class="container my-5">
            <center><p style="font-size:90px;">Our Team</p></center>
            
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