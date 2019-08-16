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
              <li role="presentation"><a href="/" class="active">Beranda</a></li>
              <li role="presentation"><a href="profil">Profil</a></li>
              <li role="presentation"><a href="pendaftaran">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="slider">
    <div id="beranda-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active img-slide">
            <img src="img/piala.jpg" class="img-responsive" alt="">
          </div>
          <div class="item  img-slide">
            <img src="img/slide.jpg" class="img-responsive" alt="">
          </div>
          <div class="item  img-slide">
            <img src="img/slide.jpg" class="img-responsive" alt="">
          </div>
        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
    </div>
  </div>

  <div class="pres-sk">
    <div class="container">
      <div class="text-center">
        <h2>PRESTASI SEKOLAH </h2>
        <div class="row clearfix">
          <div class="col-md-4 col-sm-6">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="#"><img class="media-object img-pres-sk pull" src="img/pres.jpg" alt=""></a>        
              <div class=" ">
                <h4>Juara 1 Kebersihan Lingkungan Tingkat Jawa Barat</h4> 
                <h5>Selasa, 17 Agustus 2019</h5>        
                <ul class="tag clearfix">
                  <li class="btn pull-right "><a href="kebersihan">Selengkapnya</a></li>
                </ul>
              </div>        
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="#"><img class="media-object img-pres-sk pull" src="img/pres.jpg" alt=""></a>        
              <div class=" ">
                <h4>Juara 1 Kebersihan Lingkungan Tingkat Jawa Barat</h4> 
                <h5>Selasa, 17 Agustus 2019</h5>        
                <ul class="tag clearfix">
                  <li class="btn pull-right "><a href="120819">Selengkapnya</a></li>
                </ul>
              </div>        
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="#"><img class="media-object img-pres-sk pull" src="img/pres.jpg" alt=""></a>        
              <div class=" ">
                <h4>Juara 1 Kebersihan Lingkungan Tingkat Jawa Barat</h4> 
                <h5>Selasa, 17 Agustus 2019</h5>        
                <ul class="tag clearfix">
                  <li class="btn pull-right "><a href="120819">Selengkapnya</a></li>
                </ul>
              </div>        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="text-center">
        <h2>PRESTASI SISWA</h2>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i><img class="media-object img-pres-sw pull" src="img/pres.jpg" alt=""></i>
          <h3>Juara 1 Turnamen Mobile Legend</h3>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i><img class="media-object img-pres-sw pull" src="img/pres.jpg" alt=""></i>
          <h3>Juara 1 Turnamen Mobile Legend</h3>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i><img class="media-object img-pres-sw pull" src="img/pres.jpg" alt=""></i>
          <h3>Juara 1 Turnamen Mobile Legend</h3>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i><img class="media-object img-pres-sw pull" src="img/pres.jpg" alt=""></i>
          <h3>Juara 1 Turnamen Mobile Legend</h3>
        </div> 
      </div>
    </div>
  </div>
  
  <div class="gallery">
    <div class="text-center">
      <h2>EKSTARKULIKULER</h2>
    </div>
    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/8.jpg" alt="" class="img-responsive" />
            <h4>Futsal</h4>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/8.jpg" alt="" class="img-responsive" />
            <h4>Bola Volly</h4>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/8.jpg" alt="" class="img-responsive" />
            <h4>Pramuka</h4>
        </figure>
      </div>
    </div>
    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/8.jpg" alt="" class="img-responsive" />
            <h4>Paskibra</h4>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/8.jpg" alt="" class="img-responsive" />
            <h4>Pecinta Alam</h4>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/8.jpg" alt="" class="img-responsive" />
            <h4>Basketball</h4>
        </figure>
      </div>
    </div>
  </div>
</div>

@endsection