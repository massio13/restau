@extends('layout')

@section('title','Supprimer les plats')

@section('content')
                <!-- ======= Chefs Section ======= -->
                <section id="chefs" class="chefs section-bg">
                    <div class="container" data-aos="fade-up">
  
                      <div class="section-header">
                        <h2>Admin</h2>
                        <p>Notre liste de  <span>Plats</span></p>
                      </div>
  
                      <div class="row gy-4">
                        @foreach ($plats as $plat)
                        <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="chef-member">
                              <div class="member-img">
                                <img src="/assets/img/menu/{{$plat->photo}}" class="img-fluid" alt="">
                                <div class="social bg-white">
                                  <a href=""><i class="bi bi-trash"></i></a>
                                </div>
                              </div>
                              <div class="member-info">
                                <h4> {{$plat->id}} - {{$plat->nom}} </h4>
                                <span>€ {{$plat->prix / 100}} </span>
                                 @if ($plat->categorie)
                                    <p> {{$plat->categorie->libelle}} </p>
                                @endif
                                <p> {{$plat->composition}} </p>
                              </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        @endforeach
                      </div>
  
                    </div>
                  </section><!-- End Chefs Section -->

@endsection
 