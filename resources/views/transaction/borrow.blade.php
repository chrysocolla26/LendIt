@extends('layouts.master')

@section('title', 'Borrow Item' )

@section('extcss')
	<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
@endsection

@section('content')
<div class="container">
	<form method="POST" action="/borrow-post" enctype="multipart/form-data" class="form-signin">
		{{csrf_field()}}
    	<div class="text-center mb-4">
	    	<img class="mb-4" id="imageBackground" src="" alt="" width="144px" height="144px">
	        <h1 class="h3 mb-3 font-weight-normal">Title</h1>
	        <p>
	        	Description.
        	</p>
    	</div>

		<div class="input-group mb-3">
		  	<select class="custom-select" id="inputGroupSelect01">
		    	<option selected>Product Name</option>
		    	@foreach($posts as $post)
					<option value="{{$post->id}}">{{ $post->product_name }}</option>
		    	@endforeach
		  	</select>
		</div>

	    <div class="input-group mb-3">
		  	<select class="custom-select" id="inputGroupSelect01">
		    	<option selected>Quantity</option>
		    
				<option value="{{$post->id}}">{{ $post->product_stock }}</option>
		    	
		  	</select>
		</div>

	    <div class="form-label-group">
			    <textarea class="form-control" rows="5" id="product-description" name="product_description" placeholder="Product Description"></textarea>
			    <label for="product-description">Description</label>
	    </div>

	    <div class="form-label-group">
				<input type="text" class="form-control" id="product-minimum" name="product_minimum" placeholder="Minimum" data-toggle="tooltip" data-placement="right" title="Minimum lama peminjaman barang (hari)">
				<label for="product-minimum">Minimum</label>
	    </div>

	    <div class="form-label-group">
				<input type="text" class="form-control" id="product-maximum" name="product_maximum" placeholder="Maximum" data-toggle="tooltip" data-placement="right" title="Maximum lama peminjaman barang (hari)">
				<label for="product-maximum">Maximum</label>
	    </div>

	    
	    	
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    </form>
</div>
@endsection

@section('extscript')
<script type="text/javascript">
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();   
	});
</script>
@endsection