<?php

require_once 'header.php';
require_once 'sidebar.php';

?>

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum 03</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Mahasiswa</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            // if (isset($_POST['submit'])) {

                            $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
                            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                            $jk = isset($_POST['jk']) ? $_POST['jk'] : '';
                            $skill = isset($_POST['skill']) ? $_POST['skill'] : '';
                            $email = isset($_POST['email']) ? $_POST['email'] : '';
                            $ps = isset($_POST['ps']) ? $_POST['ps'] : '';
                            $td = isset($_POST['td']) ? $_POST['td'] : '';
                            $skor = 0;
                            $hasil = "";
                            $ak = "";
                            $total_nilai = "";





                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $skill = $_POST['skill'];
                                $total_nilai = 0;
                                foreach ($skill as $value) {
                                    switch ($value) {
                                        case 'HTML':
                                            $total_nilai += 10;
                                            break;
                                        case 'CSS':
                                            $total_nilai += 10;
                                            break;
                                        case 'Javascript':
                                            $total_nilai += 20;
                                            break;
                                        case 'RWD Bootstrap':
                                            $total_nilai += 20;
                                            break;
                                        case 'PHP':
                                            $total_nilai += 30;
                                            break;
                                        case 'Python':
                                            $total_nilai += 30;
                                            break;
                                        case 'Java':
                                            $total_nilai += 50;
                                            break;
                                    }
                                }
                                // echo "Total nilai yang dipilih adalah: " . $total_nilai;
                                if ($total_nilai >= 100) {
                                    $ak = "Sangat Baik";
                                } else if ($total_nilai >= 60) {
                                    $ak = "Baik";
                                } else if ($total_nilai >= 40) {
                                    $ak = "Cukup";
                                } else if ($total_nilai >= 0) {
                                    $ak = "Kurang";
                                } else {
                                    $ak = "Tidak Memadai";
                                }
                            }

                            //     echo "<br> NIM : " . $nim;
                            //     echo "<br> Nama Lengkap : " . $nama;
                            //     echo "<br> Jenis Kelamin : " . $jk;
                            //     echo "<br> Program Studi : " . $ps;
                            //     echo "<br> Skill WEB & Programing : ";

                            //  foreach ($skill as $s) {
                            //  echo $s . " , ";
                            //  }
                            //     echo "<br> Tempat Domisili : " . $td;
                            //     echo "<br> Skor Anda : " . $total_nilai;
                            //     echo "<br> Kategori Skill : " . $ak;
                            //     echo "<br> Email : " . $email;

                            // }
                            // }

                            ?>



                            <form method="POST" action="praktikum03.php">
                                <div class="form-group row">
                                    <label for="nim" class="col-4 col-form-label">NIM</label>
                                    <div class="col-8">
                                        <input id="nim" name="nim" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                                            <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ps" class="col-4 col-form-label">Program Studi</label>
                                    <div class="col-8">
                                        <select id="ps" name="ps" class="custom-select">
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Bisnis Digital">Bisnis Digital</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Skill Web dan Programing</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                                            <label for="skill[]_0" class="custom-control-label">HTML</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                                            <label for="skill[]_1" class="custom-control-label">CSS</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="Javascript">
                                            <label for="skill[]_2" class="custom-control-label">Javascript</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                                            <label for="skill[]_3" class="custom-control-label">RWD Bootstrap</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                                            <label for="skill[]_4" class="custom-control-label">PHP</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                                            <label for="skill[]_5" class="custom-control-label">Python</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                                            <label for="skill[]_6" class="custom-control-label">Java</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="td" class="col-4 col-form-label">Tempat Domisili</label>
                                    <div class="col-8">
                                        <select id="td" name="td" class="custom-select">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Bogor">Bogor</option>
                                            <option value="Depok">Depok</option>
                                            <option value="Tangerang">Tangerang</option>
                                            <option value="Bekasi">Bekasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <input id="email" name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <br>



                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum 03</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Mahasiswa</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">NIM</th>
                                        <th scope="col"> : </th>
                                        <th scope="col"> <?php echo $nim; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col"> : </th>
                                        <th scope="col"> <?php echo $nama; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col"> : </th>
                                        <th scope="col"> <?php echo $jk; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Program Studi</th>
                                        <th scope="col"> : </th>
                                        <th scope="col"> <?php echo $ps; ?></th>
                                    </tr>
                                    <tr>


                                        <th scope="col">Skill WEB & Programing</th>
                                        <th scope="col"> : </th>
                                        <?php if (!empty($skill) && is_array($skill))
                                            foreach ($skill as $s) : ?>
                                            <th scope="col"> <?php echo $s . " , "; ?> </th>
                                        <?php endforeach; ?>
                                    </tr>
                                    <tr>
                                        <th scope="col">Tempat Domisili</th>
                                        <th scope="col"> : </th>
                                        <th scope="col"> <?php echo $td; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Score Anda</th>
                                        <th scope="col"> : </th>
                                        <th scope="col"> <?php echo $total_nilai; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Kategori Skill</th>
                                        <th scope="col"> : </th>
                                        <th scope="col"> <?php echo $ak; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col"> : </th>
                                        <th scope="col"> <?php echo $email; ?></th>
                                    </tr>
                                </thead>

                            </table>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php require_once 'footer.php'; ?>