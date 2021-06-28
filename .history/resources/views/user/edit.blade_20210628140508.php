@extends('layouts.app')

@section('content')

<form action="{{ '/user/show/' }}{{ $user->id }} " method="POST">
    <div class="row">
        <div class="col-md-3">

            <input class="form-control" type="text" name="prenom" value="{{old('Prenom', $user->prenom)}}">
        </div>
        <input class="form-control" type="text" name="nom" value="{{old('Prenom', $user->nom)}}">
    </div>

</form>


@endsection