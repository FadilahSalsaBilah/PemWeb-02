<?php

$arrayBuah = ["Jeruk","Manggis","Apel","lengkeng","strawberry"];

//mengurutkan array
sort($arrayBuah);

//menghapus value array yang paling akhir
array_pop($arrayBuah);

//menghapus variabel ataupun value array
unset($arrayBuah[0]);

//menambahkan value array di paling akhir
array_push($arrayBuah, "Anggur");

//menghapus data array paling awal
array_shift($arrayBuah);

//menambahkan value array di paling awal
array_unshift($arrayBuah, "Semangka");

//mengubah data/value array dengan spesifik key/index
$arrayBuah[2] = "Pir";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah ;
}