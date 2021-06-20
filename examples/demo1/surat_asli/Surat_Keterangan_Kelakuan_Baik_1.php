<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Ahli Waris</title>
    <link rel="stylesheet" href="Surat_Keterangan_Kelakuan_Baik_1.css">
</head>


<?php

require '../../config/functions.php';

$id = $_GET['id'];

$sql1 = "SELECT * FROM data_skkb WHERE id_skkb = $id";
$result = $conn->query($sql1);
$data = $result->fetch_assoc();




?>

<body>
    <!--KOP SURAT-->
    <BR>
        <U><H1 align="center">SURAT KETERANGAN KELAKUAN BAIK</H1></U>
        <H3 align="center"><?= $data['nomor_surat']; ?></H3><BR>
    <div id="container">
        <p><dd>
            Yang bertanda tangan dibawah ini, Lurah Oluhuta Utara Kecamatan Kabila Kabupaten Bone Bolango menerangkan kepada :
        </dd></p>  

        <table>
            <tr>
                <td><dd>Nama</dd></td>
                <td>:</td>
                <td><?= $data['nama_pemohon'];?></td>
            </tr>
            <tr>
                <td><dd>NIK</dd></td>
                <td>:</td>
                <td><?= $data['nik'];?></td>
            </tr>
            <tr>
                <td><dd>Jenis Kelamin</dd></td>
                <td>:</td>
                <td><?= $data['jk']; ?></td>
            </tr>
            <tr>
                <td><dd>Tempat/Tanggal Lahir</dd></td>
                <td>:</td>
                <td><?= $data['ttl'];?></td>
            </tr>
            <tr>
                <td><dd>Pekerjaan</dd></td>
                <td>:</td>
                <td><?= $data['pekerjaan'];?></td>
            </tr>
            <tr>
                <td><dd>Kewarganegaraan</dd></td>
                <td>:</td>
                <td><?= $data['kewarganegaraan']; ?></td>
            </tr>
            <tr>
                <td><dd>A g a m a</dd></td>
                <td>:</td>
                <td><?= $data['agama']; ?></td>
            </tr>
            <tr>
                <td><dd>Status</dd></td>
                <td>:</td>
                <td><?= $data['status']; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;"><dd>A l a m a t</dd></td>
                <td style="vertical-align: top;">:</td>
                <td><?= $data['alamat']; ?></td>
            </tr>
        </table>
        <p><dd>
            Bahwa yang bersangkutan diatas adalah benar – benar berkelakuan baik dan belum pernah tersangkut perkara kriminal di Kelurahan.
        </dd></p>
        <p><dd>
            Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk di pergunakan seperlunya.
        </dd></p>
    </div>
    <div id="ttd">

        <?php
          $date = date_create($data['tgl_surat']);

          if($data['penandatangan']=='Lurah'){


          
         ?>
          <table align="left">
            <div class="OluhutaTanggal" style="text-align: center;"> Oluhuta Utara,  <?= date_format($date, "d F Y") ?> </div>
            <div class="LurahOluhuta" style="text-align: center;"><b> LURAH OLUHUTA UTARA </b></div>
            <div class="nama" style="text-align: center;"><b><u>Mustafa Kemal Pangulu, S. STP.</u></b></div>
            <div class="nip" style="text-align: center;"><b>NIP: 19870505 200602 1 002</b></div>
        </table>

        <?php

          }else{

                  
          
        ?>

          <table align="left">
            <div class="OluhutaTanggal" style="text-align: center;"> Oluhuta Utara,  <?= date_format($date, "d F Y") ?></div>
            <div class="LurahOluhuta" style="text-align: center;"><b> SEKRETARIS KELURAHAN </b></div>
            <div class="nama" style="text-align: center;"><b><u>Rajmawati Abaidata</u></b></div>
            <div class="nip" style="text-align: center;"><b>NIP: 19870505 200602 1 002</b></div>
        </table>

        
        <?php
          }
        ?>
      </div>
      </table>
    </div>
</body>
</html>