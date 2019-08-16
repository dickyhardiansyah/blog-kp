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
            <a href="/">
              <h1>SMP Ganesa Satria</h1>
            </a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="/">Beranda</a></li>
              <li role="presentation"><a href="profil" class="active">Profil</a></li>
              <li role="presentation"><a href="pendaftaran">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!--/.SEJARAH -->
  <div class="sejarah">
    <div class="container">
      <div class="text-center wow fadeInDown">
        <h2>SEJARAH </h2>
        <div class="col-md-10 col-md-offset-1">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores
            nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.</p>
        </div>
      </div>
    </div>
  </div>

  <section class="action">
    <div class="container">
      <div class="left-text hidden-xs">
        <h4>VISI</h4>
        <p><em>Berilmu, Bermutu dan Berahlak Mulia</em></p>
        <br>
        <h4>MISI</h4>
        <p><em>Meningkatkan ilmu pengetahuan dan bertakwa kepada Tuhan Yang Maha Esa</em></p>
        <p><em>Meningkatkan Disiplin</em></p>
        <p><em>Meningkatkan minat baca</em></p>
        <p><em>Meningkatkan kemampuan minimal untuk melanjutkan pendidikan yang lebih tinggi</em></p>
        <p><em>Memberikan kemampuan dan keterampilan sebagai bekal hidup di masyarakat</em></p>
      </div>
      <div class="right-image hidden-xs"></div>
    </div>
  </section> 

  <section id="fasilitas">
    <div class="container fasilitas ">
      <div class="text-center wow fadeInDown">
        <h2>FASILITAS</h2>
        <p>Fasilitas yang mendukung akan sangat membantu kualitas pendidikan. SMP Ganesa Satria terus berupaya melengkapi Fasilitas pendidikan sesuai dengan kebutuhan</p>
        <div class="skill-wrap clearfix">
          <div class="row">
            <div class="col-sm-3">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="joomla-skill">
                  <p>Lapangan Olahraga</p>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="html-skill">
                  <p>Musholla</p>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="css-skill">
                  <p>LAB IPA</p>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <div class="wp-skill">
                  <p>LAB Komputer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <div class="struktur">
        <div class="text-center wow fadeInDown">
          <h2>CALENDER ACADEMIC</h2>
          <p>SMP GANESA SATRIA DEPOK TAHUN PELAJARAN 2019/2020</p>
        </div>
        <div>
          <embed src="pdf/calender.pdf" type="application/pdf" width="100%" height="700px" />
        </div>
      </div>

      <!--/.STRUKTUR ORGANISASI -->
      <hr>
      <div class="struktur">
        <div class="text-center wow fadeInDown">
          <h2>STRUKTUR ORGANISASI</h2>
          <p>SMP GANESA SATRIA DEPOK TAHUN PELAJARAN 2019/2020</p>
        </div>
        <div class="calender">
          <div class="text-center wow fadeInDown">
            <img src="img/struktur.jpg">
          </div>
        </div>
      </div>
      <br>
    </div>
  </section>

@endsection