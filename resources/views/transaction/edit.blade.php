@extends('layouts.master')

@section('title', 'Lend Item' )

@section('extcss')
	<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
	<style type="text/css">
		.btn-file {
		    position: relative;
		    overflow: hidden;
		}
		.btn-file input[type=file] {
		    position: absolute;
		    top: 0;
		    right: 0;
		    min-width: 100%;
		    min-height: 100%;
		    font-size: 100px;
		    text-align: right;
		    filter: alpha(opacity=0);
		    opacity: 0;
		    outline: none;
		    background: white;
		    cursor: inherit;
		    display: block;
		}

		button[type=submit] {
			width: 200px;
			align-self: center;
		}

		#img-upload{
		    width: 100%;
		    height: auto;
		}

		.grid-container{
			display: grid;
			grid-template-columns: 50% auto auto;
			padding: 10px;
		}

		.upload-image{
			margin-top: 40px;
		}

		.detail-input{
			width: 100%;
		}

		.btn-lend{
			width: 50%; 
			background-color: #343a40; 
			font-size: 18px;
		}

		.delete-button{
			padding: 30px;
		}
	</style>
@endsection

@section('content')
<div class="grid-container">
	<div class="grid-item image-input">
		@php
			$link = '/images/'.$post->link;
		@endphp
		<form method="POST" action="/edit-post" enctype="multipart/form-data" class="form-signin">
			{{csrf_field()}}
		<div class="form-group upload-image">
	        <h4>Upload Different Product Image</h4>
	        <div class="input-group">
	            <span class="input-group-btn">
	                <span class="btn btn-default btn-file">
	                    Browse… <input type="file" id="imgInp" name="product_image" disabled>
	                </span>
	            </span>
	            <input type="text" class="form-control" readonly>
	        </div>
	        <br>
	        <img id='img-upload' src=""/>
	    </div>
	</div>
	<div class="grid-item detail-input">	
	    	<div class="text-center mb-4">
		    	<img class="mb-4" id="imageBackground" src="" alt="" width="144px" height="144px">
		        <h1 class="h3 mb-3 font-weight-normal">Change your item description</h1>
		        <p>
		        	Edit your item descriptions.
	        	</p>
	    	</div>

		    <div class="form-label-group">
					<input type="text" class="form-control" id="product-name" name="product_name" placeholder="Product Name" value="{{$post->product_name}}">
					<label for="product-name">Product Name</label>
		    </div>

		    <div class="form-label-group">
					<input type="number" min="1" max="99" class="form-control" id="product-stock" name="product_stock" placeholder="Stock" data-toggle="tooltip" data-placement="right" title="Stock barang yang dimiliki" value="{{$post->product_stock}}">
					<label for="product-stock">Product Stock</label>
		    </div>

		    <div class="form-label-group">
				    <textarea class="form-control" rows="5" id="product-description" name="product_description" placeholder="Product Description" data-toggle="tooltip" data-placement="right" title="Deskripsi detail produk yang akan dipinjamkan">{{$post->product_description}}</textarea>
				    <label for="product-description">Description</label>
		    </div>

		    <div class="form-label-group">
					<input type="number" min="1" max="99" class="form-control" id="product-minimum" name="product_minimum" placeholder="Minimum" data-toggle="tooltip" data-placement="right" title="Minimum lama peminjaman barang (hari)" value="{{$post->product_minimum}}">
					<label for="product-minimum">Minimum</label>
		    </div>

		    <div class="form-label-group">
					<input type="number" min="1" max="99" class="form-control" id="product-maximum" name="product_maximum" placeholder="Maximum" data-toggle="tooltip" data-placement="right" title="Maximum lama peminjaman barang (hari)" value="{{$post->product_maximum}}">
					<label for="product-maximum">Maximum</label>
		    </div>

		    <div class="form-label-group">
					<input type="text" class="form-control" id="price" name="price" placeholder="Product Price" data-toggle="tooltip" data-placement="right" title="Harga peminjaman barang per hari" value="{{$post->price}}">
					<label for="price">Product Price</label>
		    </div>

		    <div class="form-label-group" align="center">
		    		<button class="btn btn-lg btn-primary btn-block btn-lend" type="submit">Lend Item</button>
		    </div>
	    </div>
	    <div class="grid-item delete-button">
	    	<a href="/delete-post"><button type="button" class="btn btn-outline-danger">Delete your post</button></a>
	    </div>
    </form>
</div>
@endsection

@section('extscript')
<script type="text/javascript">
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();   
	});
	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		            $('#img-upload').css('border', '1px solid black');
		            $('#img-upload').css('background-color', 'white');
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>
@endsection