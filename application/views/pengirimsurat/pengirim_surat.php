<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>SPSMK KEMENAG KOTA PALEMBANG</title>

    <!-- favicon img -->
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/logo.png'?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/nivo-lightbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/main.css">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/responsive.css">

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo" style="background-color: #FFFFFF; color: #929292;">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header" style="padding:10px 5px 15px;">
            <a href="#" class="navbar-brand" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation"><img class="img-fulid d-none d-sm-block" src="<?php echo base_url(); ?>assets/images/spsmk.png" alt="" height="40"><img class="img-fulid d-block d-sm-none" src="<?php echo base_url(); ?>assets/images/spsmk.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a style="color: #6e7875;" class="nav-link page-scroll" href="#cek">Cek Surat</a>
              </li>
              <li class="nav-item">
                <a style="color: #6e7875;" class="nav-link page-scroll" href="#contact">Kontak</a>
              </li>
              <li class="nav-item">
                <a style="color: #6e7875;" class="nav-link page-scroll" href="http://sumsel.kemenag.go.id/">Kanwil</a>
              </li>
              <li class="nav-item">
                <a style="color: #6e7875;" class="nav-link page-scroll" href="<?php echo base_url().'Administrator'?>">Login</a>
              </li>
              
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#cek">Cek Surat</a>
            </li>
            <li >
              <a class="page-scroll" href="#contact">Kontak</a>
            </li>
            <li>
              <a class="page-scroll" href="#contact">Kanwil</a>
            </li>
             <li>
              <a class="page-scroll" href="<?php echo base_url().'Administrator'?>">Login</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <br><br>
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">SPSMSK - Sistem Pengelolaan Surat Masuk Surat Keluar</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Kantor Kementerian Agama Kota Palembang. </p>
              <a href="#cek" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Cek Surat</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- cek Section Start -->
    <section id="cek" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Cek Surat</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Cek Status Surat Anda, Masukan Kode Pencarian Ke dalam Kolom Berikut.</p>

          <form action="<?php echo base_url().'pengirimsurat/cek'?>" method="post">
            <div class="input-group input-search">
                <input type="text" class="form-control" name="xkode" id="xkode" placeholder="Masukan Kode Pencarian..." style="border-color: #a3a7ad; color: #515459;" value="<?php echo $this->session->flashdata('kode');?>">
                <span class="input-group-btn">
                <button style="border-color: #a3a7ad; height: 50px;" class="btn btn-default" type="submit"><i class="fa fa-search" ></i></button>
                </span>
            </div>
          </form>
          <div><br><p style="text-align: center; color: #f74600;"><?php echo $this->session->flashdata('tdk_ketemu');?></p></div>

          <div>
              <div class="input-group input-search">
                  <label style="color: #515459; padding-top: 15px; text-align: left;" class="col-md-2">Nomor Surat</label>
                  <input type="text" readonly="true"class="form-control" name="xnomor_surat" id="xnomor_surat" style="border-color: #a3a7ad; color: #515459; width: 100%;" value="<?php echo $this->session->flashdata('nomor_surat');?>">
              </div>
          </div>
          <br>
          <div>
              <div class="input-group input-search">
                  <label style="color: #515459; padding-top: 15px; text-align: left;" class="col-md-2">Tanggal Surat</label>
                  <input type="text" readonly="true"class="form-control" name="xtanggal_surat" id="xtanggal_surat" style="border-color: #a3a7ad; color: #515459; width: 100%;" value="<?php echo $this->session->flashdata('tanggal_surat');?>">
              </div>
          </div>
          <br>
          <div>
              <div class="input-group input-search">
                  <label style="color: #515459; padding-top: 15px; text-align: left;" class="col-md-2">Asal / Tujuan Surat</label>
                  <input type="text" readonly="true"class="form-control" name="xasal_surat" id="xasal_surat" style="border-color: #a3a7ad; color: #515459; width: 100%;" value="<?php echo $this->session->flashdata('asal_surat');?>">
              </div>
          </div>
          <br>
          <div>
              <div class="input-group input-search">
                  <label style="color: #515459; padding-top: 15px; text-align: left;" class="col-md-2">Perihal</label>
                  <textarea readonly="true"class="form-control" name="xperihal" id="xperihal" style="border-color: #a3a7ad; color: #515459;  width: 100%;"><?php echo $this->session->flashdata('perihal');?></textarea>
              </div>
          </div>
          <br>
          <div>
              <div class="input-group input-search">
                  <label style="color: #515459; padding-top: 15px; text-align: left;" class="col-md-2">Tanggal Diterima</label>
                  <input type="text" readonly="true"class="form-control" name="xtanggal" id="xtanggal" style="border-color: #a3a7ad; color: #515459;  width: 100%;" value="<?php echo $this->session->flashdata('tanggal');?>">
              </div>
          </div>
          <br>
          <div>
              <div class="input-group input-search">
                  <label style="color: #515459; padding-top: 15px; text-align: left;" class="col-md-2">Status</label>
                  <input type="text" readonly="true"class="form-control" name="xstatus" id="xstatus" style="border-color: #a3a7ad; color: #515459;  width: 100%;" value="<?php echo $this->session->flashdata('status');?>">
              </div>
          </div>
          <br>
          <div>
              <div class="input-group input-search">
                  <label style="color: #515459; padding-top: 15px; text-align: left;" class="col-md-2">Catatan</label>
                  <input type="text" readonly="true"class="form-control" name="xcatatan" id="xcatatan" style="border-color: #a3a7ad; color: #515459;  width: 100%;" value="<?php echo $this->session->flashdata('catatan');?>">
              </div>
          </div>
          <br>
          <div>
              <div class="input-group input-search">
                  <label style="color: #515459; padding-top: 15px; text-align: left;" class="col-md-2">Download</label>
                  <a href="<?php 
                        $file_surat = $this->session->flashdata('file_surat');
                        if ($file_surat!='') {
							# code...
							    echo "suratmasuk/lakukan_download/$file_surat";

							}else{
							   echo "";
						    }
                       ?>" style="padding-top: 10px;">
						<?php
						$file_surat = $this->session->flashdata('file_surat');
							if ($file_surat!='') {
							# code...
							   echo "<i class='fa fa-download'></i> Unduh";
							}else{
							   echo "";
						    }
							?></a>
              </div>
          </div>

      </div>
    </section>
    <!-- cek Section End -->
    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Kontak Kami</h3>
                <div class="contact-address">
                  <p>Jl. Jenderal Ahmad Yani Kelurahan 14 Ulu, Kecamatan Seberang Ulu II, Kota Palembang, Sumatera Selatan 30264</p>
                  <p class="phone">Phone : <span>(0711) 511117, (0711) 5740631</span></p>
                  <p class="phone">Haji : <span>(0711) 512035</span></p>
                  <p class="email">E-mail : <span>kotapalembang@kemenag.go.id</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="https://www.facebook.com/Kemenagkota-Palembang-118038318865847/"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/KemenagKotaPlg"><i class="fa fa-twitter"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/kemenag_palembang/?hl=id"><i class="fa fa-instagram"></i></a></li>
                    <li class="youtube"><a href="https://www.youtube.com/channel/UCCa4d5t7AIZr12QDY9UkjDA"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
                  <div class="mapouter col-md-3 d-none d-sm-block"><div class="gmap_canvas"><iframe width="600" height="270" id="gmap_canvas" src="https://maps.google.com/maps?q=Kantor%20Kementerian%20Agama%20Kota%20Palembang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/beste-wordpress-themes/">pureblack.de</a></div><style>.mapouter{position:relative;text-align:right;height:270px;width:632px;}.gmap_canvas {overflow:hidden;background:none!important;height:270px;width:632px;}</style></div>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
              <li>
                <a href="#hero-area">Homepage</a>
              </li>
              <li>
                <a href="#cek">Cek Surat</a>
              </li>
              <li>
                <a href="#contact">kontak</a>
              </li>
              <li>
                <a href="http://sumsel.kemenag.go.id/">Kanwil</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>&copy; 2019 - Kementerian Agama Kota Palembang</p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.mixitup.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/nivo-lightbox.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/owl.carousel.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.stellar.min.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.nav.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/scrolling-nav.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.easing.min.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/smoothscroll.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.slicknav.js"></script>     
    <script src="<?php echo base_url(); ?>assets/javascripts/wow.js"></script>   
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.vide.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.counterup.min.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery.magnific-popup.min.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/waypoints.min.js"></script>    
    <script src="<?php echo base_url(); ?>assets/javascripts/form-validator.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascripts/contact-form-script.js"></script>   
    <script src="<?php echo base_url(); ?>assets/javascripts/main.js"></script>

  </body>
</html>