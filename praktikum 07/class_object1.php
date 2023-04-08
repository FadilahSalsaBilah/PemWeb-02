<?php
class Mamalia
{
    //properti class mamalia
    public $namaHewan;
    public $warna;
    public $habitat;
    public $makanan;

    function bisaMenyusui()
    {
        return "$this->namaHewan ini bisa menyusui !";
    }

    function berjalan()
    {
        return "$this->namaHewan ini bisa berjalan !";
    }
}
$objek = new Mamalia;
$objek -> namaHewan = "Monyet";
$objek -> warna = "Coklat";
$objek -> Habitat = "Hutan";
$objek -> Makanan = "Pisang/buah-buahan";
echo $objek->bisaMenyusui();