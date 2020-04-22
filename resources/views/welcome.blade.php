@extends('layouts.index')
@section('content')


<a href="/projet/create" class="btn btn-success">Create</a>


@foreach ($users as $user)

{{$user->id}}
{{$user->name}}
{{$user->email}}
    
@endforeach


<div class="row "> 
    @foreach ($projets as $projet)
    <div class="col-1">ID : {{$projet->id}} </div>
    <div class="col-3">Nom Projet : {{$projet->name}} </div>
    <div class="col-6">Description : {{$projet->description}} </div>
    <div class="col-2"></div>
    @endforeach
</div>
    
@endsection