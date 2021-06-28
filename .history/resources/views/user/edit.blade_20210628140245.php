@extends('layouts.app')

@section('content')

<form action="{{ $user->id == null ? '/user/' :  '/admin/profiles/' . $profile->id }} " method="POST">

</form>


@endsection