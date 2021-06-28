@extends('layouts.app')

@section('content')

{{ Form::model($user) }}
    {{ Form::text('pseudo') }}
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'Enregistrer']) }}
{{ Form::close() }}

@endsection