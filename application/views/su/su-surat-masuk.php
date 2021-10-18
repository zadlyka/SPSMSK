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
					<a href="<?php echo base_url().'su'?>" class="logo">
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
								<span class="role">Administrator Utama</span>
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
										<a href="<?php echo base_url().'su'?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Beranda</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Pengguna</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo base_url().'su/tambahpengguna'?>">
													 Tambah Pengguna
												</a>
											</li>
											<li>
												<a href="<?php echo base_url().'su/daftarpengguna'?>">
													 Daftar Pengguna
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-check-circle" aria-hidden="true"></i>
											<span>Cek Status Surat</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo base_url().'su/suratmasuk'?>">
													 Surat Masuk
												</a>
											</li>
											<li>
												<a href="<?php echo base_url().'su/statussuratkeluar'?>">
													 Surat Keluar
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
												<a href="<?php echo base_url().'su/arsipsuratmasuk'?>">
													 Surat Masuk
												</a>
											</li>
											<li>
												<a href="<?php echo base_url().'su/arsipsuratkeluar'?>">
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
						<h2>Status Surat Masuk</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?php echo base_url().'su'?>">
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
						
										<h2 class="panel-title" style="margin-bottom: 20px;">Surat Masuk</h2>
										<div class="input-group input-search">
											<input type="text" class="form-control" name="keyword" id="keyword-search" placeholder="Masukan Nomor Surat Atau Kode Pencarian..." onkeyup="search()">
											<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</header>
								<div class="panel-body">
										<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault" style="padding-top: 7px; padding-left: 0px;">Status</label>
												<div>
													<select class="form-control mb-md" id="keyword-select" onchange="select()">
														<option>All</option>
														<option>Belum Selesai</option>
														<option>Dalam Proses</option>
														<option>Telah Selesai</option>
													</select>
												</div>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered mb-none" id="surat_masuk" style="background-color: #ffffff;">
												<thead>
													<tr>
														<th></th>
														<th>Kode Pencarian</th>
														<th>Nomor Surat</th>
														<th>Tanggal Surat</th>
														<th>Asal Surat</th>
														<th>Perihal</th>
														<th>Status</th>
														<th>Diteruskan Ke</th>
														<th>Tanggal Diterima</th>
														<th>Waktu Diterima</th>
														<th>Nama Penerima</th>
														<th>Nama Petugas PTSP</th>
														<th>Nama Petugas TU</th>
														<th>Catatan</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($data->result_array() as $i) :
													   $kode=$i['kode'];
								                       $nomor_surat=$i['nomor_surat'];
								                       $tanggal_surat=$i['tanggal_surat'];
								                       $asal_surat=$i['asal_surat'];
								                       $perihal=$i['perihal'];
								                       $status=$i['status'];
								                       $diteruskan=$i['diteruskan'];
								                       $tanggal=$i['tanggal'];
								                       $waktu=$i['waktu'];
								                       $penerima=$i['penerima'];
								                       $petugas_ptsp=$i['petugas_ptsp'];
								                       $petugas_tu=$i['petugas_tu'];
								                       $catatan=$i['catatan'];
								                       $file_surat=$i['file_surat'];
								                    ?>
													<tr>
														<td style="color: 
														<?php if($status=='Telah Selesai'){
															echo "#00ba63";
														}else{
															echo "#ff3d3d";
														}?>;"><i class="fa fa-check-circle"></i></td>
														<td><?php echo $kode;?></td>
							                        	<td><?php echo $nomor_surat;?></td>
							                        	<td><?php echo $tanggal_surat;?></td>
							                        	<td><?php echo $asal_surat;?></td>
							                        	<td><?php echo $perihal;?></td>
							                        	<td><?php echo $status;?></td>
							                        	<td><?php echo $diteruskan;?></td>
							                        	<td><?php echo date('d/m/Y',strtotime($tanggal));?></td>
							                        	<td><?php echo $waktu;?></td>
							                        	<td><?php echo $penerima;?></td>
							                        	<td><?php echo $petugas_ptsp;?></td>
							                        	<td><?php echo $petugas_tu;?></td>
							                        	<td><?php echo $catatan;?></td>
							                        	<td class="actions">
															<a href="<?php echo base_url().'su/suratmasukubah/'.$kode?>"><i class="fa fa-pencil"></i></a>
															<a href="<?php echo base_url().'suratmasuk/hapus_surats/'.$kode?>" class="delete-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
												<?php endforeach;?>
												</tbody>
											</table>
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
		<script>
function search() {
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("keyword-search");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("surat_masuk");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
		    td = tr[i].getElementsByTagName("td")[1];
		    te = tr[i].getElementsByTagName("td")[2];
		    if (td) {
		      txtValue = td.textContent || td.innerText;
		      txtValue1 = te.textContent || te.innerText;
		      if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue1.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		      } else {
		        tr[i].style.display = "none";
		      }
		    }       
		  }
		}

		function select() {
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("keyword-select");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("surat_masuk");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
		    td = tr[i].getElementsByTagName("td")[6];
		    if (td) {
		      txtValue = td.textContent || td.innerText;
		      if (txtValue.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		      }
		      else if (filter == 'ALL') {
		  		tr[i].style.display = "";
		  	  }
		       else {
		        tr[i].style.display = "none";
		      }
		    }       
		  }
		}
		</script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>