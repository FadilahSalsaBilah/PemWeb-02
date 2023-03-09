<?php
for($i = 0;$i <= 10;$i++){
    echo "Hello SI07, ini looping ke-$i <br>";
}
echo "<br>";

$array = ['kucing','anjing','kuda','kapibara'];
//count()berfungsi untuk menghitung panjang array
for ($i = 0;$i < count($array);$i++) {
    echo $array[$i] . "<br>";
}