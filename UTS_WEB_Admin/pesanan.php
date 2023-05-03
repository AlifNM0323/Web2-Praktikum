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
                    <h1>Dashboard Admin Website E-Commerce</h1>
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
                            <h3 class="card-title">Daftar Pemesan</h3>

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
                            <?php
                            $sql = "SELECT * FROM pesanan";
                            $rs = $dbh->query($sql);
                            ?>

                            <table class="table table-hover" border="1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pemesan</th>
                                        <th>Alamat Pemesan</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                        <th>Jumlah Pesanan</th>
                                        <th>Deskripsi</th>
                                        <th>Produk ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor  = 1;
                                    foreach ($rs as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $row['tanggal'] ?></td>
                                            <td><?= $row['nama_pemesan'] ?></td>
                                            <td><?= $row['alamat_pemesan'] ?></td>
                                            <td><?= $row['no_hp'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['jumlah_pesanan'] ?></td>
                                            <td><?= $row['deskripsi'] ?></td>
                                            <td><?= $row['produk_id'] ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="view_pesanan.php?id=<?= $row['id'] ?>">View</a>
                                                <a class="btn btn-warning" href="form_pesanan.php?idedit=<?= $row['id'] ?>">Edit</a>
                                                <a class="btn btn-danger" href="delete_pesanan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
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