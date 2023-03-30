<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pelanggan";
$rs = $dbh->query($sql);
?>
<br>
<div class="container">

<a class="btn btn-success" href="form_pelanggan.php" role="button">Create Pelanggan</a>
<hr>
<table class="table table-hover" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Email</th>
            <th scope="col">Kartu ID</th>
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
                <td><?= $row['jk'] ?></td>
                <td><?= $row['tmp_lahir'] ?></td>
                <td><?= $row['tgl_lahir'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['kartu_id'] ?></td>
                <td>
                    <a class="btn btn-secondary" href="view_pelanggan.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-info" href="form_pelanggan.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-danger" href="delete_pelanggan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>
</div>