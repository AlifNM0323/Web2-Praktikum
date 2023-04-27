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
                            <h3 class="card-title">Selamat Datang!!</h3>

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

                            <!doctype html>
                            <html lang="en">

                            <head>
                                <!-- Required meta tags -->
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                                <!-- Bootstrap CSS -->
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

                                <title>Hello, world!</title>
                            </head>

                            <body>
                                <?php
                                require_once 'dbkoneksi.php';
                                ?>
                                <form method="POST" action="proses_produk.php">
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode</label>
                                        <div class="col-8">
                                            <input id="kode" name="kode" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                        <div class="col-8">
                                            <input id="harga_jual" name="harga_jual" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                        <div class="col-8">
                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stok" class="col-4 col-form-label">Stok</label>
                                        <div class="col-8">
                                            <input id="stok" name="stok" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                                        <div class="col-8">
                                            <input id="min_stok" name="min_stok" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                        <div class="col-8">
                                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label>
                                        <div class="col-8">
                                            <?php
                                            $sqlkartu_id = "SELECT * FROM kategori_produk";
                                            $rskartu_id = $dbh->query($sqlkartu_id);
                                            ?>
                                            <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
                                                <?php
                                                foreach ($rskartu_id as $rowkartu_id) {
                                                ?>
                                                    <option value="<?= $rowkartu_id['id'] ?>"><?= $rowkartu_id['nama_kategori'] ?></option>
                                                <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary" value="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

                                <!-- Option 2: Separate Popper and Bootstrap JS -->
                                <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
                            </body>

                            </html>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Sekolah Tinggi Teknologi Terpadu Nurul Fikri
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