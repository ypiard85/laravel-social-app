@extends('layouts.app')

@section('content')


    {{ Form::text('pseudo', Input::old('peuso')) }}
    {{ Form::text('fieldname2', Input::old('fieldname2')) }}
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

@endsection