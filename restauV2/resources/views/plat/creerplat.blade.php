@extends('layout')

@section('title','Creer un plat')

@section('content')
                <!-- ======= Book A Table Section ======= -->
                <section id="book-a-table" class="book-a-table">
                    <div class="container" data-aos="fade-up">
  
                      <div class="section-header">
                        <h2>Créer un Plat</h2>
                        <p>Créer votre <span>plat</span> comme vous <span>aimez</span></p>
                      </div>
  
                      <div class="row g-0">
  
                        <div class="col-lg-4 reservation-img" style="background-image: url(/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>
  
                        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                          <form action="/plat/ajouter" method="post" role="form" class="dm-form" data-aos="fade-up" data-aos-delay="100">
                            @csrf
                            <div class="row gy-4">
                              <div class="col-lg-10 col-md-12">
                                <select id="idCat" name="idCat" class="form-control">
                                    @foreach ($listcat as $categorie)
                                    <option value="{{$categorie->id}}"> {{$categorie->libelle}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="col-lg-10 col-md-12">
                                <select id="idChef" name="idChef[]" class="form-control" multiple>
                                    @foreach ($chefs as $chef)
                                    <option value="{{$chef->id}}"> {{$chef->prenom}} {{$chef->nom}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="col-lg-8 col-md-6">
                                <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Le nom du plat">
                              </div>
                              <div class="col-lg-4 col-md-6">
                                <input type="text" name="prix" class="form-control" id="prix" placeholder="Le prix en centimes">
                              </div>
                              <div class="col-lg-8 col-md-6">
                                <input type="text" class="form-control" name="composition" id="composition" placeholder="La composition du plat">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="error-message"></div>
                            </div>
                            <div class="text-center"><button type="submit">Valider</button></div>
                          </form>
                        </div><!-- End Reservation Form -->
  
                      </div>
  
                    </div>
                  </section><!-- End Book A Table Section -->
@endsection
 