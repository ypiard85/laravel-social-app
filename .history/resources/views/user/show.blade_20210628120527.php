@extends('layouts.app')


@foreach($user as $users)

    {{ $users->pseudo }}

@endforeach