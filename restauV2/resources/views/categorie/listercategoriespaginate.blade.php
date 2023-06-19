@extends('layout')
@section('title','DWWM Restau')
@section('content')  
  <h1>Liste des catégoriesxx</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Libelle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $categorie)
      <tr>
        <th scope="row">{{ $categorie->id }}</th>
        <td>{{ $categorie->libelle }}</td>
      </tr>
      @endforeach 
    </tbody>
  </table>
  {{ $categories->links() }}

@endsection

