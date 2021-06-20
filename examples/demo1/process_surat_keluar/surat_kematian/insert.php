<?php
require '../../../config/functions.php';

$nosurat = $_POST['nomor_surat'];
$tglsurat = $_POST['tgl_surat'];
$namattd = $_POST['nama_penandatangan'];
$nip = $_POST['nip'];
$jabatan = $_POST['jabatan'];
$jenazah = $_POST['nama_jenazah'];
$umur = $_POST['umur'];
$jenkel = $_POST['jk'];
$alamat = $_POST['alamat'];
$tglkematian = $_POST['tgl_kematian'];
$lokasiwafat = $_POST['lokasi_wafat'];
$sebab = $_POST['sebab'];
$ttd = $_POST['penandatangan'];



$sql = "INSERT INTO data_surat_kematian 
        VALUES ('','$nosurat','$tglsurat','$namattd','$nip','$jabatan','$jenazah','$umur','$jenkel','$alamat','$tglkematian','$lokasiwafat','$sebab','$ttd');

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
        window.location.href = '../../jenis_surat_keluar/form_surat_kematian.php';
    </script>

    <?php
}