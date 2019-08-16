@extends('layout.master')
@section('content')

  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            <div class="pull-left">
              <a href="/"><img class="img-nav" src="img/ganesa.png" alt=""></a>
            </div>
            <a href="about"><h1>SMP Ganesha Satria</h1></a>
          </div>  
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="/">Beranda</a></li>
              <li role="presentation"><a href="profil">Profil</a></li>
              <li role="presentation"><a href="pendaftaran">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak" class="active">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="map">
    <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507245.4851964126!2d106.9421529312727!3d-6.66484101277488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb9494c9409d%3A0x492313c8f146cc56!2sSekolah+Menengah+Pertama+Ganesa+Satria!5e0!3m2!1sid!2sid!4v1565596102849!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  <section class="contact-page">
    <div class="container">
      <div class="text-center">
        <h2>ALAMAT</h2>
        <div class="text-left">          
          <p><img class="ic-contact" src="img/place.png" alt="">
            Jl Merseka Raya No.78 Abadi Jaya Sukma Jaya, Depok II Timur Jawa Barat
          </p>
          <p><img class="ic-contact" src="img/telephone.png" alt="">
            +38 000 129900
          </p>
          <p><img class="ic-contact" src="img/email.png" alt=""> 
            info@domain.net
          </p>
        </div>
      </div>
    </div>
  </section>

@endsection