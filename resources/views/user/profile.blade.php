@extends('layouts.nav')


@section('title', 'Profile' )

@section('extcss')

@endsection


@section('content')
<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2>PROFILE</h2>
				<div class="card text-white bg-secondary mb-4 shadow-sm h-md-250">
					<div class="card-header">
						<h6>{{ $user->name }}</h6>
					</div>
					<div class="card-header">
						<img class="profile-image" src="/images/profiles/{{ $user->picture }}">
					</div>
					<div class="card-body">
						<h6 class="card-title">email</h6>
						<p class="card-text">{{ $user->email }}</p>
						<h6 class="card-title">phone</h6>
						<p class="card-text">{{ $user->phone }}</p>
						<h6 class="card-title">address</h6>
						<p class="card-text">{{ $user->address }}</p>
						<h6 class="card-title">member since</h6>
						<p class="card-text">{{ date('F Y' ,strtotime($user->created_at)) }}</p>

						@if($user->id == Session('id'))
							<a href="/edit-profile/{{Session('id')}}">
								<button type="button" class="btn btn-primary">Edit Profile</button>
							</a>
						@endif
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
	                			<a class="text-dark" href="/borrow/{{$post->product_name}}/{{ $post->id }}">{{ $post->product_name }}</a>
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
	                			<a class="text-dark" href="/borrow/{{$post->product_name}}">{{ $post->product_name }}</a>
	              			</h3>
	          			<div class="mb-1 text-muted">{{ date('d F Y', strtotime($post->created_at)) }} | Stock: {{$post->product_stock}}</div>
	          			<p class="card-text mb-1">
	          				{{ $post->product_description }}
	          			</p>
	              		<a href="/edit/{{$post->product_name}}/{{$post->id}}" style="z-index: 101; color:white;">Edit your post</a>
	           	 	</div>
          		</div>
          		@endif
				@endforeach
				@else
					<div class="card flex-md-row mb-4 shadow-sm h-md-250 content" style="padding:10px">
						You haven't post yet
					</div>
				@endif
				<nav aria-label="pagination">
					{{$posts->links()}}
				</nav>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extscript')
@endsection