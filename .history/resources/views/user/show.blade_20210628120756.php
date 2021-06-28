@extends('layouts.app')


@section('content')

    @foreach($user as $users)
    <div class="container">

        <h1>Bonjour {{ $users->pseudo }}</h1>
    </div>

    @endforeach


@endsection