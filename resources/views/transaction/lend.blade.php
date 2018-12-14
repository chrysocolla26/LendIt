@extends('layouts.master')

@section('title', 'Lend Item' )

@section('extcss')
<style type="text/css">
	.body{
		font-size: 14px;
	}
</style>
@endsection

@section('content')
<div class="body" align="center">
	<div class="form-group" style="background-color: yellow; width: 500px;">
		<form method="POST" action="/lend-post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group" align="left">
				<label for="product-name">Product Name:</label>
				<input type="text" class="form-control" id="product-name" name="product_name" placeholder="Product Name">
			</div>

			<div class="form-group" align="left">
				<label for="product-stock">Product Stock:</label>
				<input type="number" min="1" class="form-control" id="product-stock" name="product_stock" placeholder="Stock">
			</div>

			<div class="form-group" align="left">
				<label for="product-description">Description:</label>
			    <textarea class="form-control" rows="5" id="product-description" name="product_description" placeholder="Product Description"></textarea>
		    </div>

		    <div class="form-group" align="left">
				<label for="product-minimum">Minimum:</label>
				<input type="text" class="form-control" id="product-minimum" name="product_minimum" placeholder="Minimum" data-toggle="tooltip" data-placement="right" title="Minimum lama peminjaman barang">
			</div>

			<div class="form-group" align="left">
				<label for="product-maximum">Maximum:</label>
				<input type="text" class="form-control" id="product-maximum" name="product_maximum" placeholder="Maximum" data-toggle="tooltip" data-placement="right" title="Maximum lama peminjaman barang">
		    </div>

		    <div class="form-group">
		        <label>Upload Image</label>
		        <div class="input-group">
		            <span class="input-group-btn">
		                <span class="btn btn-default btn-file">
		                    Browse… <input type="file" id="imgInp">
		                </span>
		            </span>
		            <input type="text" class="form-control" readonly>
		        </div>
		        <img id='img-upload'/>
		    </div>

			<input type="submit" class="btn">
		</form>
	</div>
</div>
@endsection

@section('extscript')
<script type="text/javascript">
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();   
	});
</script>
@endsection