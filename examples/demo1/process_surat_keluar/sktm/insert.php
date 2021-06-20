<?php
require '../../../config/functions.php';

$nosurat = $_POST['nomor_surat'];
$tglsurat = $_POST['tanggalsurat'];
$namattd = $_POST['nama_penandatangan'];
$nip = $_POST['nip'];
$jabatan = $_POST['jabatan'];
$pemohon = $_POST['nama_pemohon'];
$nik = $_POST['nik'];
$ttl = $_POST['ttl_pemohon'];
$pekerjaan = $_POST['pekerjaan'];
$status = $_POST['status'];
$alamat = $_POST['alamat'];
$penduduklingkungan = $_POST['penduduklingkungan'];
$ttd = $_POST['penandatangan'];


$sql = "INSERT INTO data_sktm 
        VALUES ('','','$nosurat','$tglsurat','$namattd','$nip','$jabatan','$pemohon','$nik','$ttl','$pekerjaan','$status','$alamat','$penduduklingkungan','$ttd');

";
$sukses = $conn->query($sql);

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
        window.location.href = '../../jenis_surat_keluar/form_sktm.php';
    </script>

    <?php
}