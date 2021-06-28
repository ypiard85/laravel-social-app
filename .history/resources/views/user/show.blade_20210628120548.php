@extends('layouts.app')


@foreach($user as $users)

    <h1></h1>

    {{ $users->pseudo }}

@endforeach