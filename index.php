<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Project 1</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <div style="margin-right: 30px;">
                                    <a href=""><img src="dist/img/MaleAvatar.jpg" alt="Gambar Profil" class="brand-image img-circle elevation-3" width="300px"></a>
                                </div>
                                <div>
                                    <h1>PROFIL ADMIN</h1>
                                    <strong>Nama:</strong> Muhammad Andhika Thata<br>
                                    <strong>NIM:</strong> 0110223053<br>
                                    <strong>Umur:</strong> 20 tahun<br>
                                    <strong>Prodi:</strong> Teknik Informatika<br>
                                    <strong>Rombel:</strong> TI02<br>
                                    <strong>Angkatan:</strong> 2023<br>
                                    <strong>Domisili:</strong> Bojonggede Bogor<br>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="pasien" class="card-link">
                                    <div class="card bg-primary rounded p-3 ml-3 elevation-3">
                                        <div class="card-body text-center">
                                            <i class="fas fa-user nav-icon fa-5x"></i>
                                            <h4 class="card-title">Pasien</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="dokter" class="card-link">
                                    <div class="card bg-success rounded p-3 elevation-3">
                                        <div class="card-body text-center">
                                            <i class="fas fa-user-md nav-icon fa-5x"></i>
                                            <h4 class="card-title">Dokter</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="periksa" class="card-link">
                                    <div class="card bg-warning rounded p-3 mr-3 elevation-3">
                                        <div class="card-body text-center">
                                            <i class="fas fa-stethoscope nav-icon fa-5x"></i>
                                            <h4 class="card-title">Periksa</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <!-- /.card -->
                    
                    <div class="card-footer">
                            <strong>Copyright &copy; 2024 <a href="https://adminlte.io"></a>.</strong> All rights reserved.
                        </div>
                        <!-- /.card-footer-->   
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>