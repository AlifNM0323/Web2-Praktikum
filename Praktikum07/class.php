<?php 

    //buat class bmipasien
    class bmiPasien {
        //tulis properti dan method
        public $nama, $berat, $tinggi, $umur, $jk;

        //bikin contruk
        public function __construct($nama, $berat, $tinggi, $umur, $jk)
        {
            //akses property
            $this->nama = $nama;
            $this->berat = $berat;
            $this->tinggi = $tinggi;
            $this->umur = $umur;
            $this->jk = $jk;

        }

        //method hasil bmi
        public function hasilBmi(){
            $tinggi_m = $this->tinggi / 100;
            //rumus bmi
            $bmi = $this->berat / ($tinggi_m * $tinggi_m);
            return round($bmi);
        }

        //bikin method status
        public function statusBmi(){
            //simpen data bmi
            $bmi = $this->hasilBmi();
            //cek data
            if ($bmi < 18.5) {
                return "Kekurangan Berat Badan";
            } elseif( $bmi >= 18.5 && $bmi <= 24.9) {
                return "Normal (Ideal)";
            }elseif( $bmi >= 25 && $bmi <= 29.9) {
                return "Kelebihan Berat BAdan";

            }else{
                return "Kegemukan (Obesitas)";
            }
            
        }

    }

    //buat objek

    // $pasien = new bmiPAsien("Alif Nur Miftah", "60", "170", "19", "L");

    //tampilin

    // echo $pasien->nama . "<br>";
    // echo $pasien->berat . "<br>";
    // echo $pasien->hasilBmi() . "<br>";
    // echo $pasien->statusBmi() . "<br>";




?>