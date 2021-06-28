@extends('layouts.app')


@section('content')

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Pseudo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $user->prenom }}</th>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
            </tbody>
          </table>

        @auth
        <a href="{{ route('user_edit', Auth::user() ) }}" class="btn btn-primary">Modifier le profil</a>
        @endauth
    </div>

@endsection
