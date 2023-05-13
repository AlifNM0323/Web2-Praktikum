<?php

require_once 'header.php';
require_once 'sidebar.php';

?>
<div class="content-wrapper">
    <hr>
    <h3 align="center">Daftar Pesanan Custumer</h3>
    <hr>
    <div class="container">

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
</div>
<?php require_once 'footer.php'; ?>