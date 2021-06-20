<?php 

require '../../../config/functions.php';

$nomorsurat = $_POST['nomor_surat'];
$tglsurat = $_POST['tgl_surat'];
$nama = $_POST['nama_pemohon'];
$umur = $_POST['umur'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO data_skt 
        VALUES ('','$nomorsurat','$tglsurat','$nama','$umur','$pekerjaan','$alamat');

";
// var_dump($sql);
$sukses = $conn->query($sql);

?>
<?php   
if($sukses){
    ?>
    
    <script>
        alert('Surat Berhasil Dibuat, Silahkan Lihat Surat Pada Lemari Arsip!');
        window.location.href = '../../datatables_surat_keluar.php/data_tables_arsip_data.php';
    </script>

    <?php
}else {
    ?>
    <script>
        alert('Surat Gagal Dibuat, Silahkan Masukan Data Surat Lagi!');
        window.location.href = '../../jenis_surat_keluar/form_skt.php';
    </script>

    <?php
}































