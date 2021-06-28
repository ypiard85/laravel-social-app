@extends('layouts.app')


@section('content')

    @foreach($user as $users)
    <div class="container">
        <h1><span class="text-decoration-underline">Profil de</span> {{ $users->prenom }}</h1>



    </div>

    @endforeach


@endsection