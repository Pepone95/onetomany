@extends('layouts.index')
@section('content')

<h1 class="text-center text-danger mt-5">Créer un Projet</h1>

<div class="container d-flex justify-content-center">
    <div class="col-5">
      <div class="container">
        <form method="post" action="">
          @csrf
          <div class="form-group">
            <label class="mt-5">Nom du projet :</label>
            <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="mt-5">Description du projet :</label>
            <input type="text" name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Valider</button>
          </div>
  
        </form>
      </div>
    </div>
  </div>



@endsection