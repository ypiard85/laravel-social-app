@extends('layouts.app')

@section('content')

<form action="{{ route('user_update', $user) }}" method="post" >
    @method('put')
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="prenom">Prenom</label>
                <input class="form-control" type="text" name="prenom" value="{{ $user->prenom}}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="nom">Nom</label>
                <input class="form-control" type="text" name="nom" value="{{ $user->nom}}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="pseudo">Pseudo</label>
                <input class="form-control" type="text" name="pseudo" value="{{ $user->pseudo }}">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Sauvegarder</button>
    </div>

</form>


@endsection