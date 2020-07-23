@extends('layout.template0')

@section('page_title', "Poster - Kelurahan Gayungan Surabaya")
@section('child_title', "Poster")

@section('nav')
<li class="nav-item">
  <a class="nav-link" href="{{url('/')}}">Profil</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{url('/portal-data')}}">Portal Data</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="#">Poster</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{url('/blog')}}">Blog</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{url('/tentang')}}">Tentang</a>
</li>
@endsection

@section('content')
<style type="text/css">

  .col-sm-6 img {
    transition: transform .2s;
  }

  .col-sm-6 img:hover {
    transform: scale(1.15);
    cursor: pointer;
  }
</style>
<main role="main" class="container">

  <p class=" mt-3 text-muted">*Kilk poster untuk memperjelas.</p>

  <div class="mt-4 mt-md-0 text-center">

    <div class="row">
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="{{asset('/img/poster1.png')}}" class="w-100 border border-dark rounded" data-toggle="modal" data-target="#exampleModal1">
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="{{asset('/img/poster2.png')}}" class="w-100 border border-dark rounded" data-toggle="modal" data-target="#exampleModal2">
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="{{asset('/img/poster3.png')}}" class="w-100 border border-dark rounded" data-toggle="modal" data-target="#exampleModal3">
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="{{asset('/img/poster4.png')}}" class="w-100 border border-dark rounded" data-toggle="modal" data-target="#exampleModal4">
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="{{asset('/img/poster5.png')}}" class="w-100 border border-dark rounded" data-toggle="modal" data-target="#exampleModal5">
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="{{asset('/img/poster6.png')}}" class="w-100 border border-dark rounded" data-toggle="modal" data-target="#exampleModal6">
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="{{asset('/img/poster7.jpg')}}" class="w-100 border border-dark rounded" data-toggle="modal" data-target="#exampleModal7">
      </div>
      <div class="col-sm-6 col-lg-3 mb-4">
        <img src="{{asset('/img/poster8.jpg')}}" class="w-100 border border-dark rounded" data-toggle="modal" data-target="#exampleModal8">
      </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IBADAH DALAM NEW NORMAL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{asset('/img/poster1.png')}}" class="w-100 border rounded">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SEHAT DALAM NEW NORMAL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{asset('/img/poster2.png')}}" class="w-100 border rounded">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">PROTOKOL DALAM NEW NORMAL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{asset('/img/poster3.png')}}" class="w-100 border rounded">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">APA ITU NEW NORMAL?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{asset('/img/poster4.png')}}" class="w-100 border rounded">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">NONGKRONG ALA NEW NORMAL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{asset('/img/poster5.png')}}" class="w-100 border rounded">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">PROTOKOL DALAM BELAJAR</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{asset('/img/poster6.png')}}" class="w-100 border rounded">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">PENYEBARAN VIRUS CORONA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{asset('/img/poster7.jpg')}}" class="w-100 border rounded">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel8" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">6 LANGKAH MENCEGAH PENYEBARAN COVID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{asset('/img/poster8.jpg')}}" class="w-100 border rounded">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

  </div>

</main>
@endsection