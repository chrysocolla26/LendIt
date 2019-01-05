@extends('layouts.master')

@section('title', 'HOME')

@section('extcss')

@endsection

@section('content')
<div class="album py-5 bg-light">
	<div class="container-fluid">
		<div class="row">
{{-- SIDE --}}
			<div class="col-md-2">
				<h2>SIDE NAV</h2>
				<div class="card flex-md-row mb-4 shadow-sm h-md-250">
					as
				</div>
			</div>
			<div class="col">
				<h2>RECENT</h2>
<!-- 				<div class="card flex-md-row mb-4 shadow-sm h-md-250 content">
            		<img src="{{ URL::asset('images/backpack.png') }}" class="card-img-left flex-auto d-none d-lg-block col-md-4" data-holder-rendered="true" style="width: 100%; height: 100%; object-fit: contain; margin: auto 0;">
	           		<div class="card-body d-flex flex-column align-items-start col">
	              		<strong class="d-inline-block mb-2 text-primary">Photography</strong>
	              			<h3 class="mb-0">
	                			<a class="text-dark" href="#">Photographer Travel Backpack</a>
	              			</h3>
	          			<div class="mb-1 text-muted">Nov 12</div>
	          			<p class="card-text mb-1">This is a wider card with supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	          			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	          			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	          			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	          			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	          			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	              		<a href="#">Continue reading</a>
	           	 	</div>
          		</div> -->



          		@foreach($posts as $post)
					@php
						$i = 1;
						$link = '/images/'.$post->link;
					@endphp
				<div class="card flex-md-row mb-4 shadow-sm h-md-250 content" id="product{{ $i }}">
            		<img src="{{ $link }}" class="card-img-left flex-auto d-none d-lg-block col-md-4" data-holder-rendered="true" style="width: 100%; height: 100%; object-fit: contain; margin: auto 0;">
	           		<div class="card-body d-flex flex-column align-items-start col">
	              		<strong class="d-inline-block mb-2 text-primary">
	              			<a href="/profile/{{ $post->user->name }}" title="">{{$post->user->name}}</a>
	              		</strong>
	              			<h3 class="mb-0">
	                			<a class="text-dark" href="/borrow/{{ $post->product_name }}/{{ $post->id }}">{{ $post->product_name }}</a>
	              			</h3>
	          			<div class="mb-1 text-muted">{{ $post->post_time }} | Stock: {{$post->product_stock}}</div>
	          			<p class="card-text mb-1">
	          				{{ $post->product_description }}
	          			</p>
	              		@if($post->user_id == Session('id'))
	              		<a href="/edit/{{$post->product_name}}/{{$post->id}}">Edit your post</a>
	              		@else
	              		<a href="/borrow/{{$post->product_name}}/{{$post->id}}">Continue reading</a>
	          			@endif
	           	 	</div>
          		</div>
					@php
						$i++;
					@endphp
				@endforeach
			</div>
			<div class="col-md-2">
				<h2>NEWS</h2>
				<div class="card mb-4 shadow-sm news">
					<img src="{{ URL::asset('images/camera.png') }}" style="object-fit: contain; height: 100%; width: 100%;">
					<div class="overlay">
						<div class="card-desc">50%</div>
					</div>
					<div class="card-body">
						<p class="card-text" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden; text-align: center;">
							Judul
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extscript')
@endsection