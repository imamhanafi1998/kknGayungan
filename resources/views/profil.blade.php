@extends('layout.template0')

@section('page_title', "Profil - RW 03 Kelurahan Gayungan")
@section('child_title', "Profil")

@section('nav')
<li class="nav-item active">
	<a class="nav-link" href="#">Profil</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{url('/portal-data')}}">Portal Data</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ url('/poster') }}">Poster</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ url('/blog') }}">Blog</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{url('/tentang')}}">Tentang</a>
</li>
@endsection

@section('content')
<main role="main" class="container">

	<div id="myCarousel" class="carousel slide mt-4 mt-md-5 border" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{asset('/img/carousel6.jpg')}}" class="d-block w-100">
				<div class="container">
					<div class="carousel-caption d-none d-md-block">
						<p class="mark text-dark" style="font-size: 1.4rem;">Kondisi di Jl. Jemur Gayungan II yang terlihat sepi.</p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('/img/carousel1.jpg')}}" class="d-block w-100">
				<div class="container">
					<div class="carousel-caption d-none d-md-block">
						<p class="mark text-dark" style="font-size: 1.4rem;">Penyemprotan disinfektan di Jl. Jemur Gayungan I oleh mahasiswa UPN.</p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('/img/carousel3.jpg')}}" class="d-block w-100">
				<div class="container">
					<div class="carousel-caption d-none d-md-block">
						<p class="mark text-dark" style="font-size: 1.4rem;">Semprotan disinfektan yang dipasang di masjid Al-Hidayah Jl. Jemur Gayungan I.</p>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<hr class="featurette-divider">

	<div class="row featurette">
		<div class="col-md-7 align-self-center">
			<h2 class="featurette-heading">RW 03, Kelurahan Gayungan, Kecamatan Gayungan, Kota Surabaya.</h2>
			<p class="lead">Berada di daerah Surabaya Selatan. Terletak tepat disebelah barat dari Taman Pelangi Kota Surabaya.</p>
		</div>
		<div class="col-md-5">
			<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=112.7251446247101%2C-7.330182778399599%2C112.73336291313171%2C-7.32429818179599&amp;layer=mapnik&amp;marker=-7.327243858079129%2C112.72925559999999" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=-7.32724&amp;mlon=112.72926#map=17/-7.32724/112.72925">View Larger Map</a></small>
		</div>
	</div>

	<hr class="featurette-divider">

	<div class="row featurette">
		<div class="col-md-7 order-md-2 align-self-center">
			<h2 class="featurette-heading">
				Tempat KKN Reguler COVID-19 Kelompok 19.
			</h2>
			<p class="lead">
				Di RW 03 inilah tempat kami (Kelompok 19) melakukan KKN. Foto berikut sedang menunjukkan sharing-sharing antar kedua belah pihak yang terjadi di balai RW 03.
			</p>
		</div>
		<div class="col-md-5 order-md-1">
			<img src="{{asset('/img/home2.jpg')}}" class="d-block w-100 border rounded">
		</div>
	</div>

	<hr class="featurette-divider">

</main>
@endsection