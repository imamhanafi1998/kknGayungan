@extends('layout.template1')

@section('page_title', "Blog - Kategori Ekonomi")
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
<a class="p-2 text-dark" href="#">Ekonomi</a>
<a class="p-2 text-muted" href="{{url('/blog/kategori/kesehatan')}}">Kesehatan</a>
<a class="p-2 text-muted" href="{{url('/blog/kategori/sosial')}}">Sosial</a>
@endsection

@section('blog_post')
  <h3 class="pb-4 mb-4 font-italic border-bottom">
    Kategori : Ekonomi
  </h3>
  @include('blog/blog1')
@endsection