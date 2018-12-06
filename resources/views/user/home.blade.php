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

			@foreach($posts as $post)
			@php
				$i = 1;
			@endphp
			<div id="product{{$i}}" class="product">
				<div class="product-title">
					{{$post->user->name}}
					<span class="post-time">{{$post->post_time}}</span>
				</div>
				<div class="product-img">
					<table>
						<tr>
							<td><img src="images/{{$post->link}}"></td>
						</tr>
					</table>
				</div>
				<div class="product-desc">
					<table>
						<tr>
							<td style="vertical-align: top;">Nama</td>
							<td style="vertical-align: top;">:</td>
							<td>{{$post->product_name}}</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">Stock</td>
							<td style="vertical-align: top;">:</td>
							<td>{{$post->product_stock}}</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">Deskripsi</td>
							<td style="vertical-align: top;">:</td>
							<td>{{$post->product_description}}</td>
						</tr>
					</table>
				</div>
			</div>
			@php
				$i++;
			@endphp
			@endforeach

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
					Richie Muliawan
					<span class="post-time">1w ago</span>
				</div>
				<div class="product-img">
					<img src="images/sony-alpha-a7s.png">
				</div>
				<div class="product-desc">
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>Sony Alpha A7S (Body Only)</td>
						</tr>
						<tr>
							<td>Stock</td>
							<td>:</td>
							<td>1</td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>:</td>
							<td>Durasi pinjam maksimal 3 hari. Kondisi 98% bagus</td>
						</tr>
					</table>
				</div>
			</div><div id="product1" class="product">
				<div class="product-title">
					Richie Muliawan
					<span class="post-time">5d ago</span>
				</div>
				<div class="product-img">
					<img src="images/razer-backpack.jpg">
				</div>
				<div class="product-desc">
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>Razer Rogue 15.6" Backpack</td>
						</tr>
						<tr>
							<td>Stock</td>
							<td>:</td>
							<td>2</td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>:</td>
							<td>Durasi pinjam maksimal 3 hari. Bisa untuk laptop 15.6". Tear and Water Resistant Kondisi 95% bagus</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="side-news">
			<div class="detail-news">
				<img src="images/backpack.png">
				<div class="overlay">
					<div class="news-desc">This is a backpack.</div>
				</div>
			</div>
			<div class="detail-news">
				<img src="images/camera.png">
				<div class="overlay">
					<div class="news-desc">This is a camera.</div>
				</div>
			</div>
			<div class="detail-news">
				<img src="images/ladder.png">
				<div class="overlay">
					<div class="news-desc">This is a ladder.</div>
				</div>
			</div>
			<div class="detail-news">
				<img src="images/ladder.png">
				<div class="overlay">
					<div class="news-desc">This is a ladder.</div>
				</div>
			</div>
		</div>
		{{-- <div class="side-chat">Chat</div> --}}
	</div>
@endsection

@section('extscript')
@endsection