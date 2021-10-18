<?php
    $id_admin=$this->session->userdata('idadmin');
    $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE id='$id_admin'");
    $c=$q->row_array();
    
    $data=$this->db->get('surat_keluar');

    $month = date('m');
    $year  = date('Y');

    $temp  = date('Y-m');
    $temp1  = date('Y-01');
    $temp2  = date('Y-02');
    $temp3  = date('Y-03');
    $temp4  = date('Y-04');
    $temp5  = date('Y-05');
    $temp6  = date('Y-06');
    $temp7  = date('Y-07');
    $temp8  = date('Y-08');
    $temp9  = date('Y-09');
    $temp10  = date('Y-10');
    $temp11  = date('Y-11');
    $temp12  = date('Y-12');


 	$jumlahsurattahun = 0;
 	$jumlahsuratbulan = 0;

 	$jumlahsuratbulan1 = 0;
 	$jumlahsuratbulan2 = 0;
 	$jumlahsuratbulan3 = 0;
 	$jumlahsuratbulan4 = 0;
 	$jumlahsuratbulan5 = 0;
 	$jumlahsuratbulan6 = 0;
 	$jumlahsuratbulan7 = 0;
 	$jumlahsuratbulan8 = 0;
 	$jumlahsuratbulan9 = 0;
 	$jumlahsuratbulan10 = 0;
 	$jumlahsuratbulan11 = 0;
 	$jumlahsuratbulan12 = 0;

	foreach ($data->result_array() as $i) {
		$tanggal=$i['tanggal'];
		
		if(strpos($tanggal,$year) > -1){
			$jumlahsurattahun++;
		}

		if(strpos($tanggal,$temp) > -1){
			$jumlahsuratbulan++;
		}

		if(strpos($tanggal,$temp1) > -1){
			$jumlahsuratbulan1++;
		}
		if(strpos($tanggal,$temp2) > -1){
			$jumlahsuratbulan2++;
		}
		if(strpos($tanggal,$temp3) > -1){
			$jumlahsuratbulan3++;
		}
		if(strpos($tanggal,$temp4) > -1){
			$jumlahsuratbulan4++;
		}
		if(strpos($tanggal,$temp5) > -1){
			$jumlahsuratbulan5++;
		}
		if(strpos($tanggal,$temp6) > -1){
			$jumlahsuratbulan6++;
		}
		if(strpos($tanggal,$temp7) > -1){
			$jumlahsuratbulan7++;
		}
		if(strpos($tanggal,$temp8) > -1){
			$jumlahsuratbulan8++;
		}
		if(strpos($tanggal,$temp9) > -1){
			$jumlahsuratbulan9++;
		}
		if(strpos($tanggal,$temp10) > -1){
			$jumlahsuratbulan10++;
		}
		if(strpos($tanggal,$temp11) > -1){
			$jumlahsuratbulan11++;
		}
		if(strpos($tanggal,$temp12) > -1){
			$jumlahsuratbulan12++;
		}
	}

?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<!-- TITLE OF SITE -->
		<title>SPSMK KEMENAG KOTA PALEMBANG</title>

		<!-- favicon img -->
		<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/logo.png'?>">
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="<?php echo base_url().'tu'?>" class="logo">
						<img src="<?php echo base_url(); ?>assets/images/spsmk.png" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: user box -->
				<div class="header-right">

					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo base_url(); ?>assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="<?php echo base_url(); ?>assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info">
								<span class="name"><?php echo $c['nama'];?></span>
								<span class="role">Administrator TU</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo base_url().'administrator/logout'?>"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="<?php echo base_url().'tu'?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Beranda</span>
										</a>
									</li>
									</li>
									<li>
										<a href="<?php echo base_url().'tu/suratmasuk'?>">
											<i class="fa fa-pencil-square" aria-hidden="true"></i>
											<span>Surat Masuk</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-pencil-square" aria-hidden="true"></i>
											<span>Surat Keluar</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo base_url().'tu/suratkeluar'?>">
													Input Surat Keluar
												</a>
											</li>
											<li>
												<a href="<?php echo base_url().'tu/statussuratkeluar'?>">
													 Status Surat Keluar
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-file" aria-hidden="true"></i>
											<span>Arsip</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo base_url().'tu/arsipsuratmasuk'?>">
													 Surat Masuk
												</a>
											</li>
											<li>
												<a href="<?php echo base_url().'tu/arsipsuratkeluar'?>">
													 Surat Keluar
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Beranda</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?php echo base_url().'tu'?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Beranda</span></li>
							</ol>
					
							<div class="sidebar-right-toggle"></div>
						</div>
					</header>
					<!-- start: page -->
					<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<div class="chart-data-selector" id="salesSelectorWrapper">
												<div>
													<h2 style="text-align: center;">Grafik Jumlah Surat Keluar Tahun <span><?php echo $year;?></span></h2>
												</div>
												<br>
												<select onchange="ubahgrafik()" class="pull-right" style="width:110px; height: 10px;" id="select-surat">
													<option>Surat Keluar</option>
													<option>Surat Masuk</option>
												</select>
												<br><br>
												<div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
													<!-- Flot: Sales JSOFT Admin -->
													<div class="chart chart-sm" id="flot1"></div>
													<script>
														var jan = <?php echo $jumlahsuratbulan1 ?>;
														var feb = <?php echo $jumlahsuratbulan2 ?>;
														var mar = <?php echo $jumlahsuratbulan3 ?>;
														var apr = <?php echo $jumlahsuratbulan4 ?>;
														var mei = <?php echo $jumlahsuratbulan5 ?>;
														var jun = <?php echo $jumlahsuratbulan6 ?>;
														var jul = <?php echo $jumlahsuratbulan7 ?>;
														var aug = <?php echo $jumlahsuratbulan8 ?>;
														var sep = <?php echo $jumlahsuratbulan9 ?>;
														var okt = <?php echo $jumlahsuratbulan10 ?>;
														var nov = <?php echo $jumlahsuratbulan11 ?>;
														var des = <?php echo $jumlahsuratbulan12 ?>;

														var flot1Data = [{
														    data: [
														        ["Jan", jan],
														        ["Feb", feb],
														        ["Mar", mar],
														        ["Apr", apr],
														        ["May", mei],
														        ["Jun", jun],
														        ["Jul", jul],
														        ["Aug", aug],
														        ["Sep", sep],
														        ["Oct", okt],
														        ["Nov", nov],
														        ["Des", des]
														    ],
														    color: "#0088cc"
														}];

														// See: <?php echo base_url(); ?>assets/javascripts/dashboard/examples.dashboard.js for more settings.

													</script>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-file-text"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Jumlah Surat Keluar Bulan Ini</h4>
														<div class="info">
															<strong class="amount"><?php echo $jumlahsuratbulan;?></strong>
														</div>
													</div>
													<div class="summary-footer">
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-file-text"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Jumlah Surat Keluar Tahun Ini</h4>
														<div class="info">
															<strong class="amount"><?php echo $jumlahsurattahun;?></strong>
														</div>
													</div>
													<div class="summary-footer">
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/raphael/raphael.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/morris/morris.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/gauge/gauge.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>
		<script type="text/javascript">
			function ubahgrafik() {
				// body...
				var surat = document.getElementById("select-surat").value;
				if (surat == 'Surat Masuk') {
					window.location.replace("<?php echo base_url().'tu/beranda'?>");
				}else{
					window.location.replace("<?php echo base_url().'tu/beranda1'?>");
				}
				
			}
		</script>


		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>