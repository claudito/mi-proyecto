
@extends('layout')


@section('title','Usuarios')

@section('content')

<h1>{{ $title }}</h1>

<ul>
@foreach ($users as $key => $value)
	
<li>{{ $value }}</li>

@endforeach
</ul>

@endsection('content')