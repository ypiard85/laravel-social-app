@extends('layouts.app')


@foreach($user as $users)

    <h1>Bonjour</h1>

    {{ $users->pseudo }}

@endforeach