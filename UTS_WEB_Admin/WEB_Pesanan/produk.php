<?php

require_once 'header.php';

?>
<br><br><br><br><br>
<center><h3><b>Daftar Produk E-Commerce</b></h3></center>
<section id="services" class="services">

<div class="container" data-aos="fade-up">
  <?php
  require_once 'dbkoneksi.php';
  ?>
  <?php
  $sql = "SELECT * FROM produk";
  $rs = $dbh->query($sql);
  ?>
  <div class="row gy-4">
    <?php
    $nomor  = 1;
    foreach ($rs as $row) {
    ?>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-box blue">
          <!-- <i class="ri-discuss-line icon"></i> -->
          <img src="assets/img/pngtree-shopping-cart-icon-design-png-image_4362857.png" alt="" width="100px" height="100px">
          <h3><?= $row['nama'] ?></h3>
          <p><?= $row['deskripsi'] ?></p>
          <a href="view_produk.php?id=<?= $row['id'] ?>" class="btn btn-warning"><span>Detail</span> <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    <?php } ?>

  </div>

</div>

</section>
<?php require_once 'footer.php'; ?>