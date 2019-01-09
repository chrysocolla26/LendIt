@extends('layouts.nav')

@section('title', 'Borrow Item' )

@section('extcss')
	<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
	<link rel="stylesheet" type="text/css" href="/css/template.css">
@endsection

@section('content')
<div class="album py-5 bg-light">
	<div class="grid-container container card">
		<div class="item1">
			<img src="/images/products/{{$post->link}}">
		</div>
		<div class="item2">
			<div class="product-title">
				<b>{{$post->product_name}}</b>
			</div>
			<div class="product-detail">
				<label>Lender :</label> <b>{{ $post->user->name }}</b><br>
				<label>Posted :</label> <b>{{$post->created_at}}</b> <br>
				<label>Stock :</label> <b>{{$post->product_stock}}</b> <br>
				<label>Minimum : </label><b> {{$post->product_minimum}}</b> &nbsp;&nbsp;&nbsp; <label>Maximum : </label><b> {{$post->product_maximum}} day(s)</b> <br>
				<label>Price :</label> <b> Rp. {{$post->price}} / day</b> <br> <br>
				<label>Product Description :</label> <br>
				
				<p>{{$post->product_description}}</p>
			</div>
			<div class="form-borrow">
				<form method="POST" action="/borrow-post" enctype="multipart/form-data" class="form-borrow">
					{{csrf_field()}}
					<div class="form-label-group">
						<input type="number" value="{{$post->product_minimum}}" min="{{$post->product_minimum}}" max="{{$post->product_maximum}}" class="form-control" id="borrow-days" name="borrow_days" placeholder="" data-toggle="tooltip" data-placement="right" title="Jumlah hari peminjaman" onchange="changePrice()">
						<label for="borrow-days">Total Day</label>
			    	</div>
			    	<div class="form-label-group">
						<input type="number" value="1" min="1" max="{{$post->product_stock}}" class="form-control" id="borrow-qty" name="borrow_qty" placeholder="" data-toggle="tooltip" data-placement="right" title="Jumlah barang yang akan dipinjam" onchange="changePrice()">
						<label for="borrow-qty">Total Item</label>
			    	</div>
			    	<div>
			    		Total Price : Rp. <b id="total-price">{{$post->price}}</b>
			    	</div>
			    	<!-- <div class="col-sm-3">
			            <div class="input-group">
			                <span class="input-group-btn">
					              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="total_borrow2">
					                  <span class="glyphicon glyphicon-minus"></span>
					                </button>
					                </span>
						                <input type="text" name="total_borrow2" class="form-control input-number" value="{{$post->product_minimum}}" min="{{$post->product_minimum}}" max="{{$post->product_maximum}}" style="width: 500px">
						                <span class="input-group-btn">
						              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="total_borrow2">
						                  <span class="glyphicon glyphicon-plus"></span>
					                </button>
			                </span>
			            </div>
			        </div> -->
			        <div class="form-label-group" align="center">
				    	<button class="btn btn-lg btn-primary btn-block btn-borrow" type="submit">Borrow Item</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extscript')
<script type="text/javascript">
	var base_price = $('#total-price').text();
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();
	    $('#total-price').text(base_price * $('#borrow-days').val());
	});
	
	function changePrice(){
		var price = base_price;
		price = price * $('#borrow-qty').val() * $('#borrow-days').val();
		$('#total-price').text(price);
	}

$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
@endsection