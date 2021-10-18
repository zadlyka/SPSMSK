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
						<h2>Arsip Surat Keluar</h2>
					
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
						
										<h2 class="panel-title" style="margin-bottom: 20px;">Arsip Surat Keluar</h2>
										<div class="input-group input-search">
											<input type="text" class="form-control" name="keyword" id="keyword-search"placeholder="Masukan Nomor Surat Atau Kode Pencarian..." onkeyup="search()">
											<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</header>
								<div class="panel-body">
											<div class="form-group">
													<label class="col-md-1 control-label" for="inputDefault" style="padding-top: 7px;">Bulan</label>
													<div class="col-md-2">
														<select class="form-control mb-md" id="keyword-select-bulan">
																<option>All</option>
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>November</option>
																<option>Desember</option>
														</select>
													</div>
													<label class="col-md-1 control-label" for="inputDefault" style="padding-top: 7px;">Tahun</label>
													<div class="col-md-2">
														<select class="select form-control mb-md" id="keyword-select-tahun">
															<option value="All">All</option>
															<?php
														    foreach ($data->result_array() as $i) :
									                        $tahun=$i['tahun'];
									                    	?>
											                <option value="<?php echo $tahun;?>"><?php echo $tahun;?></option>
															<?php endforeach;?>
														</select>
													</div>
													<div class="col-md-1"><button class="btn btn-default" onclick="tampil()">Tampilkan</button></div>
													<div class="pull-right">
														<button class="btn btn-default" onclick="exportTableToExcel()">Download Table</button>
													</div>
											</div>

											<div class="table-responsive">
											<table class="table table-bordered mb-none" style="background-color: #ffffff;" id="surat_keluar">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Pencarian</th>
														<th>Nomor Surat</th>
														<th>Tanggal Surat</th>
														<th>Tujuan Surat</th>
														<th>Perihal</th>
														<th>Tanggal Dikeluarkan</th> 
														<th>Unduh</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													   $no = 0;
													   foreach ($data->result_array() as $i) :
													   $no++;
													   $kode=$i['kode'];
								                       $nomor_surat=$i['nomor_surat'];
								                       $tanggal_surat=$i['tanggal_surat'];
								                       $tujuan_surat=$i['tujuan_surat'];
								                       $perihal=$i['perihal'];
								                       $tanggal=$i['tanggal'];
								                       $file_surat=$i['file_surat'];
								                    ?>
													<tr>
														<td><?php echo $no;?></td>
														<td><?php echo $kode;?></td>
							                        	<td><?php echo $nomor_surat;?></td>
							                        	<td><?php echo $tanggal_surat;?></td>
							                        	<td><?php echo $tujuan_surat;?></td>
							                        	<td><?php echo $perihal;?></td>
							                        	<td><?php echo date('d/m/Y',strtotime($tanggal));?></td>
							                        	<td>
							                        		<a href="<?php echo base_url().'suratkeluar/lakukan_downloads/'.$i['file_surat']?>">
								                        		<?php
								                        			if ($i['file_surat']!='') {
								                        				# code...
								                        				echo "<i class='fa fa-download'></i> Unduh";
								                        			}else{
								                        				echo "";
								                        			}
								                        		  ?></a>
							                        		</td>
							                        	<td class="actions">
															<a href="<?php echo base_url().'tu/editarsipsk/'.$kode?>"><i class="fa fa-eye"></i>  Lihat</a>
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
		<script src="<?php echo base_url(); ?>assets/javascripts/table2excel.js"></script>
		<script>

			var seen = {};
			jQuery('.select').children().each(function() {
			    var txt = jQuery(this).attr('value');
			    if (seen[txt]) {
			        jQuery(this).remove();
			    } else {
			        seen[txt] = true;
			    }
			});

			function exportTableToExcel(){
				$('#surat_keluar tr').find('td:eq(7),th:eq(7)').remove();
				$('#surat_keluar tr').find('td:eq(8),th:eq(8)').remove();
				$("#surat_keluar").table2excel({
        		filename: 'Arsip Surat Keluar',
        		columns: [0,1,2,3,4,5,6]
				})
				window.location.reload(true);
			}
function search() {
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("keyword-search");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("surat_keluar");
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
			function tampil() {
				// body...
				var inputbulan,inputtahun, filterbulan,filtertahun,filter, table, tr, td, i, txtValue,tanggal;
				inputbulan = document.getElementById("keyword-select-bulan");
				filterbulan = inputbulan.value;
				inputtahun = document.getElementById("keyword-select-tahun");
			  	filtertahun = inputtahun.value;

			  	table = document.getElementById("surat_keluar");
				tr = table.getElementsByTagName("tr");

				  if (filterbulan=='Januari') {
				  	filterbulan = '01';
				  }else if (filterbulan=='Februari') {
				  	filterbulan = '02';
				  }else if (filterbulan=='Maret') {
				  	filterbulan = '03';
				  }else if (filterbulan=='April') {
				  	filterbulan = '04';
				  }else if (filterbulan=='Mei') {
				  	filterbulan = '05';
				  }else if (filterbulan=='Juni') {
				  	filterbulan = '06';
				  }else if (filterbulan=='Juli') {
				  	filterbulan = '07';
				  }else if (filterbulan=='Agustus') {
				  	filterbulan = '08';
				  }else if (filterbulan=='September') {
				  	filterbulan = '09';
				  }else if (filterbulan=='Oktober') {
				  	filterbulan = '10';
				  }else if (filterbulan=='November') {
				  	filterbulan = '11';
				  }else if (filterbulan=='Desember') {
				  	filterbulan = '12';
				  }

				  if (filterbulan == 'All' && filtertahun == 'All') {
				  	filter = 'All';
				  }else if (filterbulan == 'All' && filtertahun != 'All') {
				  	filter = '/' + filtertahun;
				  }else if (filterbulan != 'All' && filtertahun == 'All') {
				  	filter = '/' + filterbulan;
				  }else{
				  	filter = '/' + filterbulan + '/' + filtertahun;
				  }
				  
				  for (i = 0; i < tr.length; i++) {
				    td = tr[i].getElementsByTagName("td")[6];
				    if (td) {
				      txtValue = td.textContent || td.innerText;
				      if (txtValue.toUpperCase().indexOf(filter) > -1) {
				        tr[i].style.display = "";
				      }else if (filter == 'All') {
				  		tr[i].style.display = "";
				  	  }else {
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