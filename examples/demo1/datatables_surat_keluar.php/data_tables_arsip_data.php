<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Lemari Arsip - SURAT MASUK</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<?php

	include '../bar/_sivbar.php';
	require '../../config/functions.php';


	// Query untuk memilih dan masuk ke field surat masuk
	$result = mysqli_query($conn, "SELECT * FROM data_sktm");
	$result1 = mysqli_query($conn, "SELECT * FROM data_skt");
	$result2 = mysqli_query($conn, "SELECT * FROM data_surat_kematian");
	$result3 = mysqli_query($conn, "SELECT * FROM data_skkb");




	?>
	<div class="main-panel">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Arsip Surat Keluar</h4>
					<ul class="breadcrumbs">
						<li class="nav-home">
							<a href="#">
								<i class="flaticon-home"></i>
							</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">Tables</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">Datatables</a>
						</li>
					</ul>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Lemari Surat Keluar</h4>
						</div>
						<div class="card-body">
							<ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">Surat Keterangan Tidak Mampu</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Surat Keterangan Tanah</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Surat Keterangan Kematian</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-contact2-tab-nobd" data-toggle="pill" href="#pills-contact2-nobd" role="tab" aria-controls="pills-contact2-nobd" aria-selected="false">Surat Keterangan Kelakuan Baik</a>
								</li>
							</ul>
							<div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
								<div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
									<div class="card-body">
										<div class="table-responsive">
											<table id="basic-datatables" class="display table table-striped table-hover">
												<thead>
													<tr>
														<th>Jenis Surat</th>
														<th>Tanggal Surat</th>
														<th>No. Surat</th>
														<th>Nama Pemohon</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php while ($row = mysqli_fetch_assoc($result)) : ?>
														<tr>
															<td>Surat Keterangan Tidak mampu</td>
															<td><?= date("d-m-Y", strtotime($row['tanggalsurat'])); ?></td>
															<td><?= $row['nomor_surat']; ?></td>
															<td><?= $row['nama_pemohon']; ?></td>
															<td>
																<div class="form-button-action">
																	<a href="../process_surat_keluar/sktm/delete.php?id=<?=$row["id_sktm"]; ?>">
																		<button type="button" class="btn btn-icon btn-round btn-danger">
																			<i class="fa fa-trash"></i>
																		</button>
																	</a>
																	&NonBreakingSpace;
																	&NonBreakingSpace;
																		<a href="../surat_asli/sktm.php?id=<?=$row["id_sktm"]; ?>" target="_blank">
																		<button type="button" class="btn btn-icon btn-round btn-warning">
																			<i class="fa fa-print"></i>
																		</button>
																		</a>
																</div>
															</td>
														<?php endwhile; ?>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
									<div class="card-body">
										<div class="table-responsive">
											<table id="basic-datatables1" class="display table table-striped table-hover">
												<thead>
													<tr>
														<th>Jenis Surat</th>
														<th>Tanggal Surat</th>
														<th>No. Surat</th>
														<th>Nama Pemohon</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php while ($row = mysqli_fetch_assoc($result1)) : ?>
														<tr>
															<td>Surat Keterangan Tanah</td>
															<td><?= date("d-m-Y", strtotime($row['tgl_surat'])); ?></td>
															<td><?= $row['nomor_surat']; ?></td>
															<td><?= $row['nama_pemohon']; ?></td>
															<td>
																<div class="form-button-action">
																	<a href="../process_surat_keluar/skt/delete.php?id=<?= $row["id_skt"]?>">
																	<button type="button" class="btn btn-icon btn-round btn-danger">
																		<i class="fa fa-trash"></i>
																	</button>
																	</a>
																	&NonBreakingSpace;
																	&NonBreakingSpace;
																	<a href="../surat_asli/Surat_Keterangan_Kelakuan_Baik_1.php?id=<?=$row["id_skkb"]; ?>" target="_blank">
																		<button type="button" class="btn btn-icon btn-round btn-warning">
																			<i class="fa fa-print"></i>
																		</button>
																		</a>
											
																	</button>
																</div>
															</td>
														<?php endwhile; ?>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
									<div class="card-body">
										<div class="table-responsive">
											<table id="basic-datatables2" class="display table table-striped table-hover">
												<thead>
													<tr>
														<th>Jenis Surat</th>
														<th>Tanggal Surat</th>
														<th>No. Surat</th>
														<th>Nama Pemohon</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php while ($row = mysqli_fetch_assoc($result2)) : ?>
														<tr>
															<td>Surat Keterangan Kematian</td>
															<td><?= date("d-m-Y", strtotime($row['tgl_surat'])); ?></td>
															<td><?= $row['nomor_surat']; ?></td>
															<td><?= $row['nama_jenazah']; ?></td>
															<td>
																<div class="form-button-action">
																	<a href="../process_surat_keluar/surat_kematian/delete.php?id=<?= $row["id"]; ?>">
																	<button type="button" class="btn btn-icon btn-round btn-danger">
																		<i class="fa fa-trash"></i>
																	</button>
																	</a>

																	&NonBreakingSpace;
																	&NonBreakingSpace;
																	<a href="../surat_asli/Surat_Kematian.php?id=<?= $row["id"]; ?>" target="_blank"">
																	<button type="button" class="btn btn-icon btn-round btn-warning">
																		<i class="fa fa-exclamation-circle"></i>
																	</button>
																	</a>
																
																</div>
															</td>
														<?php endwhile; ?>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-contact2-nobd" role="tabpanel" aria-labelledby="pills-contact2-tab-nobd">
									<div class="card-body">
										<div class="table-responsive">
											<table id="basic-datatables3" class="display table table-striped table-hover">
												<thead>
													<tr>
														<th>Jenis Surat</th>
														<th>Tanggal Surat</th>
														<th>No. Surat</th>
														<th>Nama Pemohon</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php while ($row = mysqli_fetch_assoc($result3)) : ?>
														<tr>
															<td>Surat Keterangan Kelakuan Baik</td>
															<td><?= date("d-m-Y", strtotime($row['tgl_surat'])); ?></td>
															<td><?= $row['nomor_surat']; ?></td>
															<td><?= $row['nama_pemohon']; ?></td>
															<td>
																<div class="form-button-action">
																	<a href="../process_surat_keluar/skkb/delete.php?id=<?= $row["id_skkb"]; ?>">
																	<button type="button" class="btn btn-icon btn-round btn-danger">
																		<i class="fa fa-trash"></i>
																	</button>
																	</a>

																	&NonBreakingSpace;
																	&NonBreakingSpace;
																	<a href="../surat_asli/Surat_Keterangan_Kelakuan_Baik_1.php?id=<?=$row["id_skkb"]; ?>" target="_blank">
																		<button type="button" class="btn btn-icon btn-round btn-warning">
																			<i class="fa fa-print"></i>
																		</button>
																		</a>
																	
																</div>
															</td>
														<?php endwhile; ?>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- End Custom template -->
				</div>
				<!--   Core JS Files   -->
				<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
				<script src="../../assets/js/core/popper.min.js"></script>
				<script src="../../assets/js/core/bootstrap.min.js"></script>
				<!-- jQuery UI -->
				<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
				<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

				<!-- jQuery Scrollbar -->
				<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
				<!-- Datatables -->
				<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
				<!-- Atlantis JS -->
				<script src="../../assets/js/atlantis.min.js"></script>
				<!-- Atlantis DEMO methods, don't include it in your project! -->
				<!-- <script src="../../assets/js/setting-demo2.js"></script> -->
				<script>
					$(document).ready(function() {
						$('#basic-datatables').DataTable({});
						$('#basic-datatables1').DataTable({});
						$('#basic-datatables2').DataTable({});
						$('#basic-datatables3').DataTable({});




						$('#multi-filter-select').DataTable({
							"pageLength": 5,
							initComplete: function() {
								this.api().columns().every(function() {
									var column = this;
									var select = $('<select class="form-control"><option value=""></option></select>')
										.appendTo($(column.footer()).empty())
										.on('change', function() {
											var val = $.fn.dataTable.util.escapeRegex(
												$(this).val()
											);

											column
												.search(val ? '^' + val + '$' : '', true, false)
												.draw();
										});

									column.data().unique().sort().each(function(d, j) {
										select.append('<option value="' + d + '">' + d + '</option>')
									});
								});
							}
						});


					});
				</script>
				</body>

</html>