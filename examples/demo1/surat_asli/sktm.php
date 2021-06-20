<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Keterangan Tidak Mampu</title>
  <link rel="stylesheet" href="sktm.css">
</head>

<body>

<?php
require '../../config/functions.php';

$id = $_GET['id'];

$sql1 = "SELECT * FROM data_sktm WHERE id_sktm = $id";
$result = $conn->query($sql1);
$data = $result->fetch_assoc();


?>
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
        <h4 align="center"><?= $data['nomor_surat'] ?></h4>
    </div>

     <div id="ISI">
     <p>Yang bertanda tangan dibawah ini : </p>

     <div class="Biodata1">
       <table>
         <tr>
             <td style="width: 29%;">Nama</td>
             <td style="width: 3%;">:</td>
             <td style="width: 65%;"><b> <?=$data['nama_penandatangan']?></b></td>
         </tr>
         <tr>
            <td style="width: 29%;">NIP</td>
            <td style="width: 3%;">:</td>
            <td style="width: 65%;"> <?=$data['nip']?></td>
         </tr>
         <tr>
            <td style="width: 29%;">Jabatan</td>
            <td style="width: 3%;">:</td>
            <td style="width: 65%;"> <?=$data['jabatan']?></td>
         </tr>
      </table>
     </div>

      <p>Menerangkan kepada :</p>
      <div class="Biodata2">
      <table>
          <tr>
            <td style="width: 26%;">Nama</td>
            <td style="width: 4%;">:</td>
            <td style="width: 65%;"><b> <?=$data['nama_pemohon']?></b></td>
          </tr>
          <tr>
            <td style="width: 26%;">NIK</td>
            <td style="width: 4%;">:</td>
            <td style="width: 65%;"><?=$data['nik']?></td>
          </tr>
          <tr>
            <td style="width: 26%;">Tempat,Tanggal lahir</td>
            <td style="width: 4%;">:</td>
            <td style="width: 65%;"><?=$data['ttl_pemohon']?></td>
          </tr>
          <tr>
            <td style="width: 26%;">Pekerjaan</td>
            <td style="width: 4%;">:</td>
            <td style="width: 65%;"><?=$data['pekerjaan']?></td>
          </tr>
          <tr>
            <td style="width: 26%;">Status</td>
            <td style="width: 4%;">:</td>
            <td style="width: 65%"><?=$data['status']?></td>
          </tr>
          <tr>
            <td style="width: 26%;">Alamat</td>
            <td style="width: 4%;">:</td>
            <td style="width: 65%;"><?=$data['alamat']?></td>
          </tr>
        </div>
      </div>

         <div id="Penutup">
          <table>
            <p style="text-indent: 40px;"> Bahwa yang namanya tersebut diatas benar-benar Penduduk Lingkungan <?= $data['penduduklingkungan']; ?> Kelurahan Oluhuta Utara Kecamatan Kabila Kabupaten Bone Bolango, yang bersangkutan tergolong pada masyarakat ekonomi lemah / tidak mampu.</?php>
            <p style="text-indent: 40px;"> Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk dipergunakan seperlunya.</p>
          </table>
         </div>

        
          
        <div id="ttd">

        <?php
          $date = date_create($data['tanggalsurat']);

          if($data['penandatangan']=='Lurah'){


          
         ?>
          <table align="left">
            <div class="OluhutaTanggal" style="text-align: center;"> Oluhuta Utara,  <?= date_format($date, "d F Y") ?> </div>
            <div class="LurahOluhuta" style="text-align: center;"><b> LURAH OLUHUTA UTARA </b></div>
            <div class="nama" style="text-align: center;"><b><u>Mustafa Kemal Pangulu, S. STP.</u></b></div>
            <div class="nip" style="text-align: center;"><b>NIP: 19870505 200602 1 002</b></div>
        </table>

        <?php

          }else if ($data['penandatangan']=='Sekretaris Kelurahan Oluhuta Utara') {

        ?>

          <table align="left">
            <div class="OluhutaTanggal" style="text-align: center;"> Oluhuta Utara,  <?= date_format($date, "d F Y") ?></div>
            <div class="LurahOluhuta" style="text-align: center;"><b> SEKRETARIS KELURAHAN </b></div>
            <div class="nama" style="text-align: center;"><b><u>Rajmawati Abaidata, Amd</u></b></div>
            <div class="nip" style="text-align: center;"><b>NIP: 19870505 200602 1 002</b></div>
        </table>

        
        <?php
          }
        ?>
      </div>
      </table>
    </div>

    
</body>