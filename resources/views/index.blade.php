@extends('layouts.app')
@section('body')
hello
@if(session('name'))
	{{ session('name') }}
@endif
@foreach($data as $i)
<div class="">
	<div class="">
		<h2>{{ $i->name }}</h2>
		<small>{{ $i->desc }}</small>
		<p class="">{{ $i->price }}</p>

	</div>
</div>
@endforeach
@endsection