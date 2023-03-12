<?php 

    // buat looping

    for ($i=1; $i <= 10 ; $i++) { 
        echo $i . "<br>";
    }

    //Buat looping pertama

    echo "<h3> Looping Pertama </h3>";

    for ($i = 2; $i <=20 ; $i += 2) { 
        echo $i . " - I love PHP" . "<br>";
    }

    //buat looping kedua

    echo "<h3> Looping kedua </h3>";

    for ($i = 20; $i >= 2; $i -= 2) { 
        echo $i . " - I love PHP" . "<br>";
    }

    //Buat array loop

    $buah = ["Mangga", "Apel", "Anggur"];

    foreach ($buah as $u){
        echo $u . "<br>"; 
    }

?>