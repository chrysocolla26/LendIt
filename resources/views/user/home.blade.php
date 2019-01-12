@extends('layouts.nav')

@section('title', 'HOME')

@section('extcss')

@endsection

@section('content')
<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
{{-- SIDE --}}
			<div class="col-md-3">
				<h2>NOTICE</h2>
				@foreach($lends as $i=>$lend)
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">{{$lend->user->name}}</h5>
				     <h6 class="card-subtitle mb-2 text-muted">has request to borrow your:</h6>
				    <p class="card-text">{{ $lend->post->product_name }}</p>

				    @if($lend->status == "Requested")
          			<a href="/lend-accept/{{$lend->post->product_name}}/{{$lend->post->id}}/{{$lend->id}}"><button type="button" class="btn btn-success"><span class="fas fa-check-circle"></span> Accept Request</button></a>
          			<a href="/lend-decline/{{$lend->post->product_name}}/{{$lend->post->id}}/{{$lend->id}}"><button type="button" class="btn btn-outline-danger"><span class="fas fa-times-circle"></span> Decline</button></a>

          			@elseif($lend->status == "Pay")
          			<button type="button" class="btn btn-warning"><span class="fas fa-money-bill-wave"></span> Waiting for payment</button>

          			@elseif($lend->status == "Paid")
          			<a href="/lend-deliver/{{$lend->post->product_name}}/{{$lend->post->id}}/{{$lend->id}}"><button type="button" class="btn"><span class="fas fa-truck"></span> Deliver</button></a>

          			@elseif($lend->status == "Delivered")
          			<a href="/lend-deliver/{{$lend->post->product_name}}/{{$lend->post->id}}/{{$lend->id}}"><button type="button" class="btn btn-success"><span class="fas fa-check-circle"></span> Delivered</button></a>

          			@elseif($lend->status == "On Going")
          			<a href="/lend-history"><button type="button" class="btn"><span class="fas fa-clock"></span> On Going</button></a>

          			@endif
				  </div>
				</div>
				@endforeach
				<!-- <div class="card">
				  <div class="card-body">
				    <h5 class="card-title">Klemens Litano</h5>
				     <h6 class="card-subtitle mb-2 text-muted">has request to borrow your:</h6>
				    <p class="card-text">detail</p>
				    <a href="#" class="btn btn-primary">Process Request</a>
				  </div>
				</div> -->
				<div class="card shadow-sm news">
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
			<div class="col">
				<h2>RECENT</h2>
				@if(count($posts)!=0)
          		@foreach($posts as $i=>$post)
          		@if($post->product_stock != 0)
				<div class="card flex-md-row mb-4 shadow-sm h-md-250 content" id="product{{ $i }}">
            		<img src="/images/products/{{ $post->link }}" class="card-img-left flex-auto d-none d-lg-block col-md-4" data-holder-rendered="true" style="width: 100%; height: 100%; object-fit: contain; margin: auto 0;">
	           		<div class="card-body d-flex flex-column align-items-start col">
	              		<strong class="d-inline-block mb-2 text-primary">
	              			<a href="/profile/{{ $post->user->name }}" title="">{{$post->user->name}}</a>
	              		</strong>
	              			<h3 class="mb-0">
	                			<a class="text-dark" href="/borrow/{{ $post->product_name }}/{{ $post->id }}">{{ $post->product_name }}</a>
	              			</h3>
	          			<div class="mb-1 text-muted">{{ date('d F Y', strtotime($post->created_at)) }} | Stock: {{$post->product_stock}}</div>
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
          		@else
          		<div class="card flex-md-row mb-4 shadow-sm h-md-250 content" id="product{{ $i }}">
            		<img src="/images/products/{{ $post->link }}" class="card-img-left flex-auto d-none d-lg-block col-md-4" data-holder-rendered="true" style="width: 100%; height: 100%; object-fit: contain; margin: auto 0;">
            		<div class="out-of-stock">
            			<div class="card-desc">
            				OUT OF STOCK
            			</div>
            		</div>
	           		<div class="card-body d-flex flex-column align-items-start col">
	              		<strong class="d-inline-block mb-2 text-primary">
	              			<a href="/profile/{{ $post->user->name }}" title="">{{$post->user->name}}</a>
	              		</strong>
	              			<h3 class="mb-0">
	                			<a class="text-dark" href="/borrow/{{ $post->product_name }}/{{ $post->id }}">{{ $post->product_name }}</a>
	              			</h3>
	          			<div class="mb-1 text-muted">{{ date('d F Y', strtotime($post->post_time)) }} | Stock: {{$post->product_stock}}</div>
	          			<p class="card-text mb-1">
	          				{{ $post->product_description }}
	          			</p>
	              		@if($post->user_id == Session('id'))
	              		<a href="/edit/{{$post->product_name}}/{{$post->id}}" style="z-index: 101; color:white;">Edit your post</a>
	              		@else
	              		<a href="/borrow/{{$post->product_name}}/{{$post->id}}">Continue reading</a>
	          			@endif
	           	 	</div>
          		</div>
          		@endif
				@endforeach
				@else
				<div class="card flex-md-row mb-4 shadow-sm h-md-250 content">
					Data Not Found!
				</div>
				@endif
			</div>
{{-- 			<div class="col-md-2">
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
			</div> --}}
		</div>
	</div>
</div>
@endsection

@section('extscript')
@endsection