<?php
require_once 'dbkoneksi.php';
$delete = $_GET['iddel'];
$sql = "DELETE FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$delete]);

header('location:pesanan.php');
?>