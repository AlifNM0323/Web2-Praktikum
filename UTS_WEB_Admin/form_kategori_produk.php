<?php

require_once 'header.php';
require_once 'sidebar.php';

?>

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Website E-Commerce</h1>
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
              <h3 class="card-title">Create Data Baru Kategori</h3>

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

              <?php
              require_once 'dbkoneksi.php';
              ?>
              <form method="POST" action="proses_kategori_produk.php">
                <div class="form-group row">
                  <label for="nama_kategori" class="col-4 col-form-label">Nama Kategori</label>
                  <div class="col-8">
                    <input id="nama_kategori" name="nama_kategori" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary" value="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              By. Pemograman WEB 2 Sekolah Tinggi Teknologi Terpadu Nurul Fikri
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once 'footer.php'; ?>