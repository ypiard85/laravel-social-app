

@foreach($user as $users)

<h1>Bonjour {{ $users->pseudo }}</h1>



@endforeach
@extends('layouts.app')