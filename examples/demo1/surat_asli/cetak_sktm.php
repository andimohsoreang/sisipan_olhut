<?php
require_once '../../../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Keterangan Tidak Mampu</title>
  <link rel="stylesheet" href="sktm.css">
</head>

<body>
';


require '../../config/functions.php';

$id = $_GET['id'];

$sql1 = "SELECT * FROM data_sktm WHERE id_sktm = $id";
$result = $conn->query($sql1);
$data = $result->fetch_assoc();

$html .= '


<div id="kopsurat">
<center>
    <table>
        <tr>
            <td class="gambar"><img src="../../assets/img/logo_olhut.jpg" width="90" height="100"></td>
            <td>
                <center>
                    <font size="5"><b>PEMERINTAH KABUPATEN BONE BOLANGO</b></font><br>
                    <font size="5"><b>KECAMATAN KABILA</b></font><br>
                    <font size="5"><b>KANTOR KELURAHAN OLUHUTA UTARA</b></font><br>
                    <font size="2"><i>Jln. Kompas Kelurahan Oluhuta Utara Kecamatan Kabila - 96183</i></font>
                </center>
            </td>
        </tr>
    </table>
</center>
</div>
<hr size="3px" color="black" >

<div id="Judul-Surat">
   <h3 align="center"><u>KETERANGAN TIDAK MAMPU</u></h3>
    <h4 align="center">'.$data['nomor_surat'].'</h4>
</div>

 <div id="ISI">
 <p>Yang bertanda tangan dibawah ini : </p>

 <div class="Biodata1">
   <table>
     <tr>
         <td style="width: 29%;">Nama</td>
         <td style="width: 3%;">:</td>
         <td style="width: 65%;"><b> '.$data['nama_penandatangan'].'</b></td>
     </tr>
     <tr>
        <td style="width: 29%;">NIP</td>
        <td style="width: 3%;">:</td>
        <td style="width: 65%;"> '.$data['nip'].'</td>
     </tr>
     <tr>
        <td style="width: 29%;">Jabatan</td>
        <td style="width: 3%;">:</td>
        <td style="width: 65%;"> '.$data['jabatan'].'</td>
     </tr>
  </table>
 </div>

  <p>Menerangkan kepada :</p>


  <div class="Biodata2">
  <table border="1">
      <tr>
        <td style="width: 26%;">Nama</td>
        <td style="width: 4%;">:</td>
        <td style="width: 65%;"><b>'.$data['nama_pemohon'].'</b></td>
      </tr>
      <tr>
        <td style="width: 26%;">NIK</td>
        <td style="width: 4%;">:</td>
        <td style="width: 65%;">'.$data['nik'].'</td>
      </tr>
      <tr>
        <td style="width: 26%;">Tempat,Tanggal lahir</td>
        <td style="width: 4%;">:</td>
        <td style="width: 65%;">'.$data['ttl_pemohon'].'</td>
      </tr>
      <tr>
        <td style="width: 26%;">Pekerjaan</td>
        <td style="width: 4%;">:</td>
        <td style="width: 65%;">'.$data['pekerjaan'].'</td>
      </tr>
      <tr>
        <td style="width: 26%;">Status</td>
        <td style="width: 4%;">:</td>
        <td style="width: 65%">'.$data['status'].'</td>
      </tr>
      <tr>
        <td style="width: 26%;">Alamat</td>
        <td style="width: 4%;">:</td>
        <td style="width: 65%;">'.$data['alamat'].'</td>
      </tr>
    </div>
  </div>

     <div id="Penutup">
      <table>
        <p style="text-indent: 40px;"> Bahwa yang namanya tersebut diatas benar-benar Penduduk Lingkungan '.$data['penduduklingkungan'].'Kelurahan Oluhuta Utara Kecamatan Kabila Kabupaten Bone Bolango, yang bersangkutan tergolong pada masyarakat ekonomi lemah / tidak mampu.</?php>
        <p style="text-indent: 40px;"> Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk dipergunakan seperlunya.</p>
      </table>
     </div>

     <a href="../jenis_surat_keluar/form_sktm.php">BACK</a>
      
    <div id="ttd">

';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>