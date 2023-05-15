<?php 
require_once '../../database/dbkoneksi.php';
// var_dump($_POST['idedit']);die;
?>
<?php 
   $_nama_motor = $_POST['nama_motor'];
   $_cc = $_POST['cc'];
   $_tipe_motor_id = $_POST['tipe_motor_id'];
   $_harga = $_POST['harga'];
   $_merk_id = $_POST['merk_id'];
   $_stok = $_POST['stok'];


   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama_motor; // ? 1
   $ar_data[]=$_cc; // ? 2
   $ar_data[]=$_harga;// 3
   $ar_data[]=$_tipe_motor_id;
   $ar_data[]=$_merk_id;
   $ar_data[]=$_stok; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO motor (nama_motor,cc,harga,tipe_motor_id,merk_id,
    stok) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE motor SET nama_motor=?,cc=?,harga=?,tipe_motor_id=?,
    merk_id=?,stok=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:../../pages/produk/list_produk.php');
?>