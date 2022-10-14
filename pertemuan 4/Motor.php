<?php
class Motor{
    public $merk;
    public $warna;
    public $bensin;
    public $platnomor;
    public $jenis;

    public function __construct ($merk, $warna, $bensin, $platnomor, $jenis) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->bensin = $bensin;
        $this->platnomor = $platnomor;
        $this->jenis = $jenis; 
    } 
    public function jalan($jarak){
        $this->bensin = $this->bensin - ($jarak / 10);
        echo "jarak tempuh dari jakarta ke depok adalah " . $jarak / 1000 . "  km<br>" ;
        echo "sisa bensin saat ini adalah " . $this->bensin / 1000 . " liter <br>";

    }

}
$Motor1 = new Motor ("Yamaha", "Purple", 2000, "SLR040503", "matic");
echo "bensin awal " . $Motor1->bensin / 1000 . "  liter <br>";
$Motor1->jalan(10000);