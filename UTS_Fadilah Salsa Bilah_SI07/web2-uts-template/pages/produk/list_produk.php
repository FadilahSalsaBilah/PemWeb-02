<?php 
    require_once '../../database/dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM motor";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Motor</th>
                    <th>CC</th>
                    <th>Tipe Motor</th>
                    <th>Harga</th>
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['nama_motor']?></td>
                        <td><?=$row['cc']?></td>
                        <td><?=$row['tipe_motor_id']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['merk_id']?></td>
                        <td><?=$row['stok']?></td>

                        <td>
<a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_produk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="../../procces/produk/delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama_motor']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
