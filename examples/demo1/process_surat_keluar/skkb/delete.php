<?php 

require '../../../config/functions.php';

$id = $_GET["id"];

if ( hapus6($id) > 0 ) {

    echo "
    
        <script>
            alert('Data Berhasil dihapus!');    
            document.location.href = '../../datatables_surat_keluar.php/data_tables_arsip_data.php';
        </script>
    
    ";
} else {

    echo "
    
            <script>
            alert('Data gagal Dihapus!');
            document.location.href = '../../datatables_surat_keluar.php/data_tables_arsip_data.php';
            </script>
    
    ";
}


?>