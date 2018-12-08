@extends('layouts.master')

@section('title', 'HOME')

@section('extcss')
@endsection


@section('content')
	<div class="container">
		<div class="side-nav">
			<div class="left-username">
				<img src="{{ URL::asset('images/backpack.png') }}">
				Richie Muliawan
			</div>
			<div class="left-nav">
				<div class="link-menu">Home</div>
				<div class="link-menu">Message</div>
				<div class="link-menu">Marketplace</div>
			</div>
		</div>
		<div class="main-content">

			@foreach($posts as $post)
			@php
				$i = 1;
			@endphp
			<div id="product{{$i}}" class="product">
				<div class="product-title">
					<a href="/profile/{{$post->user->name}}" title="">{{$post->user->name}}</a>
					<span class="post-time">{{$post->post_time}}</span>
				</div>
				<div class="product-img">
					<table>
						<tr>
							<td><img src="{{URL::asset('images/')}}{{$post->link}}"></td>
						</tr>
					</table>
				</div>
				<div class="product-desc">
					<table>
						<tr>
							<td style="vertical-align: top;">Nama</td>
							<td style="vertical-align: top;">:</td>
							<td>{{$post->product_name}}</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">Stock</td>
							<td style="vertical-align: top;">:</td>
							<td>{{$post->product_stock}}</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">Deskripsi</td>
							<td style="vertical-align: top;">:</td>
							<td>{{$post->product_description}}</td>
						</tr>
					</table>
				</div>
			</div>
			@php
				$i++;
			@endphp
			@endforeach
		</div>
		<div class="side-news">
			<div class="detail-news">
				<img src="{{ URL::asset('images/backpack.png') }}">
				<div class="overlay">
					<div class="news-desc">This is a backpack.</div>
				</div>
			</div>
			<div class="detail-news">
				<img src="{{ URL::asset('images/camera.png') }}">
				<div class="overlay">
					<div class="news-desc">This is a camera.</div>
				</div>
			</div>
			<div class="detail-news">
				<img src="{{ URL::asset('images/ladder.png') }}">
				<div class="overlay">
					<div class="news-desc">This is a ladder.</div>
				</div>
			</div>
			<div class="detail-news">
				<img src="{{ URL::asset('images/ladder.png') }}">
				<div class="overlay">
					<div class="news-desc">This is a ladder.</div>
				</div>
			</div>
		</div>
		{{-- <div class="side-chat">Chat</div> --}}
	</div>
@endsection

@section('extscript')
@endsection