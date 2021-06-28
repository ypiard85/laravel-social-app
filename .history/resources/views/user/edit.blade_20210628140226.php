@extends('layouts.app')

@section('content')

<form action="{{ $profile->id == null ? '/admin/profiles' :  '/admin/profiles/' . $profile->id }} " method="POST">
    
</form>


@endsection