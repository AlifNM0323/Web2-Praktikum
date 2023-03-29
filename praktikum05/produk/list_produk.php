<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>
<div class="container">

<a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
<hr>
<table class="table table-hover" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Qty</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['harga_jual'] ?></td>
                <td><?= $row['stok'] ?></td>
                <td>
                    <a class="btn btn-primary" href="view_produk.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>
</div>