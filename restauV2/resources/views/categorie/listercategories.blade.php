@extends('layout')
@section('title','DWWM Restau')
@section('content')  
  <h1>Liste des catégories</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col" colspan="3">#</th>
        <th scope="col">Libelle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $categorie)
      <tr>
        <th scope="row">
          <a href="/categorie/show/{{ $categorie->id }}">
            {{ $categorie->id }}
          </a>
        </th>
        <td class="col-1">
          <a href="/categorie/update/{{ $categorie->id }}"><i class="bi bi-info-circle"></i></a> 
        </td>
        <td class="col-1">
          <form action="/categorie/delete/{{ $categorie->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn" type="submit"><i class="bi bi-trash"></i></button>
          </form> 
        </td>
        <td>{{ $categorie->libelle }}</td>
      </tr>
      @endforeach 
    </tbody>
  </table>
@endsection

