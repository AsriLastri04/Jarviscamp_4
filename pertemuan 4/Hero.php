<?php
//paradigma prosedural
    $hero1_name ='Alucard';
    $hero1_hp = 4000;
    $hero1_defanse = 120;
    $hero1_damage = 320;
    $hero1_mana = 0;

    $hero2_name ='Akai';
    $hero2_hp = 4190;
    $hero2_defanse = 300;
    $hero2_damage = 50;
    $hero2_mana = 2;
//paradigma oop
class Hero{
    public $name;
    Public $hp;
    public $defanse;
    public $damage;
    public $mana;
//method
//konstruktor
    public function __construct($name, $hp, $defanse, $damage, $mana){
        $this->name = $name;
        $this->hp = $hp;
        $this->defanse = $defanse;
        $this->damage = $damage;
        $this->mana = $mana;
    }
    public function attack($target)
    {
        $target->hp = $target->hp - ($this->damage - $target->defanse);
        echo "$this->name menyerang $target->name <br>";
        echo "HP $target->name saat ini adalah $target->hp";
    }
}

$hero1 = new Hero ("Alucard",4000, 120, 320, 0);
$hero2 = new Hero ("Akai", 4190, 300, 50, 2);

// memanggil method 
$hero1->attack($hero2);
