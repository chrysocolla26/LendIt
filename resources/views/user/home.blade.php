@extends('layouts.master')

@section('title', 'HOME')

@section('extcss')
@endsection


@section('content')
	<div class="container">
		<div class="side-nav">
			<div class="left-username">
				<img src="images/backpack.png">
				Richie Muliawan
			</div>
			<div class="left-nav">
				<div class="link-menu">Home</div>
				<div class="link-menu">Message</div>
				<div class="link-menu">Marketplace</div>
			</div>
		</div>
		<div class="main-content">
			<div id="product1" class="product">
				<div class="product-title">
					Richie Muliawan
					<span class="post-time">2w ago</span>
				</div>
				<div class="product-img">
					<table>
						<tr>
							<td><img src="images/nintendo-switch.jpg"></td>
						</tr>
					</table>
					
				</div>
				<div class="product-desc">
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>Nintendo Switch (Black)</td>
						</tr>
						<tr>
							<td>Stock</td>
							<td>:</td>
							<td>1</td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>:</td>
							<td>Durasi pinjam minimal 1 minggu. Kondisi 98% bagus</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="product2" class="product">
				<div class="product-title">
					Camera
				</div>
				<div class="product-img">
					<img src="images/camera.png">
				</div>
				<div class="product-desc">
					Field 1 : <br>
					Field 1 : <br>
					Field 1 : <br>
					Field 1 : <br>
					Field 1 : <br>
					Field 1 : <br>
				</div>
			</div><div id="product1" class="product">
				<div class="product-title">
					Backpack
				</div>
				<div class="product-img">
					<img src="images/backpack.png">
				</div>
				<div class="product-desc">
					Field 1 : <br>
					Field 1 : <br>
					Field 1 : <br>
					Field 1 : <br>
					Field 1 : <br>
					Field 1 : <br>
				</div>
			</div>
		</div>
		<div class="side-news">News</div>
		<div class="side-chat">Chat</div>
	</div>
@endsection

@section('extscript')
@endsection