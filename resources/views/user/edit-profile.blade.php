@extends('layouts.nav')

@section('title', 'Edit Profile' )

@section('extcss')
	<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
	<link rel="stylesheet" type="text/css" href="/css/form.css">
@endsection

@section('content')
<div class="grid-container container">
	<div class="grid-item image-input">	
		<form method="POST" action="/edit-profile" enctype="multipart/form-data" class="form-signin">
			{{csrf_field()}}
		<div class="form-group upload-image">
	        <h4>Upload Profile Picture</h4>
	        <div class="input-group">
	            <span class="input-group-btn">
	                <span class="btn btn-default btn-file">
	                    Browse… <input type="file" id="Picture" name="picture">
	                </span>
	            </span>
	            <input type="text" class="form-control" readonly>
	        </div>
	        <br>
	        <img id='img-upload' src="/images/profiles/{{$user->picture}}" />
	    </div>
	</div>
	<div class="grid-item detail-input">	
	    	<div class="text-center mb-4">
		    	<img class="mb-4" id="imageBackground" src="" alt="" width="144px" height="144px">
		        <h1 class="h3 mb-3 font-weight-normal">Update Profile</h1>
		        <p>
		        	Update your profile with your recent info.
	        	</p>
	    	</div>

		    <div class="form-label-group">
					<input type="text" class="form-control" id="Name" name="name" placeholder="Full Name" value={{ $user->name }}>
					<label for="Name">Full Name</label>
		    </div>

		    <div class="form-label-group">
					<input type="text" class="form-control" id="Email" name="email" placeholder="Email Address" value={{ $user->email }}>
					<label for="Email">Email Address</label>
		    </div>

		    <div class="form-label-group">
				    <textarea class="form-control" rows="5" id="Address" name="address" placeholder="Address" data-toggle="tooltip" data-placement="right">{{ $user->address }}</textarea>
				    <label for="Address">Address</label>
		    </div>

		    <div class="form-label-group">
					<input type="number" class="form-control" id="Phone" name="phone" placeholder="Phone Number" data-toggle="tooltip" data-placement="right" value={{ $user->phone }}>
					<label for="Phone">Phone Number</label>
		    </div>

		    <div class="form-label-group">
					<input type="password" class="form-control" id="Password" name="password" placeholder="New Password" data-toggle="tooltip" data-placement="right" value="{{csrf_token()}}">
					<label for="Password">Password</label>
		    </div>

		    <div class="form-label-group">
		        @if(isset($errors))
		            @foreach($errors->all() as $error)
		                {{ $error }} <br>
		            @endforeach
		        @endif
		    </div>

		    <div class="form-label-group" align="center">
		    		<button class="btn btn-lg btn-primary btn-block btn-lend" type="submit">Lend Item</button>
		    </div>
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

		$("#Picture").change(function(){
		    readURL(this);
		}); 	
	});
</script>
@endsection