@extends('layouts.index')
@section('content')

<div class="m-5 text-center">

    <a href="/projet/create" class="btn btn-success">Create Projet</a>
    <a href="/taches/create" class="btn btn-warning">Create Tache</a>
</div>
    
<div class="row d-flex">

    @foreach ($users as $user)
    <p class="col-6">{{$user->name}}</p>  
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
</div>

<div class="row">
        @foreach ($tachess as $taches)
            
        <div class="col-3">ID : {{$taches->id}} </div>
        <div class="col-3"> {{$taches->name}} </div>
        <div class="col-3"> {{$taches->description}} </div>
        {{-- <div class="col-3"></div> --}}
        @endforeach
    </div>

    
@endsection