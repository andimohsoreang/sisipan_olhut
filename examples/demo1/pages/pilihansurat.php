<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<?php

        include '../bar/_sivbar.php';
        include '../../config/functions.php';
        
        
        ?>

        
        <link rel="stylesheet" href="pilihansurat.css">


        <div class="light">
	<main class="container py-5 mr-5">
		<div class="h1 text-center text-dark" id="pageHeaderTitle">Pilih Jenis Surat </div>

		
              <?php 
                $result = mysqli_query($conn, "SELECT * FROM jenis_surat_keluar WHERE id = '1' ");
                while ($data = mysqli_fetch_assoc($result)){
                    var_dump($data);
                
                    echo "
                    <article class='postcard light blue'>
                    <a class='postcard__img_link' href='#'>
                        <img class='postcard__img' src='https://picsum.photos/1000/1000' alt='Image Title' />
                    </a>
                    <div class='postcard__text t-dark'>
                        <h1 class='postcard__title blue'><a href='../jenis_surat_keluar/form_sktm.php?form=".$data['id']."'>". $data['jenis_surat'] ."</a></h1>
                        <div class='postcard__subtitle small'>
                        <time datetime='2020-05-25 12:00:00'>
                            <i class='fas fa-bookmark mr-2'></i>PILIH SURAT
                        </time>
                    </div>
                    <div class='postcard__bar'></div>
                    <div class='postcard__preview-txt'>SKTM merupakan jenis surat yang digunakan untuk keperluan keringanan biaya obat, pengajuan beasiswa, permohonan bantuan, dan lain sebagainya.</div>
                    
                    <a href='../jenis_surat_keluar/form_sktm.php?form=".$data['id']."'> <button class='btn btn-primary'>
											<span class='btn-label'>
												<i class='fa fa-plus'></i>
											</span>
											Buat Surat
										</button>
                                        </a>
                </div>
            </article>
            
                        ";    
                }
                 
              ?>
				
        <?php
        $result = mysqli_query($conn, "SELECT * FROM jenis_surat_keluar WHERE id = '8' ");
        while ($data = mysqli_fetch_assoc($result)){

            echo "
            
            <article class='postcard light red'>
                <a class='postcard__img_link' href='#'>
                    <img class='postcard__img' src='https://picsum.photos/501/500' alt='Image Title' />	
                </a>
                <div class='postcard__text t-dark'>
                    <h1 class='postcard__title red'><a href='#'>". $data['jenis_surat'] ."</a></h1>
                    <div class='postcard__subtitle small'>
                        <time datetime='2020-05-25 12:00:00'>
                            <i class='fas fa-calendar-alt mr-2'></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class='postcard__bar'></div>
                    <div class='postcard__preview-txt'>Surat Kepemilikan Tanah (SKT) sebetulnya menegaskan riwayat tanah. Surat keterangan riwayat tanah tersebut merupakan salah satu alat bukti tertulis untuk menunjukkan kepemilikan tanah guna kepentingan proses pendaftaran tanah.</div>
                    <a href='../jenis_surat_keluar/form_skt.php?form=".$data['id']."'> <button class='btn btn-danger'>
											<span class='btn-label'>
												<i class='fa fa-plus'></i>
											</span>
											Buat Surat
										</button>
                                        </a>
                </div>
            </article>
            
            ";

                
        }
            
?>

		
<?php
        $result = mysqli_query($conn, "SELECT * FROM jenis_surat_keluar WHERE id = '9' ");
        while ($data = mysqli_fetch_assoc($result)){

            echo "
            
            <article class='postcard light yellow'>
			<a class='postcard__img_link' href='#'>
				<img class='postcard__img' src='https://picsum.photos/501/501' alt='Image Title' />
			</a>
			<div class='postcard__text t-dark'>
				<h1 class='postcard__title yellow'><a href='#'>". $data['jenis_surat'] ."</a></h1>
				<div class='postcard__subtitle small'>
					<time datetime='2020-05-25 12:00:00'>
						<i class='fas fa-calendar-alt mr-2'></i>Mon, May 25th 2020
					</time>
				</div>
				<div class='postcard__bar'></div>
				<div class='postcard__preview-txt'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<a href='../jenis_surat_keluar/form_surat_kematian.php?form=".$data['id']."'> <button class='btn btn-warning'>
											<span class='btn-label'>
												<i class='fa fa-plus'></i>
											</span>
											Buat Surat
										</button>
                                        </a>
			</div>
		</article>
            
            ";
				
                
        }
            
?>


<?php 
                $result = mysqli_query($conn, "SELECT * FROM jenis_surat_keluar WHERE id = '10' ");
                while ($data = mysqli_fetch_assoc($result)){
                    var_dump($data);
                
                    echo "
                    <article class='postcard light blue'>
                    <a class='postcard__img_link' href='#'>
                        <img class='postcard__img' src='https://picsum.photos/1000/1000' alt='Image Title' />
                    </a>
                    <div class='postcard__text t-dark'>
                        <h1 class='postcard__title blue'><a href='../jenis_surat_keluar/form_sktm.php?form=".$data['id']."'>". $data['jenis_surat'] ."</a></h1>
                        <div class='postcard__subtitle small'>
                        <time datetime='2020-05-25 12:00:00'>
                            <i class='fas fa-bookmark mr-2'></i>PILIH SURAT
                        </time>
                    </div>
                    <div class='postcard__bar'></div>
                    <div class='postcard__preview-txt'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                    
                    <a href='../jenis_surat_keluar/form_skkb.php?form=".$data['id']."'> <button class='btn btn-primary'>
											<span class='btn-label'>
												<i class='fa fa-plus'></i>
											</span>
											Buat Surat
										</button>
                                        </a>
                </div>
            </article>
            
                        ";    
                }
                 
              ?>


        

	</main>
</div>
			
		</div>
		
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
	<!-- jQuery Sparkline -->
	<script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<!-- <script src="../../assets/js/setting-demo.js"></script> -->
	<script>
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#177dff',
			fillColor: 'rgba(23, 125, 255, 0.14)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#f3545d',
			fillColor: 'rgba(243, 84, 93, .14)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});

		$('#lineChart4').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});

		$('#lineChart5').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});

		$('#lineChart6').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});
	</script>
</body>
</html>