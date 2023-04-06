<?php
require_once '../../database/dbkoneksi.php';
$id = $_GET['iddel'];
$sql = "DELETE FROM pelanggan WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header("location:../../pages/pelanggan/list_pelanggan.php");

