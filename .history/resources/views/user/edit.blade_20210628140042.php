@extends('layouts.app')

@section('content')

{{ Form::model($user) }}
    {{ Form::text('pseudo') }}
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

@endsection