<?php

class balok
{
    public $panjang, $tinggi, $lebar;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->tinggi = $l;
        $this->lebar = $t;

    }

    public function getLuas()
    {
        $h = 2 * (($this->panjang * $this->lebar) +
        ($this->panjang * $this->tinggi) +
        ($this->lebar * $this->tinggi));
        echo "Ini Luas Balok = $h";
    }


    public function getVolume()
    {
        $v = $this->panjang * $this->lebar * $this->tinggi;
        echo "Ini Volume Balok = $v";
    }
}

$objekBalok = new Balok(60, 99, 33);
echo $objekBalok->getLuas();
echo "<br>";
echo $objekBalok->getVolume();
?>

   

    