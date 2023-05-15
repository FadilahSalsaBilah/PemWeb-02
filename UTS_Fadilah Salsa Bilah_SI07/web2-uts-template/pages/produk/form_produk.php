<?php 
require_once '../../database/dbkoneksi.php';
?>
            
<form method="POST" action="../../procces/produk/proses_produk.php">
   <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Nama Motor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="nama_motor" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">CC</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="cc" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="harga" value=""
        type="text" class="form-control">
      </div>
    </div>
  </div>
 
    <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="min_stok" name="stok" 
        value=""
        type="text" class="form-control">
      </div>
    </div>
        <?php 
            $sqltipe = "SELECT * FROM tipe_motor ";
            $rstipe = $dbh->query($sqltipe);
        ?>
      <select id="jenis" name="tipe_motor_id" class="custom-select">
          <?php 
            foreach($rstipe as $rowtipe){
         ?>
            <option value="<?=$rowtipe['id']?>"><?=$rowtipe['tipe_motor']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
      <?php 
            $sqlmerk = "SELECT * FROM merk";
            $rsmerk = $dbh->query($sqlmerk);
        ?>
      <select id="jenis" name="merk_id" class="custom-select">
          <?php 
            foreach($rsmerk as $rowmerk){
         ?>
            <option value="<?=$rowmerk['id']?>"><?=$rowmerk['nama_merk']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
