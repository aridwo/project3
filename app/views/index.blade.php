<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<meta charset="utf-8" />
<body>
@extends('_master')
@section('title')
Project 3 - Arielle Dworkin
<h2>Developer's Best Friend</h2>
<hr>
@stop
@section('content')
<h4>Lorem Ipsum Generator</h4>
<p>Lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. This application allows you to generate 1-10 paragraphs of lorem ipsum text.</p>
<a href="/loremipsum"><button>Generate Lorem Ipsum</button></a>
<br><br>
<h4>Random User Generator</h4>
<p>This application allows you to create random user data for your applications. Like Lorem Ipsum, but for people. This application allows you to generate up to 10 users at a time, each with a unique name and address.</p>
<a href="/randomuser"><button>Generate Random Users</button></a>
@stop
</body>
</html>