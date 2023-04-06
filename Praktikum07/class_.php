<?php 

    class PersegiPanjang{
        public $panjang, $lebar;

        public function __construct($panjang, $lebar)
        {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        public function hitungLuas()
        {
            return $this->panjang * $this->lebar;
           
        }

        public function hitungKeliling()
        {
            return 2 * ($this->panjang + $this->lebar);
        }
    }

    // $s = new PersegiPanjang("56", "6");
    // $luas = $s->hitungLuas();
    // $keliling = $s->hitungkeliling();


    // echo "Luas" . $luas;
    // echo "Keliling" . $keliling;

?>