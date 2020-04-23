@extends('layouts.index')
@section('content')

<h1 class="text-center mb-5">Projet Partie !!!!</h1>

<p class="h4"> Le confinenment te rend fou ? J'ai la solution pour toi. Ici tu vas pouvoir créer des projets qui vont servir a rien et ça c'est beau. convaincu ?? hésite pas à créer des millier de projets. On compte sur toi :)</p>
<h3>Etape 1</h3>
<a href="/projet/create" class="btn btn-success mb-5">Create Project</a>

{{-- <div class="row d-flex"> --}}

    {{-- @foreach ($users as $user) --}}
    {{-- <p class="col-1">{{$user->id}}</p> --}}
    {{-- <p class="col-6">{{$user->name}}</p> --}}
    {{-- <p class="col-6">{{$user->email}}</p> --}}
    
    {{-- @endforeach  --}}
{{-- </div> --}}

    


    @foreach ($projets as $projet)
    <div class="border border-dark my-5 p-3" >
    {{-- <div class="col-1 h5"> <span class="font-weight-bold "> ID : </span> {{$projet->id}} </div> --}}
    <div class="col-2 mb-3"> <span class="font-weight-bold text-primary "> Prénom : </span>  {{$projet->prenom}} </div> <hr class='bg-dark'>
    <div class="col-2 mb-3"> <span class="font-weight-bold text-primary "> Nom du Projet : </span>  {{$projet->name}} </div> <hr class="bg-dark">
    <div class="col-3 mb-3"> <span class="font-weight-bold text-primary "> Description : </span>  {{$projet->description}} </div> <hr class="bg-dark">
    
</div>
    @endforeach
    <br>


    
@endsection