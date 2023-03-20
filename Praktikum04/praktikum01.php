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
                    <h1>Praktikum 01</h1>
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
                            <h3 class="card-title">Data Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri</h3>

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

                            $nilai1 = ["id" => 1, "nim" => "01401", "uts" => 80, "uas" => 85, "tugas" => 89];
                            $nilai2 = ["id" => 2, "nim" => "01131", "uts" => 85, "uas" => 88, "tugas" => 89];
                            $nilai3 = ["id" => 3, "nim" => "01601", "uts" => 86, "uas" => 85, "tugas" => 89];
                            $nilai4 = ["id" => 4, "nim" => "08101", "uts" => 81, "uas" => 89, "tugas" => 89];


                            $kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

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
                                <table class="table" align="center">
                                    <thead class="thead-dark">
                                        <tr align="center">
                                            <th scope="col">No</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">UTS</th>
                                            <th scope="col">UAS</th>
                                            <th scope="col">Tugas</th>
                                            <th scope="col">Nilai Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($kumpulan_nilai as $nilai) : ?>



                                            <tr align="center">
                                                <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                                                <td><?= $nilai["id"]; ?></td>
                                                <td><?= $nilai["nim"]; ?></td>
                                                <td><?= $nilai["uts"]; ?></td>
                                                <td><?= $nilai["uas"]; ?></td>
                                                <td><?= $nilai["tugas"]; ?></td>
                                                <td><?= number_format($nilai_akhir, 2, ",", "."); ?></td>

                                            </tr>

                                        <?php endforeach; ?>

                                    </tbody>
                                </table> 
                                </div>
                               


                                <!-- Optional JavaScript; choose one of the two! -->

                                <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                                <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


                            </body>

                            </html>
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

<?php require_once 'footer.php'; ?>