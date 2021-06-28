@extends('layouts.app')


@section('content')

    @foreach($user as $users)
    <div class="container">
        <h1><span class="text-decoration-underline">Profil de</span> <span class="text-capitalize">{{ $users->prenom }} {{ $users->nom }}</span></h1>
    </div>

    @endforeach


@endsection

//Mercredi 18h30 !! claudi danieau !! 2 depanages.