@extends('layouts.index')
@section('content')

<h1 class="text-center text-danger mt-5">Créer un Projet</h1>

<div class="container d-flex justify-content-center">
    <div class="col-5">
      <div class="container">
        <form method="post" action="/Projet">
          @csrf
          <div class="form-group">
            <label class="mt-5">Nom du projet :</label>
            <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="mt-5">Description du projet :</label>
            <input type="text" name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          
          <select name="user_id" id="user_id">
            @foreach ($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Ajouter un Projet</button>
          </div>
  
        </form>
      </div>
    </div>
  </div>



@endsection