@extends('layouts.app')


@section('content')

    @foreach($user as $users)
    div.container-fluid
    <h1>Bonjour {{ $users->pseudo }}</h1>

    @endforeach


@endsection