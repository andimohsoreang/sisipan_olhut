<?php

require '../../config/functions.php';

if(isset($_POST["submitupdate"])){

    $idupdate = $_POST['id'];
    $namafile = $_POST['nama_file'];
    $tglupload = $_POST['tgl_upload'];
    $fileupload = $_POST['fileupload'];
    if($_FILES['file']['error'] === 4){
        $gambar_baru = $fileupload;
    } else {
        $gambar_baru = upload_gambar_arsip_data();
        unlink('../../config/public/data/'.$fileupload);
    }


    $sqledit = "UPDATE data_arsip SET nama_file='$namafile',tgl_upload='$tglupload',file='$gambar_baru' WHERE id=$idupdate";
    $result = $conn->query($sqledit);
    
    ?>

        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'data_tables_arsip_data.php';
        </script>

    <?php
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forms - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <?php

    include '../bar/_sivbar.php';

    $sql = "SELECT * FROM data_arsip WHERE id=".$_GET['id'];
    $result = $conn->query($sql);
    $datasm = $result->fetch_assoc();
    var_dump($datasm);
    ?>

        

    <!-- Cek Tombol Sudah Ditekan Atau tidak -->
    

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">FORM INPUT DATA</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Forms</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Surat Masuk</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">INPUT DATA</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    </div>
                                    <label class="mt-3 mb-3"><b>Form Floating Label</b></label>
                                    <?php
                                // $conn = mysqli_connect("localhost","root","","db_sisipan");

                                //  if(isset($_POST["submit"])){
                                    
                                //      var_dump($_POST);   

                                //         $namafile = $_POST["nama_file"];
                                //         $tgl_upload = $_POST["tgl_upload"];
                                        

                                //         $media = upload_gambar_file_data();

                                //         // query insert data 
                                //         $query = "
                                //                     INSERT INTO data_arsip
                                //                     VALUES 
                                //                     ('','$namafile','$tgl_upload','$media')
                                        
                                        
                                        
                                //         ";
                                //         mysqli_query($conn,$query);
                                //  }

                                //      ?>

                                     
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="fileupload" value="<?= $datasm['file'] ?>">
                                    <input type="hidden" name="id" value="<?= $datasm['id'] ?>">
                                    <div class="form-group form-floating-label" >
                                        <input id="inputFloatingLabel" value="<?= $datasm['nama_file'] ?>" type="text" name="nama_file" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nama File</label>
                                    </div>
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted">Tanggal Penginputan File</small>
                                        <label for="tgl_surat" class="form-text text-mute"></label>
                                        <input type="date" value="<?= $datasm['tgl_upload'] ?>" class="form-control form-text text-muted" id="tgl_surat" name="tgl_upload" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <small id="uploadsurat" class="form-text text-muted">Upload File/Dokumen</small>
                                        <img class="img-fluid" src="../../config/public/data/<?=$datasm['file'] ?> ?>" alt="" width="200">
                                        <br>
                                        <small>Name File : <?= $datasm['file'] ?></small>
                                        <label for="uploadsurat" class="form-text text-mute"></label>
                                        <input type="file" value="<?= $datasm['file'] ?>"  class="form-control form-text text-muted" id="uploadsurat" name="file" placeholder="Enter Email">
                                    </div>
                                    <div class="card-action">
                                        <button class="btn btn-success" type="submit" name="submitupdate">Submit</button>
                                    </div>
                                    </form>
                            </div>
                        </div>

                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <h4>Logo Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                            <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                            <br />
                            <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Navbar Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeTopBarColor" data-color="dark"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="green"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange"></button>
                            <button type="button" class="changeTopBarColor" data-color="red"></button>
                            <button type="button" class="changeTopBarColor" data-color="white"></button>
                            <br />
                            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                            <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="green2"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                            <button type="button" class="changeTopBarColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Sidebar</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Background</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                            <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                            <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                            <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-toggle">
                <i class="flaticon-settings"></i>
            </div>
        </div>
        <!-- End Custom template -->
    </div>
    <?php

    include '../bar/jsfile.php';
    ?>
    </body>

</html>