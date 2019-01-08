@extends('layouts.nav')

@section('title', 'HOME')

@section('extcss')

@endsection

@section('content')
<div class="album py-5 bg-light">
	<div class="container">
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
          		@foreach($posts as $i=>$post)
          		@if($post->product_stock > 0)
				<div class="card flex-md-row mb-4 shadow-sm h-md-250 content" id="product{{ $i }}">
            		<img src="/images/products/{{ $post->link }}" class="card-img-left flex-auto d-none d-lg-block col-md-4" data-holder-rendered="true" style="width: 100%; height: 100%; object-fit: contain; margin: auto 0;">
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
					@endif
				@endforeach
			</div>
			<div class="col-md-2">
				<h2>NEWS</h2>
				<div class="card mb-4 shadow-sm news">
					<img src="/images/products/camera.png" style="object-fit: contain; height: 100%; width: 100%;">
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