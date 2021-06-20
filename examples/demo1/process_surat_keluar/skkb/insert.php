<?php 

require '../../../config/functions.php';

$nomorsurat = $_POST['nomor_surat'];
$tglsurat = $_POST['tgl_surat'];
$nama = $_POST['nama_pemohon'];
$nik = $_POST['nik'];
$jenkel = $_POST['jk'];
$ttlahir = $_POST['ttl'];
$pekerjaan = $_POST['pekerjaan'];
$kw = $_POST['kewarganegaraan'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$alamat = $_POST['alamat'];
$penandatangan = $_POST['penandatangan'];


$sql = "INSERT INTO data_skkb 
        VALUES ('','$nomorsurat','$tglsurat','$nama','$nik','$jenkel','$ttlahir','$pekerjaan','$kw','$agama','$status','$alamat','$penandatangan');

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
        window.location.href = '../../jenis_surat_keluar/form_skkb.php';
    </script>

    <?php
}































