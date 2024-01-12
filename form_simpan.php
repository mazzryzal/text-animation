<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>Tambah Data Siswa</h1>
    </div>
    <div class="table">
    <form method="post" action="proses_simpan.php">
        <table cellpadding="8">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis"></td>
</tr>
<tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
    <td>jenis kelamin</td>
    <td>
        <input type="radio" name="jenis_kelamin"value="Laki-laki">Laki-laki
        <input type="radio" name="jenis_kelamin"value="perempuan">perempuan
</td>
</tr>
<tr>
    <td>Telepon</td>
    <td><input type="text" name="telp"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
</tr>
</table>

<hr>
<input type="submit" value="simpan">
<a href="index.php"><input type="button"value="Batal"></a>
</form>
</div>
</div>
<footer class="footer">
    <div class="container">
    <p>Copyright &copy; 2024 - UAS_ALGORITHMA_SALMAN.</p>
    <nav>
        <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="https://www.instagram.com/salmannkih/">Tentang</a></li>
        <li><a href="#">Layanan</a></li>
        <li><a href="#">Kontak</a></li>
        </ul>
    </nav>
    </div>
</footer>
</body>
</html>