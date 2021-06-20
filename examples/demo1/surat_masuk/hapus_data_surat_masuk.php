<?php 

require '../../config/functions.php';

$id = $_GET["id"];

$querydel = mysqli_query($conn, "SELECT * FROM surat_masuk WHERE id = $id ");
$result = mysqli_fetch_assoc($querydel);
unlink('../../config/public/surat_masuk/'.$result["file"]);

if ( hapus($id) > 0 ) {

 

    echo "
    
        <script>
            alert('Data Berhasil dihapus!');    
            document.location.href = 'datatables_surat_masuk.php';
        </script>
    
        
    ";
} else {

    echo "
    
            <script>
            alert('Data gagal Ditambahkan!');
            document.location.href = 'datatables_surat_masuk.php';
            </script>
    
    ";
}


?>