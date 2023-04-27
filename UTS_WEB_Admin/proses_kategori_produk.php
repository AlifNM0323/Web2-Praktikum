<?php
require_once 'dbkoneksi.php';
?>
<?php
$_nama_kategori = $_POST['nama_kategori'];


$_proses = $_POST['submit'];

// array data
$ar_data[] = $_nama_kategori; // ? 1


if ($_proses == "submit") {
   // data baru
   $sql = "INSERT INTO kategori_produk (nama_kategori) VALUES (?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; // ? 8
   $sql = "UPDATE kategori_produk SET nama_kategori=? WHERE id=?";
}

var_dump($_proses);
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location:kategori_produk.php');
?>