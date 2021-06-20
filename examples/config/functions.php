<?php 
// Konfigurasi Database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'db_sisipan';

// Make Connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Cek Koneksi 
if ($conn->connect_error){
    echo "Error: Gagal koneksi ke Database <br />";
    echo "Debuging Error: " . $conn->connect_error;
    exit();
};


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM surat_masuk WHERE id = $id ");
    return mysqli_affected_rows($conn);
    
    
}

function hapus2($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM data_arsip WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus3($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM data_sktm WHERE id_sktm = $id");
    return mysqli_affected_rows($conn);
}

function hapus4($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM data_skt WHERE id_skt = $id");
    return mysqli_affected_rows($conn);
}

function hapus5($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM data_surat_kematian WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus6($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM data_skkb WHERE id_skkb = $id");
    return mysqli_affected_rows($conn);
}


function upload_gambar_surat_masuk() { 
 $namaFile = $_FILES['file']['name'];
 $ukuranFile = $_FILES['file']['size'];
 $error = $_FILES['file']['error'];
 $tmpName = $_FILES['file']['tmp_name'];

 // cek apakah tidak ada gambar yang di upload
 if($error === 4) {
     echo "
         <script>
             alert('pilih foto terlebih dahulu');

         </script>
     ";
     return false;
 }

 // cek apakah yang di upload gambar
 $extensifotoValid = ['jpg', 'jpeg', 'png','pdf'];
 $extensifoto = explode('.', $namaFile);
 $extensifoto = strtolower(end($extensifoto));
 if(!in_array($extensifoto, $extensifotoValid)) {
     echo "
         <script>
             alert('yang anda upload bukan foto');
         </script>
     ";
     return false;
 }

 // cek ukuran file gambar
 if($ukuranFile > 40943040) {
     echo "
         <script>
             alert('ukuran foto terlalu besar!');
         </script>
     ";
     return false;
 }
 // generate nama gambar baru
 $cakacakacak = uniqid(microtime(true));
 $namaFileBaru = $cakacakacak;
 $namaFileBaru .= '.';
 $namaFileBaru .= $extensifoto;

 // jika lolos pengecekan
 move_uploaded_file($tmpName, '../../config/public/surat_masuk/' . $namaFileBaru);
 return $namaFileBaru;
  }


function upload_gambar_arsip_data(){
  $namaFile = $_FILES['file']['name'];
  $ukuranFile = $_FILES['file']['size'];
  $error = $_FILES['file']['error'];
  $tmpName = $_FILES['file']['tmp_name'];
 
  // cek apakah tidak ada gambar yang di upload
  if($error === 4) {
      echo "
          <script>
              alert('pilih foto terlebih dahulu');
 
          </script>
      ";
      return false;
  }
 
  // cek apakah yang di upload gambar
  $extensifotoValid = ['jpg', 'jpeg', 'png','pdf','docx','xlsx'];
  $extensifoto = explode('.', $namaFile);
  $extensifoto = strtolower(end($extensifoto));
  if(!in_array($extensifoto, $extensifotoValid)) {
      echo "
          <script>
              alert('yang anda upload bukan foto');
          </script>
      ";
      return false;
  }
 
  // cek ukuran file gambar
  if($ukuranFile > 40943040) {
      echo "
          <script>
              alert('ukuran foto terlalu besar!');
          </script>
      ";
      return false;
  }
  // generate nama gambar baru
  $cakacakacak = uniqid(microtime(true));
  $namaFileBaru = $cakacakacak;
  $namaFileBaru .= '.';
  $namaFileBaru .= $extensifoto;
 
  // jika lolos pengecekan
  move_uploaded_file($tmpName, '../../config/public/data/' . $namaFileBaru);
  return $namaFileBaru;
}    
?>      
