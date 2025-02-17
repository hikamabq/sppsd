<?php 
require_once('layouts/header.php');
require_once('../db.php');


if(isset($_POST['kirim'])){
    $petugas = $_POST['nama_petugas'];
    $query = "INSERT INTO petugas (nama_petugas) VALUES ('".$petugas."')";
    $tampilkan = mysqli_query($con, $query);
    header('Location: index_petugas.php');
}

?>

<div class="container">
    <h1>Tambah Data Petugas</h1>
    <form action="" method="POST">
        <label for="">Nama petugas</label>
        <input type="text" name="nama_petugas">
        <br>
        <br>
        <p>
            <a href="index_petugas.php" class="btn btn-kuning">Kembali</a>
            <button type="submit" name="kirim" class="btn btn-hijau">Kirim</button>
        </p>
    </form>
</div>


<?php 
require_once('layouts/footer.php');
?>