<?php

$customer = isset($_POST['customer']) ? $_POST['customer'] : '';
$produk = isset($_POST['produk']) ? $_POST['produk'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

// $customer = $_POST["customer"];
// $produk = $_POST["produk"];
// $jumlah = $_POST["jumlah"];

// $produk_0 = 4200000;
// $produk_1 = 3100000;
// $produk_2 = 3800000;

$total;

if ($produk == "TV") {
  $total = 4200000 * $jumlah;
} elseif ($produk == "Kulkas") {
  $total = 3100000 * $jumlah;
} elseif ($produk == "Mesin Cuci") {
  $total = 3800000 * $jumlah;
} else {
  $total = "-";
}



// if (isset($a)) 
// if (isset($produk_0)) {
//     $total = ((int) 4200000 * (int)$jumlah);
// }elseif (isset($produk_1)){
//     $total = ((int) 3100000 * (int)$jumlah);
// }elseif (isset($produk_2)){
//     $total = ((int) 3800000 * (int)$jumlah);
// }else{
//     $total = 0;
// }

// $val = ((int)$oldval + (int)$val);

?>


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
  <div class="container">
    <br>
  <h5 class="btn btn-primary">-------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h5>

    <h2>Daftar Belanja</h2>

    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pusat Pembelanjaan Allon Store Market</h5>
            <form method="POST" action="form_belanja.php">
              <div class="form-group row">
                <label for="customer" class="col-4 col-form-label">Nama Customer</label>
                <div class="col-8">
                  <input id="customer" name="customer" placeholder="nama custumer" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4">Pilihan Produk</label>
                <div class="col-8">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                    <label for="produk_0" class="custom-control-label">TV</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                  <input id="jumlah" name="jumlah" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="btn btn-primary">Daftar Harga Allon Store Masket Electronic</h5>
            <p class="card-text">TV : Rp. 4.200.000,00</p>
            <p class="card-text">Kulkas : Rp. 3.100.000,00</p>
            <p class="card-text">Mesin Cuci : Rp. 3.800.000,00</p>
            <h5 class="btn btn-primary">Harga Dapat Berubah Setiap Saat</h5>

          </div>
        </div>
      </div>
    </div>
    <br><br>

    <table class="table table-hover col-sm-6">
  <thead>
    <tr>
      <th scope="col">Nama Customer</th>
      <th> : <?php echo $customer; ?></th>
    </tr>
    <tr>
      <th scope="col">Pilihan Produk</th>
      <th> : <?php echo $produk; ?></th>
    </tr>
    <tr>
      <th scope="col">Jumlah Barang</th>
      <th> : <?php echo $jumlah; ?></th>
    </tr>
    <tr>
      <th scope="col">Total Harga</th>
      <th> : <?php echo "Rp." . $total; ?></th>
    </tr>
  </thead>
  
</table>
   
  <h5 class="btn btn-primary">-------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h5>

  </div>
        
    
  
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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