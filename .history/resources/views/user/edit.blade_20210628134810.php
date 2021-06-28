@extends('layouts.app')

@section('content')


    {{ Form::text('fieldname1', Input::old('fieldname1')) }}
    {{ Form::text('fieldname2', Input::old('fieldname2')) }}
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

@endsection