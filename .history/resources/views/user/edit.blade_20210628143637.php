@extends('layouts.app')

@section('content')

<form action="{{ Route('user.update', Auth::user() ) }}" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="prenom">Prenom</label>
                <input class="form-control" type="text" name="prenom" value="{{old('Prenom', $user->prenom)}}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="nom">Nom</label>
                <input class="form-control" type="text" name="nom" value="{{old('Prenom', $user->nom)}}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="pseudo">Pseudo</label>
                <input class="form-control" type="text" name="pseudo" value="{{old('Pseudo', $user->pseudo)}}">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Sauvegarder</button>
    </div>

</form>


@endsection