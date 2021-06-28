@extends('layouts.app')


@section('content')

    <div class="container">
        <h1>Modifier le mot de passe</h1>
        @if($error)
        <div class="alert alert-danger"></div>
        
        <form action="{{ route('user_update', $user ) }}" method="POST" >
            @method('PUT')
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="prenom">Mot de passe actuel</label>
                        <input class="form-control" type="password" name="password_actual" >
                        <label for="nom">Nouveau mot de passe</label>
                        <input class="form-control" type="password" name="password" >
                        <label for="pseudo">Pseudo</label>
                        <input class="form-control" type="text" name="password_confirm">
                        <button class="btn btn-primary mt-3" type="submit">Modifier</button>
                    </div>
            </div>
            @csrf
        </form>
    </div>

@endsection