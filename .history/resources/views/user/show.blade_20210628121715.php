@extends('layouts.app')


@section('content')

    @foreach($user as $users)
    <div class="container">
        <h1 class="text-decoration-underline"><span>Profil de</span> {{ $users->prenom }}</h1>



    </div>

    @endforeach


@endsection