@extends('_master')
@section('title')
Random User Generator
@stop

@section('content')
{{ Form::open(array('url' => '/randomuser', 'method' => 'POST')) }}

<h4>Random User Generator</h4>
<br />
@if ($errors->has())
<label class="error">Users (10 max)
{{ Form::text('user_count', $user_count, array('class' => 'error')) }}
</label>
<small class="error">
@foreach ($errors->all() as $message)
{{ $message }}
@endforeach
</small>
@else
<label>Users (10 max)
{{ Form::text('user_count', $user_count) }}
</label>
@endif


<br />
{{ Form::submit('Generate', array('class' => 'small button radius')) }}

{{ Form::close() }}
<br />

@foreach ($users as $user)
<p>{{ $user['first_name'] . ' ' . $user['last_name'] }}
<br>
{{ $user['street'] }}
<br />
{{ $user['city'] . ', ' . $user['state'] . ' ' . $user['postcode'] }}
<br>
@if ($profile)
{{ $user['bio'] }}</p>
@endif
@endforeach
@stop