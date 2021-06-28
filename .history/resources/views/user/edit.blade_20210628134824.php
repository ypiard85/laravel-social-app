@extends('layouts.app')

@section('content')


    {{ Form::text('pseudo', Input::old('peuso')) }}
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

@endsection