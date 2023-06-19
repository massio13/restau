@extends('layout')
@section('title','DWWM Restau')
@section('content')  
  <h1>Liste des chefs</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col" colspan="2">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($chefs as $chef)
      <tr>
        <th scope="row" class="col-1">
          <a href="#">
            {{ $chef->id }}
          </a>
        </th>
        <td class="col-1">
          <form action="/chef/delete/{{ $chef->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn" type="submit"><i class="bi bi-trash"></i></button>
          </form> 
        </td>
        <td>{{ $chef->nom }}</td>
        <td>{{ $chef->prenom }}</td>
      </tr>
      @endforeach 
    </tbody>
  </table>
@endsection