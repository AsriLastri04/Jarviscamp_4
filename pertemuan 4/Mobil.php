<?php
// class
class Mobil {

    //constructor
    public function__construct()
    {
        echo "Ini konstruktor";
    }
    // atribut atau property
    public $roda = 4;
    public $color = "purple";

    //method
    public function jalan ()
    {
        echo "Mobil Berjalan    \n";
    }
}
// objek
$pajero = new Mobil;
$pajero->jalan();
?>