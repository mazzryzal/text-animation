<?php
//load file koneksi.php
include "koneksi.php";

//ambil data yang dikirim dari form
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

//proses simpan ke database
$sql = $pdo->prepare("INSERT INTO siswa(nis, nama, jenis_kelamin, telp, alamat)VALUES(:nis,:nama,:jk,:telp,:alamat)");
$sql->bindParam(':nis',$nis);
    $sql->bindParam(':nama',$nama);
    $sql->bindParam(':jk',$jenis_kelamin);
    $sql->bindParam(':telp',$telp);
    $sql->bindParam(':alamat',$alamat);
    $sql->execute();//eksekusi query insert

    if($sql){//cek jika proses simpan ke databse sukses atau tidak
        //jika sukses lakukan:
        header("location: index.php");//Redirect ke halaman index.php
    }else{
        //jika gagal lakukan :
        echo"Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke data base.";
        echo"<br><a href='form_simpanan.php'>Kembali Ke Form</a>";
}