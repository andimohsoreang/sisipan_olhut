<?php

require '../../config/functions.php';

$id = $_GET['id'];

$querydel = mysqli_query($conn, "SELECT * FROM data_arsip WHERE id = $id ");
$result = mysqli_fetch_assoc($querydel);

unlink('../../config/public/data/'.$result["file"]);


if ( hapus2($id) > 0 ) {

    echo "
    
        <script>
            alert('Data Berhasil dihapus!');    
            document.location.href = 'data_tables_arsip_data.php';
        </script>
    
    ";
} else {

    echo "
    
            <script>
            alert('Data gagal Ditambahkan!');
            document.location.href = 'data_tables_arsip_data.php';
            </script>
    
    ";
}
 

?>