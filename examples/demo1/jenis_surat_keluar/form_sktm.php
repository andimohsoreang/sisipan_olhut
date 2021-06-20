<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Form Surat Keterangan Tidak Mampu</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <?php

    include '../bar/_sivbar.php';
    require '../../config/functions.php';
   ?>

    <!-- Cek Tombol Sudah Ditekan Atau tidak -->
    

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Form Surat Keluar</h4>
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
                            <a href="#">Surat Keluar</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Surat Keterangan Tidak Mampu</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    </div>
                                    <label class="mt-3 mb-3"><b>Input Data SKTM</b></label>
                                    <form action="../process_surat_keluar/sktm/insert.php" method="post">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="nomor_surat" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nomor Surat</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                    <small>tanggal Pembuatan Surat</small>
                                        <input id="inputFloatingLabel" type="date" name="tanggalsurat" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder"></label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="nama_penandatangan" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nama Penandatangan </label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="number" name="nip" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">NIP</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="jabatan" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Jabatan</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="nama_pemohon" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nama Pemohon </label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="number" name="nik" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">NIK Pemohon</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="ttl_pemohon" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Tempat Tanggal Lahir Pemohon</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="pekerjaan" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Pekerjaan Pemohon</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="status" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Status Pemohon</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="alamat" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Alamat Pemohon</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" name="penduduklingkungan" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Penduduk Lingkungan</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Pilih Penandatangan</label>
                                        <select name="penandatangan" class="form-control" id="exampleSelectGender">
                                        <option class="disabled">--> Pilih Penandatangan <--</option>
                                        <option>Lurah</option>
                                       <option>Sekretaris Kelurahan Oluhuta Utara</option>
                                     </select>
                                    </div>
                                    <div class="card-action">
                                        <button class="btn btn-success" type="submit" name="submit"></a> Buat Surat </button>
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