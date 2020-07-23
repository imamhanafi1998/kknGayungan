@extends('layout.template0')

@section('page_title', "Blog - Kelurahan Gayungan Surabaya")
@section('child_title', "Blog")

@section('nav')
<li class="nav-item">
  <a class="nav-link" href="{{url('/')}}">Profil</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{url('/portal-data')}}">Portal Data</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ url('/poster') }}">Poster</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="#">Blog</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{url('/tentang')}}">Tentang</a>
</li>
@endsection

@section('nav-scroll')
<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex justify-content-center">
    <a class="p-2 text-muted" href="{{url('/blog/kategori/ekonomi')}}">Ekonomi</a>
    <a class="p-2 text-muted" href="{{url('/blog/kategori/kesehatan')}}">Kesehatan</a>
    <a class="p-2 text-muted" href="{{url('/blog/kategori/sosial')}}">Sosial</a>
  </nav>
</div>
@endsection

@section('content')
<div class="jumbotron p-4 p-md-5 text-dark rounded">
  <div class="row">
    <div class="col-12 col-lg-8 px-0">
      <h1 class="display-4 font-italic">Portal Data Persebaran COVID-19 Kelurahan Gayungan</h1>
      <div class="row">
        <div class="col-12">
          <p class="lead my-3">
            Salah satu kelurahan yang masyarakatnya pernah terpapar COVID-19 yaitu Kelurahan Gayungan, Kecamatan Gayungan, Kota Surabaya. Berikut merupakan beberapa data dari masyarakat terdampak COVID-19 di Kelurahan Gayungan.
          </p>
        </div>
      </div>
      <p class="lead mb-0"><a href="portal-data" class="text-dark font-weight-bold">Lanjutkan membaca...</a></p>
    </div>
    <div class="col-lg-4 media d-none d-lg-flex">
      <img src="{{ asset('/img/chart1.png') }}" width="70%" class="align-self-center mx-auto">
    </div>
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-lg-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">Ekonomi</strong>
        <h4 class="mb-0">
          Dampak COVID-19: Para Pedagang Mengalami Penurunan Pendapatan
        </h4>
        <div class="mb-1 text-muted">12 Juli 2020</div>
        <a href="{{ url('blog/dampak-covid-19-para-pedagang-mengalami-penurunan-pendapatan')}}" class="stretched-link">Lanjutkan membaca...</a>
      </div>
      <div class="col-auto d-none d-xl-block">
        <img src="{{ asset('/img/blog_pic1_sm.png') }}" width="200" height="250">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-lg-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">Sosial</strong>
        <h4 class="mb-0">
          Pandemi COVID-19 di mata anak-anak Gayungan
        </h4>
        <div class="mb-1 text-muted">12 Juli 2020</div>
        <a href="{{ url('blog/pandemi-covid-19-di-mata-anak-anak-gayungan') }}" class="stretched-link">Lanjutkan membaca...</a>
      </div>
      <div class="col-auto d-none d-xl-block">
        <img src="{{ asset('/img/blog_pic2_sm.png') }}" width="200" height="250">
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-lg-250 position-relative">
      <div class="col px-4 py-4 py-xl-5 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">Sosial</strong>
        <h4 class="mb-0">
          Kelurahan Gayungan Dalam Pencegahan dan Mengatasi Pandemi Virus COVID-19
        </h4>
        <div class="mb-1 text-muted">21 Juli 2020</div>
        <a href="{{ url('blog/kelurahan-gayungan-dalam-pencegahan-dan-mengatasi-pandemi-virus-covid-19') }}" class="stretched-link">Lanjutkan membaca...</a>
      </div>
      <div class="col-auto d-none d-xl-block">
        <img src="{{ asset('/img/blog_pic3_sm.jpg') }}" width="200" height="250">
      </div>
    </div>
  </div>
</div>
<div class="row">

  <!-- <aside class="col-md-4 blog-sidebar"> -->
  <aside class="col-12 blog-sidebar">
    <div class="row">
      <div class="col-12 col-md-8 col-xl-9">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="font-italic">Tentang</h4>
          <p class="mb-0">
            Artikel pada situs ini bersumber dari data hasil wawancara langsung dengan warga Kelurahan Gayungan, Kecamatan Gayungan, Kota Surabaya.
          </p>
        </div>
      </div>
      <div class="col-12 col-md-4 col-xl-3">
        <div class="p-4">
          <h4 class="font-italic">Tautan Eksternal</h4>
          <ol class="list-unstyled">
            <li><a target="_blank" href="https://github.com/imamhanafi1998/kknGayungan">GitHub</a></li>
            <li><a target="_blank" href="https://www.instagram.com/kkn19upnvjt/">Instagram</a></li>
          </ol>
        </div>
      </div>
    </div>

  </aside><!-- /.blog-sidebar -->

</div><!-- /.row -->
@endsection