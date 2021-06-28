@extends('layouts.app')


@section('content')

    @foreach($user as $users)
    <div class="container">
        <h1><span class="text-decoration-underline">Profil de</span> <span>{{ $users->prenom }} {{ $users->nom }}</span></h1>



    </div>

    @endforeach


@endsection