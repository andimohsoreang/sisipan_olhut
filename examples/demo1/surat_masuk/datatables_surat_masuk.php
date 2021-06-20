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
    $result = mysqli_query($conn, "SELECT * FROM surat_masuk");

    

    ?>
			<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Arsip Surat Masuk</h4>
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
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Lemari Surat Masuk</h4>
                                    </div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Tanggal Surat</th>
													<th>No. Surat </th>
													<th>Pengirim</th>
													<th>Perihal</th>
													<th>File</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
                                                <?php while ( $row = mysqli_fetch_assoc($result) )  :?>
												<?php

												$namafile = $row['file'];
												$extensifoto = explode('.', $namafile);
												$extensifoto = strtolower(end($extensifoto));
												// echo ($extensifoto);

												if($extensifoto=="jpg"||$extensifoto=="jpeg"||$extensifoto=="png"){
													$get_file = '<a href="../../config/public/surat_masuk/'.$row["file"].'" download>'.$row["file"] .'</a>';
												}else{
													$get_file = '<a href="../../config/public/surat_masuk/'.$row["file"].'" target="_blank">'.$row["file"] .'</a>';

												}
										
												
												?>
												<tr>
													<td><?php echo $row["tgl_surat"];?></td>
													<td><?php echo $row["nomor"];?></td>
													<td><?php echo $row["pengirim"];?></td>
													<td><?php echo $row["perihal"];?></td>
													<td><?= $get_file ?></td>
													<td><div class="form-button-action">
                                                            <a href="hapus_data_surat_masuk.php?id=<?=$row["id"]; ?>">
                                                            <button type="button" class="btn btn-icon btn-round btn-danger">
											                    <i class="fa fa-trash"></i>
										                    </button>
                                                            </a> 
															&NonBreakingSpace;
                                                            &NonBreakingSpace;
															<a href="update_form_sm.php?id=<?=$row["id"]?>">
															<button type="button" class="btn btn-icon btn-round btn-warning">
											                    <i class="fa fa-exclamation-circle"></i>
										                    </button>
															</a>

														</div></td>
												</tr>
                                                <?php endwhile; ?>
											</tbody>
										</table>
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
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

		
		});
	</script>
</body>
</html>