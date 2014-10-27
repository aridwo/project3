@extends('_master')
@section('title')
Lorem Ipsum Generator
@stop
@section('content')
{{ Form::open(array('url' => '/loremipsum', 'method' => 'POST')) }}
<h4>Lorem Ipsum Generator</h4>
@if ($errors->has())
<p>Number of Paragraphs (10 max):
{{ Form::text('paragraph_number', $paragraph_number, array('class' => 'error')) }}
</p>
<small>
@foreach ($errors->all() as $message)
{{ $message }}
@endforeach
</small>
@else
<label>Paragraphs (10 max)
{{ Form::text('paragraph_number', $paragraph_number) }}
</label>
@endif
{{ Form::submit('Generate', array()) }}
{{ Form::close() }}
<br />
@foreach ($paragraphs as $paragraph)
<p>
{{ $paragraph }}
</p>
@endforeach
@stop
</body>