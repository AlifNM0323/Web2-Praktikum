<?php
require_once 'dbkoneksi.php';

//Cek Update Atau ga
if (!empty($_GET['idedit'])) {
    $edit = $_GET['idedit'];

    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$edit]);
    $row = $st->fetch();
} else {
    $row = [];
}

?>
<div class="container">
    <br>
    <h3 align="center">Create Data Pelanggan</h3>
    <hr>
    <form method="POST" action="proses_pelanggan.php">
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label"><b>Kode Barang</b></label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-anchor"></i>
                        </div>
                    </div>
                    <input id="kode" name="kode" type="text" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label"><b>Nama Pelanggan</b></label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                    </div>
                    <input id="nama" name="nama" type="text" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jk" class="col-4 col-form-label"><b>Jenis Kelamin</b></label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-o-left"></i>
                        </div>
                    </div>
                    <input id="jk" name="jk" value="L" type="radio" class="form-control">Laki-Laki
                    <input id="jk" name="jk" value="P" type="radio" class="form-control">Perempuan

                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label"><b>Tempat Lahir</b></label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-up"></i>
                        </div>
                    </div>
                    <input id="tmp_lahir" name="tmp_lahir" value="" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label"><b>Tanggal Lahir</b></label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                    <input id="tgl_lahir" name="tgl_lahir" value="" type="date" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label"><b>Email</b></label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                    <input id="email" name="email" value="" type="emsil" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="kartu_id" class="col-4 col-form-label"><b>Kartu</b></label>
            <div class="col-8">
                <?php
                $sqlkartu_id = "SELECT * FROM kartu";
                $rskartu_id = $dbh->query($sqlkartu_id);
                ?>
                <select id="kartu_id" name="kartu_id" class="custom-select">
                    <?php
                    foreach ($rskartu_id as $rowkartu_id) {
                    ?>
                        <option value="<?= $rowkartu_id['id'] ?>"><?= $rowkartu_id['nama'] ?></option>
                    <?php
                    }
                    ?>
                    <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

                </select>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <?php 

                    $button = (empty($edit)) ? "Simpan" : "Update";
                
                ?>
                <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php echo $button; ?>" />
                <input type="hidden" name="idedit" value="<?php echo $edit ; ?>">
            </div>
        </div>
    </form>
</div>