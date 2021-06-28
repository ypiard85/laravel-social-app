@extends('layouts.app')

@section('content')

<form action="{{ '/user/show/' }}{{ $user->id }} " method="POST">
    
</form>


@endsection