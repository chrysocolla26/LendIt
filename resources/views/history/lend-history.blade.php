@extends('layouts.nav')

@section('title', 'Lend History')

@section('extcss')

@endsection

@section('content')
<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>LEND HISTORY</h2>
          		@foreach($lends as $i=>$post)
				<div class="card flex-md-row mb-4 shadow-sm h-md-250 content" id="product{{ $i }}">
            		<img src="/images/products/{{ $post->post->link }}" class="card-img-left flex-auto d-none d-lg-block col-md-4" data-holder-rendered="true" style="width: 100%; height: 100%; object-fit: contain; margin: auto 0;">
	           		<div class="card-body d-flex flex-column align-items-start col">
	           			<div>
		           			<b>Borrower : </b>
		              		<strong class="d-inline-block text-primary">
		              			<a href="/profile/{{ $post->user->name }}" title="">{{$post->user->name}}</a>
		              		</strong>
	              		</div>
	              		<div>
	              			<b>Lender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
		              		<strong class="d-inline-block text-primary">
		              			<a href="/profile/{{ $post->post->user->name }}" title="">{{$post->post->user->name}}</a>
		              		</strong>
	              		</div>
	              			<h3 class="mb-0">
	                			<a class="text-dark" href="/borrow/{{$post->post->product_name}}/{{$post->post->id}}">{{ $post->post->product_name }}</a>
	              			</h3>
	          			<div class="mb-1 text-muted">Requested : {{ date('d F Y', strtotime($post->created_at)) }} </div>
	          			<div class="mb-1 text-muted">Stock Requested : {{$post->borrow_qty}}</div>
	          			<div class="mb-1 text-muted">Number of days requested : {{ $post->borrow_days }}</div>
	          			<p class="card-text mb-1">
	          				{{ $post->post->product_description }}
	          			</p>
	          			<div class="container">
		          			<div class="d-flex justify-content-between" style="margin-top: 10px">
		          				<div>
			              		@if($post->user_id == Session('id'))
			              		<a href="/edit/{{$post->post->product_name}}/{{$post->post->id}}">Edit your post</a>
			              		@else
			              		<a href="/borrow/{{$post->post->product_name}}/{{$post->post->id}}">Continue reading</a>
			          			@endif
			          			</div>
			          			<div>
			          			@if($post->status == "Requested")
			          			<button type="button" class="btn btn-success"><span class="fas fa-check-circle"></span> Accept Request</button>
			          			<button type="button" class="btn btn-danger"><span class="fas fa-times-circle"></span> Decline</button>
			          			@endif
			          			</div>
		          			</div>
	          			</div>
	           	 	</div>
          		</div>
					@php
						$i++;
					@endphp
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection

@section('extscript')
@endsection