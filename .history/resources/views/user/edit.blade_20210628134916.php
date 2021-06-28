@extends('layouts.app')

@section('content')

{{ Form::model($user, ['route' => ['updateroute', $user->id], 'method' => 'patch']) }}
    {{ Form::text('pseudo', Input::old('pseudo')) }}
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

@endsection