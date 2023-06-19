@extends('layout')

@section('title','Creer un chef')

@section('content')
                <!-- ======= Book A Table Section ======= -->
                <section id="book-a-table" class="book-a-table">
                    <div class="container" data-aos="fade-up">
  
                      <div class="section-header">
                        <h2>Créer votre chef</h2>
                        <p>Créer votre nouveau <span>chef</span> comme vous <span>aimez</span></p>
                      </div>
  
                      <div class="row g-0">
  
                        <div class="col-lg-4 reservation-img" style="background-image: url(/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>
  
                        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                          <form action="/chef/ajouter" method="post" role="form" class="dm-form" data-aos="fade-up" data-aos-delay="100">
                            @csrf
                            <div class="row gy-4">
                              {{-- <div class="col-lg-4 col-md-6">
                                 <input type="text" name="id" class="form-control" id="id" placeholder="Ref*"> 
                              </div> --}}
                              <div class="col-lg-12 col-md-12">
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Le nom du chef">
                              </div>
                              <div class="col-lg-12 col-md-12">
                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Le prenom du chef">
                              </div>
                              <div class="col-lg-12 col-md-12">
                                <input type="text" class="form-control" name="photo" id="photo" placeholder="La photo du chef">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="error-message"></div>
                                @isset($message)
                                    <p>{{ $message }}</p>
                                @endisset
                            </div>
                            <div class="text-center"><button type="submit">Valider</button></div>
                          </form>
                        </div><!-- End Reservation Form -->
  
                      </div>
  
                    </div>
                  </section><!-- End Book A Table Section -->
@endsection
 