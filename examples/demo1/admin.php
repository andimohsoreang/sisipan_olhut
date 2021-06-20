
<?php

session_start();

if(!isset($_SESSION['id'])){
	?>
	<script>
		alert('Login Terlebih Dahulu !');
		window.location.href= 'login/login.php';
	</script>
	<?php
}

include '../config/functions.php';

for ($bulan = 1; $bulan < 13; $bulan++) {
	$js_masuk = $conn->query("SELECT COUNT(id) AS jumlah FROM surat_masuk WHERE MONTH(tgl_surat)='$bulan'");
	$datachart = $js_masuk->fetch_array();
	$jumlah_surat_masuk[] = $datachart['jumlah'];
}

for ($bulan = 1; $bulan < 13; $bulan++) {
	$js_masuk = $conn->query("SELECT COUNT(id) AS jumlah FROM data_arsip WHERE MONTH(tgl_upload)='$bulan'");
	$datachart1 = $js_masuk->fetch_array();
	$jumlah_surat_masuk2[] = $datachart1['jumlah'];
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sisispan Admin - Oluhuta Utara</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../ ../assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="admin.php" class="logo">
					<img src="../../assets/img/sisipanlogo.png" width="40" alt="navbar brand" class="navbar-brand">
				</a>
				<span style="font-size :1.4rem; color: #fff; " class="ml-2" >S I S I P A N</span>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<!-- <div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div> -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="datatables_surat_keluar.php/data_tables_arsip_data.php">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Report Surat</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="arsip_data_file/form_arsipdata.php">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Simpan Data / Document </span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="pages/pilihansurat.php">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Buat Surat Keluar</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Admin</h4>
												<p class="text-muted">SISIPAN Oluhuta Utara</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										
										<a class="dropdown-item" href="login/logout.php" onclick="return confirm('Logout Kah?')">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Admin
									<span class="user-level">Sisipan Oluhuta Utara</span>
									<!-- <span class="caret"></span> -->
								</span>
							</a>
							<div class="clearfix"></div>

							<!-- <div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div> -->
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="admin.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<!-- <span class="caret"></span> -->
							</a>
							<!-- <div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="index.php">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
									<li>
										<a href="../demo2/admin.php">
											<span class="sub-item">Dashboard 2</span>
										</a>
									</li>
								</ul>
							</div> -->
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Surat Masuk</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="surat_masuk/form_input_surat_masuk.php">
											<span class="sub-item">Input Surat Masuk</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Surat Keluar</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="pages/pilihansurat.php">
											<span class="sub-item">Pilih Jenis Surat</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Arsip Data / File</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="arsip_data_file/form_arsipdata.php">
											<span class="sub-item">Simpan File</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-archive"></i>
								<p>Lemari Arsip</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="surat_masuk/datatables_surat_masuk.php">
											<span class="sub-item">Arsip Surat Masuk</span>
										</a>
										<a href="datatables_surat_keluar.php/data_tables_arsip_data.php">
											<span class="sub-item">Arsip Surat Keluar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fas fa-file-archive"></i>
								<p>Lemari Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="arsip_data_file/data_tables_arsip_data.php">
											<span class="sub-item">Arsip Data</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- <li class="mx-4 mt-2">
							<a href="http://themekita.com/atlantis-bootstrap-dashboard.html" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fa fa-heart"></i> </span>Buy Pro</a>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">SISIPAN DASHBOARD</h5>
							</div>
							<!-- <div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
							</div> -->
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="flaticon-users"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Jumlah Surat Masuk</p>
												<h4 class="card-title"><?php 
												
												$sql1 = $conn->query("SELECT * FROM surat_masuk");
												echo mysqli_num_rows($sql1);
	
												
												?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
												<i class="flaticon-interface-6"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Jumlah Surat Keluar</p>
													<h4 class="card-title">
												<?php

												$tb_skkb = $conn->query("SELECT * FROM data_skkb");
												$jum_skbb = mysqli_num_rows($tb_skkb);
												$tb_sktm = $conn->query("SELECT * FROM data_sktm");
												$jum_sktm = mysqli_num_rows($tb_sktm);
												$tb_skmm = $conn->query("SELECT * FROM data_surat_kematian");
												$jum_skmm = mysqli_num_rows($tb_sktm);
												echo $jum_skbb + $jum_sktm + $jum_skmm;
												?>


												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="flaticon-graph"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Jumlah Data / Document / File</p>
												<h4 class="card-title"><?php 
												
												$sql1 = $conn->query("SELECT * FROM data_arsip");
												echo mysqli_num_rows($sql1);
	
												
												?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Surat Masuk</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="barChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">File & Dokumen</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="barChart2"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Perbandingan Surat Keluar</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>


				<!-- Custom template | don't include it in your project! -->
				<div class="custom-template">
					<div class="title">Settings</div>
					<div class="custom-content">
						<div class="switcher">
							<div class="switch-block">
								<h4>Logo Header</h4>
								<div class="btnSwitch">
									<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
									<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
									<br />
									<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
									<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
								</div>
							</div>
							<div class="switch-block">
								<h4>Navbar Header</h4>
								<div class="btnSwitch">
									<button type="button" class="changeTopBarColor" data-color="dark"></button>
									<button type="button" class="changeTopBarColor" data-color="blue"></button>
									<button type="button" class="changeTopBarColor" data-color="purple"></button>
									<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
									<button type="button" class="changeTopBarColor" data-color="green"></button>
									<button type="button" class="changeTopBarColor" data-color="orange"></button>
									<button type="button" class="changeTopBarColor" data-color="red"></button>
									<button type="button" class="changeTopBarColor" data-color="white"></button>
									<br />
									<button type="button" class="changeTopBarColor" data-color="dark2"></button>
									<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
									<button type="button" class="changeTopBarColor" data-color="purple2"></button>
									<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
									<button type="button" class="changeTopBarColor" data-color="green2"></button>
									<button type="button" class="changeTopBarColor" data-color="orange2"></button>
									<button type="button" class="changeTopBarColor" data-color="red2"></button>
								</div>
							</div>
							<div class="switch-block">
								<h4>Sidebar</h4>
								<div class="btnSwitch">
									<button type="button" class="selected changeSideBarColor" data-color="white"></button>
									<button type="button" class="changeSideBarColor" data-color="dark"></button>
									<button type="button" class="changeSideBarColor" data-color="dark2"></button>
								</div>
							</div>
							<div class="switch-block">
								<h4>Background</h4>
								<div class="btnSwitch">
									<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
									<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
									<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
									<button type="button" class="changeBackgroundColor" data-color="dark"></button>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="custom-toggle">
						<i class="flaticon-settings"></i>
					</div> -->
				</div>
				<!-- End Custom template -->
			</div>
			<!--   Core JS Files   -->
			<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
			<script src="../assets/js/core/popper.min.js"></script>
			<script src="../assets/js/core/bootstrap.min.js"></script>

			<!-- jQuery UI -->
			<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
			<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

			<!-- jQuery Scrollbar -->
			<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


			<!-- Chart JS -->
			<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

			<!-- jQuery Sparkline -->
			<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

			<!-- Chart Circle -->
			<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

			<!-- Datatables -->
			<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

			<!-- Bootstrap Notify -->
			<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

			<!-- jQuery Vector Maps -->
			<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
			<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

			<!-- Sweet Alert -->
			<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

			<!-- Atlantis JS -->
			<script src="../assets/js/atlantis.min.js"></script>

			<!-- Atlantis DEMO methods, don't include it in your project! -->
			<!-- <script src="../assets/js/setting-demo.js"></script>
			<script src="../assets/js/demo.js"></script> -->


			<script>
				var barChart = document.getElementById('barChart').getContext('2d'),
				pieChart = document.getElementById('pieChart').getContext('2d');

				var myBarChart = new Chart(barChart, {
					type: 'bar',
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
						datasets: [{
							label: "Jumlah Surat Masuk",
							backgroundColor: 'rgb(255, 193, 7)',
							borderColor: 'rgb(23, 125, 255)',
							data: <?= json_encode($jumlah_surat_masuk); ?>,
						}],
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true,
									callback: function (value) { if (Number.isInteger(value)) { return value;} },
									stepSize: 1
								}
							}]
						},
					}
				});

				var barChart2 = document.getElementById('barChart2').getContext('2d')

				var myBarChart2 = new Chart(barChart2, {
					type: 'bar',
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
						datasets: [{
							label: "Sales",
							backgroundColor: 'rgb(121, 82, 179)',
							borderColor: 'rgb(23, 125, 255)',
							data: <?= json_encode($jumlah_surat_masuk2); ?>,
						}],
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true,
									callback: function (value) { if (Number.isInteger(value)) { return value;} },
									stepSize: 1
								}
							}]
						},
					}
				});

			var myPieChart = new Chart(pieChart, {
			type: 'pie',
			data: {
				datasets: [{
					data: 
					[
						<?php 
							
							$sktm = $conn->query("SELECT * FROM data_sktm");
							echo mysqli_num_rows($sktm);
							
							?>,
							<?php 
							
							$sktm = $conn->query("SELECT * FROM data_skkb");
							echo mysqli_num_rows($sktm);
							
							?>,
							<?php 
							
							$sktm = $conn->query("SELECT * FROM data_surat_kematian");
							echo mysqli_num_rows($sktm);
							
							?>

					],
					backgroundColor :["#1d7af3","#f3545d","#fdaf4b"],
					borderWidth: 0
				}],
				labels: ['SKTM', 'SKKB', 'SKM'] 
			},
			options : {
				responsive: true, 
				maintainAspectRatio: false,
				legend: {
					position : 'bottom',
					labels : {
						fontColor: 'rgb(154, 154, 154)',
						fontSize: 11,
						usePointStyle : true,
						padding: 20
					}
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				},
				tooltips: false,
				layout: {
					padding: {
						left: 20,
						right: 20,
						top: 20,
						bottom: 20
					}
				}
			}
		})

			</script>
</body>

</html>