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
    <h1>Data Siswa</h1>
    <div class="fCountainer">
    <button><a href="form_simpan.php">Tambah Data</a><br></button>
    <table border="2" width="100%">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $sql=$pdo->prepare("SELECT*FROM siswa");
        $sql->execute();

        while($data=$sql->fetch()){
            echo"<tr>";
            echo"<td>".$data['nis']."</td>";
            echo"<td>".$data['nama']."</td>";
            echo"<td>".$data['jenis_kelamin']."</td>";
            echo"<td>".$data['telp']."</td>";
            echo"<td>".$data['alamat']."</td>";
            echo"<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
            echo"<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
            echo"<tr>";
        }
        ?>
    </table>
    </div>

    <footer class="footer">
    <div class="container">
    <p>Copyright &copy; 2024 - UAS_Algoritma • SALMAN.</p>
    <nav>
        <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="https://www.instagram.com/salmannkih/">Tentang</a></li>
        <li><a href="https://mailto:salmannkih@gmail.com">Layanan</a></li>
        <li><a href="https://wa.me/message/3IMIGWFUSWQ4J1">Kontak</a></li>
        </ul>
    </nav>
    </div>
</footer>
</body>
</html>