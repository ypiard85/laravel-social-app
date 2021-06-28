@extends('layouts.app')

@section('content')

{{ Form::open(['route' => 'user_edit']) }}
    {{ Form::text('pseudo', Input::old('pseudo')) }}
    {{-- More fields... --}}        
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

@endsection