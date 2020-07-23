@extends('layout.template1')

@section('page_title', "Blog - Dampak Covid-19: Para Pedagang Mengalami Penurunan Pendapatan")
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
<li class="nav-item">
  <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{url('/tentang')}}">Tentang</a>
</li>
@endsection

@section('kategori')
<a class="p-2 text-muted" href="{{url('/blog/kategori/ekonomi')}}">Ekonomi</a>
<a class="p-2 text-muted" href="{{url('/blog/kategori/kesehatan')}}">Kesehatan</a>
<a class="p-2 text-muted" href="{{url('/blog/kategori/sosial')}}">Sosial</a>
@endsection

@section('blog_post')
	@include('blog/blog1')
@endsection