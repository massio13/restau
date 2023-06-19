@extends('layout')

@section('title','Modifier une categorie')

@section('content')
                <!-- ======= Book A Table Section ======= -->
                <section id="book-a-table" class="book-a-table">
                    <div class="container" data-aos="fade-up">
  
                      <div class="section-header">
                        <h2>Modifier une Catégorie</h2>
                        <p>Modifier votre <span>catégorie</span> comme vous <span>aimez</span></p>
                      </div>
  
                      <div class="row g-0">
  
                        <div class="col-lg-4 reservation-img" style="background-image: url(/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>
  
                        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                          <form action="/categorie/update/{{ $categorie->id}}" method="post" role="form" class="dm-form" data-aos="fade-up" data-aos-delay="100">
                            @csrf
                            @method('PATCH')
                            <div class="row gy-4">
                              <div class="col-lg-12 col-md-12">
                                <input type="text" class="form-control" name="libelle" 
                                       value="{{ $categorie->libelle}}"
                                       id="libelle" 
                                       placeholder="Le nom de la catégorie">
                                @error('libelle')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
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
 