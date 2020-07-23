@extends('layout.template0')

@section('page_title', "Tentang - Kelurahan Gayungan Surabaya")
@section('child_title', "Tentang")

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
  <a class="nav-link" href="{{url('/blog')}}">Blog</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="#">Tentang</a>
</li>
@endsection

@section('content')
<main role="main" class="container">

  <div class="jumbotron mt-4 mt-md-5">
    <div class="col-sm-8 mx-auto">
      <h1>KKN Reguler COVID-19 UPN "VETERAN" Jawa Timur</h1>
      <hr>
      <p>
        KKN merupakan singkatan dari Kuliah Kerja Nyata, sebagai bentuk pengabdian kepada masyarakat yang dilakukan oleh mahasiswa UPN "VETERAN" Jawa Timur dimana anggotanya terdiri dari berbagai macam fakultas dan jurusan yang ditugaskan untuk mengabdi pada suatu desa atau daerah tertentu.
      </p>
      <p>
        Pada KKN kali ini, kelompok kami yaitu <b>Kelompok 19</b> akan melakukan KKN di RW 03, Kelurahan Gayungan, Kecamatan Gayungan, Kota Surabaya. KKN ini dilakukan mulai dari tanggal 1 Juli 2020 sampai dengan 23 Juli 2020. Kelompok ini memiliki 7 bidang, dimana setiap bidangnya memiliki prokernya sendiri-sendiri.
      </p>
      <hr>
      <p>
        <b>Bidang 5</b> merupakan salah satu bidang yang ada di <b>Kelompok 19</b>. Bidang ini bernama "Relawan COVID-19" yang beranggotakan 5 orang yaitu :
      </p>
      <p>
        Koordinator Bidang :
      </p>
      <ul>
        <li>
          Retno Wahyu Larasati (Ilmu Komunikasi)
        </li>
      </ul>
      <p>
        Anggota :
      </p>
      <ul>
        <li>
          Fiarry Isty Mawaty (Hubungan Internasional)
        </li>
        <li>
          Imam Hanafi (Sistem Informasi)
        </li>
        <li>
          Fachrurrozy Nurqoulby (Sistem Informasi)
        </li>
        <li>
          Anisah Fitri (Manajemen)
        </li>
      </ul>
      <p>
        <b>Bidang 5</b> sendiri memiliki proker sebagai berikut :
      </p>
      <ol>
        <li>Menjadi relawan COVID-19 sesuai dengan kebutuhan pihak setempat (RT/RW).</li>
        <li>Membuat <a href="{{url('/portal-data')}}">Portal Data</a> Masyarakat Terdampak COVID-19.</li>
        <li>Membuat <a href="{{url('/blog')}}">artikel</a> mengenai masyarakat terdampak COVID-19 yang datanya diperoleh melalui wawancara langsung dengan warga setempat.</li>
      </ol>
      <p>

      </p>
    </div>
  </div>

</main>
@endsection