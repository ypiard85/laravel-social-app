@extends('layouts.app')

@section('content')

<form action="{{ '/user/show/' }}{{ $user->id }} " method="POST">
    <input class="form-control" type="text" name="prenom" value="{{old('Prenom', $user->prenom)}}">
    <input class="input" type="text" name="nom" value="{{old('Prenom', $user->nom)}}">

</form>


@endsection