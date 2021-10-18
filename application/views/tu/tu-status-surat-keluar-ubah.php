<?php
    $id_admin=$this->session->userdata('idadmin');
    $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE id='$id_admin'");
    $c=$q->row_array();
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
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

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
						<h2>Form Surat Keluar</h2>
					
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
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
										<h2 class="panel-title">Identitas Surat</h2>
									</header>
								<div class="panel-body">
													<?php foreach ($data->result_array() as $i) :
													   $kode=$i['kode'];
								                       $nomor_surat=$i['nomor_surat'];
								                       $tanggal_surat=$i['tanggal_surat'];
								                       $tujuan_surat=$i['tujuan_surat'];
								                       $perihal=$i['perihal'];
								                       $status=$i['status'];
								                       $seksi=$i['seksi'];
								                       $tanggal=$i['tanggal'];
								                       $petugas_seksi=$i['petugas_seksi'];
								                       $petugas_tu=$i['petugas_tu'];
								                       $catatan=$i['catatan'];
								                       $file_surat=$i['file_surat'];
								                    ?>
									<form class="form-horizontal form-bordered" id="submit">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nomor Surat</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="nosurat" readonly="readonly" value="<?php echo $i['nomor_surat'];?>" name="xnomor_surat">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Tanggal Surat</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="tanggal_surat" readonly="readonly" value="<?php echo $i['tanggal_surat'];?>" name="xtanggal_surat">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Tujuan Surat</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="asalsurat" readonly="readonly" value="<?php echo $i['tujuan_surat'];?>" name="xtujuan_surat">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Perihal</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="perihal" readonly="readonly" value="<?php echo $i['perihal'];?>" name="xperihal">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Tanggal Dikeluarkan</label>
												<div class="col-md-6">
													<input type="date" class="form-control" id="tgl-diterima" readonly="readonly" value="<?php echo $i['tanggal'];?>" name="xtanggal">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Status</label>
												<div class="col-md-6">
													<select class="form-control mb-md" value="<?php echo $i['status'];?>" name="xstatus">
															<option 
															<?php 
																if ($i['status'] == 'Belum Selesai') {
																		echo 'selected';
																	}else{
																		echo '';
																	}	
															?>>Belum Selesai</option>
															<option 
															<?php 
																if ($i['status'] == 'Dalam Proses') {
																		echo 'selected';
																	}else{
																		echo '';
																	}	
															?>>Dalam Proses</option>
															<option <?php 
																if ($i['status'] == 'Telah Selesai') {
																		echo 'selected';
																	}else{
																		echo '';
																	}	
															?>>Telah Selesai</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Seksi Pembuat Surat</label>
												<div class="col-md-6">
													<select class="form-control mb-md" name="xseksi">
															<option
																<?php
																	if($i['seksi']=='-'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>-</option>
															<option
																<?php
																	if($i['seksi']=='Kepala'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>Kepala</option>
															<option
																<?php
																	if($i['seksi']=='Kasubag TU'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>Kasubag TU</option>
															<option
																<?php
																	if($i['seksi']=='Bimas Islam'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>Bimas Islam</option>
															<option
																<?php
																	if($i['seksi']=='Po. Pontren'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>Po. Pontren</option>
															<option
																<?php
																	if($i['seksi']=='PAIS'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>PAIS</option>
															<option
																<?php
																	if($i['seksi']=='PENMAD'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>PENMAD</option>
															<option
																<?php
																	if($i['seksi']=='PTSP'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>PTSP</option>
															<option
																<?php
																	if($i['seksi']=='PPID'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>PPID</option>
															<option
																<?php
																	if($i['seksi']=='Syariah'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>Syariah</option>
															<option
																<?php
																	if($i['seksi']=='TU Umum'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>TU Umum</option>
															<option
																<?php
																	if($i['seksi']=='TU Keuangan'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>TU Keuangan</option>
															<option
																<?php
																	if($i['seksi']=='TU Kepegawaian'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>TU Kepegawaian</option>
															<option
																<?php
																	if($i['seksi']=='Protokol'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>Protokol</option>
															<option
																<?php
																	if($i['seksi']=='Pengawas'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>Pengawas</option>
															<option
																<?php
																	if($i['seksi']=='Penyuluh Agama'){
																		echo "selected";
																	}else{
																		echo "";
																	}
																?>
															>Penyuluh Agama</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nama Penanggung Jawab Surat</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="tgl-diterima" value="<?php echo $i['petugas_seksi'];?>" name="xpetugas_seksi">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nama Petugas TU</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="tgl-diterima" readonly="readonly" value="<?php echo $c['nama'];?>" name="xpetugas_tu">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Catatan</label>
												<div class="col-md-6">
													<textarea class="form-control" name="xcatatan"><?php echo $i['catatan'];?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Upload File Surat</label>
												<div class="col-md-6">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview">
																	<?php echo $i['file_surat'];?>
																</span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" name="file" />
															</span>
															<a href="<?php echo base_url().'suratkeluar/removefile/'.$kode?>" class="btn btn-default">Remove</a>
														</div>
													</div>
												</div>
											</div>
											<div style="float: right;">
												<button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary">Submit</button>
											</div>
									</form>
									<?php endforeach;?>
								</div>
							</section>
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
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.custom.js"></script>
		<script>
			$(document).ready(function(){

					$('#submit').submit(function(e){
					    e.preventDefault(); 
					         $.ajax({
					             url:'<?php echo base_url().'suratkeluar/edit_surat/'.$kode?>',
					             type:"post",
					             data:new FormData(this),
					             processData:false,
					             contentType:false,
					             cache:false,
					             async:false,
					             success: function(data){
					                  alert("Berhasil.");
					                  window.location.replace("<?php echo base_url().'tu/statussuratkeluar'?>");
					           }
					         });
					    });
					

				});
		</script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>

		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>