@extends('layouts.app')

@section('content')

<form action="{{ '/user/show/' }}{{ $user->id }} " method="POST">
    <input class="input" type="text" name="name" value="{{old('Prenom', $user->prenom)}}">

</form>


@endsection