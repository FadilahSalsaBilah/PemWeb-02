<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe teks -->
        <label for="">Nama Mahasiswa :</label> <br>
        <input type="text" name="nama"> <br> <br>
        <!-- tipe radio -->
        <label for="">jenis kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">
           <label for="">Laki-Laki</label>
        <input type="radio" name="jenis kelamin" value="perempuan">
           <label for="">Perempuan</label> <br> <br>

        <!-- tipe checkbox -->
        <label for="">Hobi</label> <br>
        <input type="checkbox" name="hobi" value="traveling">
            <label for="">traveling</label> <br>
        <input type="checkbox" name="hobi" value="memasak">
            <label for="">memasak</label> <br>
        <input type="checkbox" name="hobi" value="membaca">
            <label for="">membaca</label><br><br>

        <!-- tipe number -->
        <label for="">NIM</label><br><br>
        <input type="number" name="nim"><br><br>

        <!-- select -->
        <label for="">Prodi</label><br>
        <select name="prodi" id="">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>

        <!-- button -->
        <button type="submit">Kirim</button>
        <button type="reset">Reset</button>
        
     

    </form>
</body>
</html>