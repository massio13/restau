@extends('layout')

@section('title','DWWM Restau')

@section('content')
    <h1 class="mt-5">Gérer une catégorie</h1>   
    <p class="mt-5 h4">Catégorie {{ $categorie->id }} - {{ $categorie->libelle }}</p>
    <a  class="btn btn-primary" href="#"
        onclick="event.preventDefault();
                 document.getElementById('delete-form').submit();"
    >
        <i class="bi bi-trash"></i>
    </a>
    <form  id="delete-form" 
         action="/categorie/delete/{{ $categorie->id }}"   
         method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection