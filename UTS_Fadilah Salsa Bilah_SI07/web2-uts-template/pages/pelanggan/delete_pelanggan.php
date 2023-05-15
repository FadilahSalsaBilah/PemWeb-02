<?php 
require_once '../../database/dbkoneksi.php';
$id = $_GET['iddel'];
// $id = '1';
$sql = "DELETE FROM pelanggan WHERE id = ?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$id]);
 ?>