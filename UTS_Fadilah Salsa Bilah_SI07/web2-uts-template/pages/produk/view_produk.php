<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pelanggan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
require_once '../../database/dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM motor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Nama Motor</td><td><?=$row['nama_motor']?></td></tr>
        <tr>   <td>CC</td><td><?=$row['cc']?></td></tr>
        <tr>   <td>Tipe Motor</td><td><?=$row['tipe_motor_id']?></td></tr>
        <tr>   <td>Harga </td><td><?=$row['harga']?></td></tr>
        <tr>   <td>Merk</td><td><?=$row['merk_id']?></td></tr>
        <tr>   <td>Stok</td><td><?=$row['stok']?></td></tr>
    </tbody>
</table>
</body>
</html>