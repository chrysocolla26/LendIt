@extends('layouts.master')

@section('title', 'Borrow Item' )

@section('extcss')
	<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
@endsection

@section('content')
@php
	$link = '/images/'.$post->link;
@endphp
	<div>
		<img src="{{$link}}">
	</div>
@endsection

@section('extscript')

@endsection