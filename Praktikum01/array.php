<?php

    // Buat Array

    $animals = ["Burung", "Kucing", "Nyamuk", "Singa"];
    echo $animals[1] . "<br>";

    echo $animals[3] . "<br>";

    foreach($animals as $animal) {
        echo $animal . "<br>";
    };

    //Array Asosiative

    $mahasiswa = ["nama"=>"Alif", "jurusan"=>"Teknik Informatika", "semester"=>2];

    echo $mahasiswa["jurusan"] . "<br>";

    //nampilin semua data

    foreach($mahasiswa as $key => $value){
        echo "key :" .$key . "value" . $value . "<br>";
    }

    // Buat Array Multidimensi

    $dosen = [
        ["Pak Rojul", "Web"],
        ["Pak reza", "DDP"],
        ["Pak Lukman", "OS"]
    ];

    echo $dosen[2][0];


?>