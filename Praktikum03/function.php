<?php 

    //Buat funtion

    function hitungUmur($thn_lahir) {
        // Menghitung selisih antara tahun lahir dan tahun sekarang
        $thn_sekarang = 2023;
        // Menghitung umur
        $umur = $thn_sekarang - $thn_lahir;
        // Mengembalikan nilai umur
        return $umur;
    }

    //panggil fungsi
    echo hitungUmur(2001);
    
?>