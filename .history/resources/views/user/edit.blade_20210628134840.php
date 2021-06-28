@extends('layouts.app')

@section('content')


    {{ Form::text('pseudo', Input::old('pseudo')) }}
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

@endsection