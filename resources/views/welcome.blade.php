@extends('layouts.index')
@section('content')



<div class="row ">

    <a href="/create" class="btn btn-success">Create</a>

    @foreach ($projets as $projet) --}}
    <div class="col-1">ID : {{$projet->id}} </div>
    <div class="col-3">Nom Projet : {{$projet->name}} </div>
    <div class="col-6">Description : {{$projet->description}} </div> --}}
    <div class="col-2">TEST</div>
    @endforeach
</div>
    
@endsection