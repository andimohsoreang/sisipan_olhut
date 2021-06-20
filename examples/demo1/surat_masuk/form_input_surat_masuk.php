<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forms - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <?php

    include '../bar/_sivbar.php';
    require '../../config/functions.php';
    ?>

    <?php

    ?>

    <!-- Cek Tombol Sudah Ditekan Atau tidak -->


    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Form Surat Masuk</h4>
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
                                <div class="card-title">SURAT MASUK</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                </div>
                                <label class="mt-3 mb-3"><b>Input Data Surat Masuk</b></label>

                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "db_sisipan");

                                if (isset($_POST["submit"])) {



                                    $nomorsurat = htmlspecialchars($_POST["nomor"]);
                                    $instansi = htmlspecialchars($_POST["pengirim"]);
                                    $perihal = htmlspecialchars($_POST["perihal"]);
                                    $tanggal = htmlspecialchars($_POST["tgl_surat"]);



                                    // query insert data 
                                    $media = upload_gambar_surat_masuk();


                                    $query = "
                                                    INSERT INTO surat_masuk
                                                    VALUES 
                                                    ('','$nomorsurat','$instansi','$tanggal','$media','$perihal')
                                        
                                        
                                        
                                        ";
                                    mysqli_query($conn, $query);


                                    // Mengecek apakah data berhasil di tambahkan atau tidak

                                    if (mysqli_affected_rows($conn) > 0) {
                                        echo "
                                                
                                                    <script>
                                                        alert('Berhasil');
                                                    </script>
                                                ";
                                    } else {
                                        echo "
                                            
                                                <script>
                                                    alert('gagal Menginput!')
                                                </script>

                                                 
                                            ";

                                        echo mysqli_error($conn);
                                    }
                                }

                                ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="nomor" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nomor Surat</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="pengirim" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Instansi Pengirim</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="perihal" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Perihal Surat</label>
                                    </div>
                                    <div class="form-group">
                                        <small id="emailHelp2" class="form-text text-muted">Tanggal Surat</small>
                                        <label for="tgl_surat" class="form-text text-mute"></label>
                                        <input type="date" class="form-control form-text text-muted" id="tgl_surat" name="tgl_surat" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <small id="uploadsurat" class="form-text text-muted">Upload Surat</small>
                                        <label for="uploadsurat" class="form-text text-mute"></label>
                                        <input type="file" class="form-control form-text text-muted" id="uploadsurat" name="file" placeholder="Enter Email">
                                    </div>
                                    <div class="card-action">
                                        <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    
        <?php

        include '../bar/jsfile.php';
        ?>
        </body>

</html>