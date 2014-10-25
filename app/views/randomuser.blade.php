@extends('_master')
@section('title')
Random User Generator
@stop
@section('content')
{{ Form::open(array('url' => '/randomuser', 'method' => 'POST')) }}
<h4>Random User Generator</h4>
@if ($errors->has())
<p>Users (10 max)
{{ Form::text('user_number', $user_number, array('class' => 'error')) }}
</p>
<small>
@foreach ($errors->all() as $message)
{{ $message }}
@endforeach
</small>
@else
<label>Users (10 max)
{{ Form::text('user_number', $user_number) }}
</label>
@endif
{{ Form::submit('Generate', array()) }}
{{ Form::close() }}
@foreach ($users as $user)
<p>{{ $user['first_name'] . ' ' . $user['last_name'] }}
<br>
{{ $user['street'] }}
<br />
{{ $user['city'] . ', ' . $user['state'] . ' ' . $user['postcode'] }}
</p>
@endforeach
@stop