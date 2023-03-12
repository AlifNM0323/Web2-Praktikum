<?php
// inisialisasi variabel untuk setiap jawaban checkbox
$jawabanA = "B"; // nilai jawaban checkbox A
$jawabanB = "C"; // nilai jawaban checkbox B
$jawabanC = "A"; // nilai jawaban checkbox C

// inisialisasi variabel skor
$skor = 0;

// menentukan skor untuk setiap jawaban yang benar
if ($jawabanA == "B") {
  $skor += 10;
}

if ($jawabanB == "C") {
  $skor += 20;
}

if ($jawabanC == "A") {
  $skor += 30;
}

// menentukan status berdasarkan skor
if ($skor >= 50 && $skor <= 70) {
  $status = "Cukup";
} elseif ($skor >= 80 && $skor <= 100) {
  $status = "Baik";
} elseif ($skor >= 110 && $skor <= 150) {
  $status = "Sangat Baik";
} else {
  $status = "Kurang";
}

// menampilkan hasil skor dan status
echo "Skor Anda: " . $skor . "<br>";
echo "Status: " . $status;
?>


<?php
// inisialisasi variabel untuk setiap jawaban checkbox
$jawabanA = "B"; // nilai jawaban checkbox A
$jawabanB = "C"; // nilai jawaban checkbox B
$jawabanC = "A"; // nilai jawaban checkbox C

// inisialisasi variabel skor
$skor = 0;

// menentukan skor untuk setiap jawaban yang benar
if ($jawabanA == "B") {
  $skor += 10;
}

if ($jawabanB == "C") {
  $skor += 20;
}

if ($jawabanC == "A") {
  $skor += 30;
}

// menentukan status berdasarkan skor
if ($skor >= 50 && $skor <= 70) {
  $status = "Cukup";
} elseif ($skor >= 80 && $skor <= 100) {
  $status = "Baik";
} elseif ($skor >= 110 && $skor <= 150) {
  $status = "Sangat Baik";
} else {
  $status = "Kurang";
}

// menampilkan hasil skor dan status
echo "Skor Anda: " . $skor . "<br>";
echo "Status: " . $status;
?>


