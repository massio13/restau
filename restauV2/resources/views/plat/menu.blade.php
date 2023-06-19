@extends('layout')

@section('title','The menu')

@section('content')
<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Notre Menu</h2>
        <p>Check Our <span>Yummy Menu</span></p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-1">
            <h4>Entrée</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-2">
            <h4>Plat</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-3">
            <h4>Fromage</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-4">
            <h4>Dessert</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-1">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Entrée</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-1.png" class="glightbox"><img src="/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Artichaut nature</h4>
              <p class="ingredients">
                Demandez au chef.
              </p>
              <p class="price">
                €8.00
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-2.png" class="glightbox"><img src="/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-3.png" class="glightbox"><img src="/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-4.png" class="glightbox"><img src="/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-5.png" class="glightbox"><img src="/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-6.png" class="glightbox"><img src="/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Starter Menu Content -->

        <div class="tab-pane fade" id="menu-2">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Plat</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-1.png" class="glightbox"><img src="/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-2.png" class="glightbox"><img src="/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-3.png" class="glightbox"><img src="/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-4.png" class="glightbox"><img src="/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-5.png" class="glightbox"><img src="/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-6.png" class="glightbox"><img src="/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Breakfast Menu Content -->

        <div class="tab-pane fade" id="menu-3">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Fromage</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-1.png" class="glightbox"><img src="/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-2.png" class="glightbox"><img src="/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-3.png" class="glightbox"><img src="/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-4.png" class="glightbox"><img src="/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-5.png" class="glightbox"><img src="/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-6.png" class="glightbox"><img src="/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Lunch Menu Content -->

        <div class="tab-pane fade" id="menu-4">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Dessert</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-1.png" class="glightbox"><img src="/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-2.png" class="glightbox"><img src="/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-3.png" class="glightbox"><img src="/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-4.png" class="glightbox"><img src="/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-5.png" class="glightbox"><img src="/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="/assets/img/menu/menu-item-6.png" class="glightbox"><img src="/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Dinner Menu Content -->

      </div>

    </div>
  </section><!-- End Menu Section -->    
@endsection