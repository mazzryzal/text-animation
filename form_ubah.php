<html>
    <head>
        <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>

    <?php
    include "koneksi.php";

    $id=$_GET['id'];

    $sql=$pdo->prepare("SELECT*FROM siswa WHERE id=:id");
    $sql->bindParam(':id',$id);
    $sql->execute();
    $data=$sql->fetch();
    ?>

    <form method="post"action="proses_ubah.php?id=<?php echo $id;?>">
    <table cellpadding="8">
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis"value="<?php echo $data['nis'];?>"></td>
</tr>
<tr>
    <td>Nama</td>
    <td><input type="text" name="nama"value="<?php echo $data['nama'];?>"></td>
</tr>
<tr>
    <td>Jenis_Kelamin</td>
    <td>
        <?php
        if($data['jenis_kelamin']=="Laki-laki"){
            echo"<input type='radio'name='jenis_kelamin'value='Laki-laki' checked='checked'>Laki-laki";
            echo"<input type='radio'name='jenis_kelamin'value='perempuan'>perempuan";
        }else{
            echo"<input type='radio' name='jenis_kelamin'value='Laki-laki'> Laki-laki";
            echo"<input type='radio' name='jenis_kelamin'value='perempuan' checked='checked'>perempuan";
        }
        ?>
        </td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp"value="<?php echo $data['telp'];?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"><?php echo $data['alamat'];?></textarea></td>
    </tr>
    </table>
    <hr>
    <input type="submit"value="Ubah">
    <a href="index.php"><input type="button"value="Batal"></a>
    </form>
    </body>