@extends('layouts.index')
@section('content')

<h1 class="text-center text-danger mt-5">Créer un Projet</h1>

<div class="container d-flex justify-content-center">
    <div class="col-5">
      <div class="container">
        <form method="post" action="/taches/create">
          @csrf
          {{-- <div class="form-group">
            <label for="exampleInputEmail1" class="mt-5">Nom Du Projet:</label>
            <input type="text" name='prenom' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div> --}}
          <div class="form-group">
            <label class="mt-5">Nom de la tache :</label>
            <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="mt-5">Description de la tache :</label>
            <input type="text" name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          {{-- <select name="user_id" id="user_id">
            @foreach ($tachess as $taches)
        <option value="{{$taches->id}}">{{$taches->name}}</option>
            @endforeach
        </select> --}}

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Ajouter une Tache</button>
          </div>
  
        </form>
      </div>
    </div>
  </div>



@endsection