@extends('layouts.app')
@section('body')
hello
@if(session('name'))
	{{ session('name') }}
@endif
@endsection