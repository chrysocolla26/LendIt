@extends('layouts.master')

@section('title', 'Lend Item' )

@section('extcss')
	<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
@endsection

@section('content')
<div class="container">
	<form method="POST" action="/lend-post" enctype="multipart/form-data" class="form-signin">
		{{csrf_field()}}
    	<div class="text-center mb-4">
	    	<img class="mb-4" id="imageBackground" src="" alt="" width="144px" height="144px">
	        <h1 class="h3 mb-3 font-weight-normal">Title</h1>
	        <p>
	        	Description.
        	</p>
    	</div>

	    <div class="form-label-group">
				<input type="text" class="form-control" id="product-name" name="product_name" placeholder="Product Name">
				<label for="product-name">Product Name</label>
	    </div>

	    <div class="form-label-group">
				<input type="number" min="1" class="form-control" id="product-stock" name="product_stock" placeholder="Stock">
				<label for="product-stock">Product Stock</label>
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

	    <div class="form-group">
	    	<input type="file" class="form-control-file" name="product_image" id="product-image">
	    </div>
	    	
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
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