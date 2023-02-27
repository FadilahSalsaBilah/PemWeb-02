<?php
$profileArray = [
    "nama" => "fadilah",
    "semester" => 2
];

echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

$profileMultiArray = [
    [
        "nama" => "fadilah",
        "semester" => 2
    ], [
        "nama" => "ali",
        "semester" => 4
    ]
    ];

foreach($profileMultiArray as $profile) {
        echo $profile['nama'] . "<br>";
        echo $profile['semester'] . "<br>";
    }