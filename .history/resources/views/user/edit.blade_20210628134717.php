@extends('layouts.app')

@section('content')

@if(isset($user))
    {{ Form::model($user, ['route' => ['updateroute', $user->id], 'method' => 'patch']) }}
@else
    {{ Form::open(['route' => 'createroute']) }}
@endif

    {{ Form::text('fieldname1', Input::old('fieldname1')) }}
    {{ Form::text('fieldname2', Input::old('fieldname2')) }}
    {{-- More fields... --}}
    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

@endsection