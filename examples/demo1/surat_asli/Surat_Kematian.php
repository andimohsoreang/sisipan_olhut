<!DOCTYPE html>
 <head>
     <title>Surat Keterangan Kematian</title>
     <meta charset="8">
     <link rel="stylesheet" href="Surat_Kematian.css">
 </head>
 <?php
require '../../config/functions.php';

$id = $_GET['id'];

$sql1 = "SELECT * FROM data_surat_kematian WHERE id = $id";
$result = $conn->query($sql1);
$data = $result->fetch_assoc();


?>
 <body>
     <div id="kopsurat">
    <center>
        <table>
            <tr>
                <td class="gambar"><img src="Logo.jpg" width="90" height="100"></td>
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

    <div id="judul">
        <h3 align="center"><u>SURAT KETERANGAN KEMATIAN</u></h3>
        <h4 align="center"><?= $data['nomor_surat'] ?></h4>
   </div>

   <div id="isi">
    <p>Yang  bertanda  tangan  dibawah  ini : </p>

   <div class="bio1">
   <table>
       <tr>
           <td style="width: 1%;">Nama</td>
           <td style="width: 1%;">:</td>       
           <td style="width: 1%;"><?= $data['nama_penandatangan'] ?></td>
           </tr>
        <tr>
           <td style="width: 37%;">Nip</td>
           <td style="width: 7%;">:</td>     
           <td style="width: 65%;"><?= $data['nip'] ?></td>
        </tr>
        <tr>
           <td style="width: 37%;">Jabatan</td>
           <td style="width: 7%;">:</td>
           <td style="width: 65%;"><?= $data['jabatan'] ?></td>
       </tr>                  
   </table>
   </div>

   <p>Menerangkan Kepada : </p>
   <div class="bio2">
   <table>
       <tr>
           <td style="width: 24%;">Nama</td>
           <td style="width: 7%;">:</td>       
           <td style="width: 65%;"><?= $data['nama_jenazah'] ?></td>
           </tr>
        <tr>
           <td style="width: 24%;">Umur</td>
           <td style="width: 7%;">:</td>     
           <td style="width: 65%;"><?= $data['umur'];?> Tahun</td>
        </tr>
        <tr>
           <td style="width: 24%;">Jenis Kelamin</td>
           <td style="width: 7%;">:</td>
           <td style="width: 65%;"><?= $data['jk'] ?></td>
       </tr>         
       <tr>
        <td style="width: 24%;">Alamat</td>
        <td style="width: 7%;">:</td>
        <td style="width: 65%;"><?= $data['alamat'] ?></td>
    </tr>            
   </table>
   </div>

   <p>Telah Meninggal Dunia Pada : </p>
   <div class="bio3">
   <table>
       <tr>
           <td style="width: 60%;">Tanggal/Tahun</td>
           <td style="width: 7%;">:</td>       
           <td style="width: 65%;"><?= $data['tgl_kematian'] ?></td>
           </tr>
        <tr>
           <td style="width: 60%;">Di</td>
           <td style="width: 7%;">:</td>     
           <td style="width: 65%;"><?= $data['lokasi_wafat'] ?></td>
        </tr>
        <tr>
           <td style="width: 60%;">Disebabkan Karena</td>
           <td style="width: 7%;">:</td>
           <td style="width: 65%;"><?= $data['sebab'] ?></td>
       </tr>                  
   </table>
   </div>

   <p>Demikian surat Keterangan kematian ini dibuat atas dasar yang sebenarnya.</p>


   <div id="ttd">
       <?php 

        $date = date_create($data['tgl_surat']);
        if($data['penandatangan']=='Lurah Olohuta Utara'){
            ?>

    <table>
        <div class="tanggal" style="text-align: center;">Oluhuta Utara, <?= date_format($date, "d F Y") ?></div>
        <div class="lurahh" style="text-align: center;"><b>LURAH OLUHUTA UTARA</b></div>
        <div class="nama" style="text-align: center;"><b><u>MUSTAPA KEMAL PANGULU,S.STP.</u></b></div>
        <div class="nip" style="text-align: center;"><b>NIP. 19830730 200312 1 001</b></div>
    </table>

    <?php
        }else {
            ?>
        <table>
        <div class="tanggal" style="text-align: center;">Oluhuta Utara, <?= date_format($date, "d F Y") ?></div>
        <div class="lurahh" style="text-align: center;"><b>SEKRETARIS KELURAGAN</b></div>
        <div class="nama" style="text-align: center;"><b><u>Rajmawati Abaidata, A.Md.</u></b></div>
        <div class="nip" style="text-align: center;"><b>NIP. 19830730 200312 1 001</b></div>
    </table>
            <?php
        }
    ?>

      </div>
      </table>
    </div>
 </body>