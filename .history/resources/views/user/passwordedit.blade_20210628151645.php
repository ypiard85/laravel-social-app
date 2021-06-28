@extends('layouts.app')


@section('content')

    <div class="container">
        <h1>Modifier le mot de passe</h1>
        <form action="{{ route('user_update', $user ) }}" method="POST" >
            @method('PUT')
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="prenom">Mot de passe actuel</label>
                        <input class="form-control" type="text" name="prenom" >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="nom">Nouveaux mot de passe</label>
                        <input class="form-control" type="text" name="nom" value="{{ $user->nom}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="pseudo">Pseudo</label>
                        <input class="form-control" type="text" name="pseudo" value="{{ $user->pseudo }}">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Sauvegarder</button>
            </div>
            @csrf

        </form>
    </div>

@endsection