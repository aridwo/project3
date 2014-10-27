<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<meta charset="utf-8" />
<body>
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
</html>
    






