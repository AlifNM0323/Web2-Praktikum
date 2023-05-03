<?php
require_once 'dbkoneksi.php';
?>
<form method="POST" action="proses_pesanan.php">
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-calendar-check-o"></i>
                    </div>
                </div>
                <input id="tanggal" name="tanggal" type="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                    </div>
                </div>
                <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
        <div class="col-8">
            <textarea id="alamat_pemesan" name="alamat_pemesan" cols="40" rows="1" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="no_hp" class="col-4 col-form-label">No. Handphone</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-phone"></i>
                    </div>
                </div>
                <input id="no_hp" name="no_hp" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <input id="email" name="email" type="email" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-cart-plus"></i>
                    </div>
                </div>
                <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
        <div class="col-8">
            <textarea id="deskripsi" name="deskripsi" cols="40" rows="1" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="produk_id" class="col-4 col-form-label">Produk ID</label>
        <div class="col-8">
            <?php
            $sqlkartu_id = "SELECT * FROM produk";
            $rskartu_id = $dbh->query($sqlkartu_id);
            ?>
            <select id="produk_id" name="produk_id" class="custom-select">
                <?php
                foreach ($rskartu_id as $rowkartu_id) {
                ?>
                    <option value="<?= $rowkartu_id['id'] ?>"><?= $rowkartu_id['nama'] ?></option>
                <?php
                }
                ?>

            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary" value="submit">Submit</button>
        </div>
    </div>
</form>