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
          <a href="#"
             onclick="event.preventDefault();document.getElementById('delete-form{{$chef->id}}').submit();"
          >
            <i class="bi bi-trash"></i>
          </a>
          <form id="delete-form{{$chef->id}}" action="{{route('chef.delete',['chef' => $chef->id])}}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
          </form> 
        </td>
        <td>{{ $chef->nom }}</td>
        <td>{{ $chef->prenom }}</td>
      </tr>
      @endforeach 
    </tbody>
  </table>
@endsection