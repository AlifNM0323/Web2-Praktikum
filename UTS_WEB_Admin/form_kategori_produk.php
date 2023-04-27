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