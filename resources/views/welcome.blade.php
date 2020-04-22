@extends('layouts.index')
@section('content')


<a href="/projet/create" class="btn btn-success">Create</a>

<div class="row d-flex">

    @foreach ($users as $user)
    {{-- <p class="col-1">{{$user->id}}</p> --}}
    <p class="col-6">{{$user->name}}</p>
    {{-- <p class="col-6">{{$user->email}}</p> --}}
    
    @endforeach 
</div>

    

<div class="row "> 
    @foreach ($projets as $projet)

    <div class="col-1">ID : {{$projet->id}} </div>
    <div class="col-2">Prenom : {{$projet->prenom}} </div>
    <div class="col-2">Nom Projet : {{$projet->name}} </div>
    <div class="col-3">Description : {{$projet->description}} </div>
    {{-- <div class="col-2"></div> --}}
    @endforeach
    <br>
</div>

    
@endsection