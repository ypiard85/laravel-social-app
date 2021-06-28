@extends('layouts.app')


@section('content')


    <div class="container">
        <h1><span class="text-decoration-underline">Profil de</span> <span class="text-capitalize">{{ $user->prenom }} {{ $users->nom }}</span></h1>
        <h1>Pseudo : {{ $user->pseudo }}</h1>
    </div>




@endsection
