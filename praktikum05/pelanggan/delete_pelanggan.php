<?php 

    require_once 'dbkoneksi.php';

    // Simpan Data IDdel
    $delete = $_GET['iddel'];
    //bikin query sql
    $sql = "DELETE FROM pelanggan WHERE id=?";

    //kita siapin
    $st = $dbh->prepare($sql);
    //eksekusi
    $st->execute([$delete]);
 

    header('location:list_pelanggan.php');

?>