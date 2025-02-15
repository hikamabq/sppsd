<?php 
require_once('layouts/header.php');
require_once('db.php');

if(isset($_POST['kirim'])){
    $kelas = $_POST['nama_kelas'];
    $query = "INSERT INTO kelas (nama_kelas) VALUES ('".$kelas."')";
    $tampilkan = mysqli_query($con, $query);
    header('Location: index_kelas.php');
}

?>

<div class="container">
    <h1>Tambah Data Kelas</h1>
    <form action="" method="POST">
        <label for="">Nama Kelas</label>
        <input type="text" name="nama_kelas">
        <br>
        <br>
        <p>
            <a href="index_kelas.php" class="btn btn-kuning">Kembali</a>
            <button type="submit" name="kirim" class="btn btn-hijau">Kirim</button>
        </p>
    </form>
</div>


<?php 
require_once('layouts/footer.php');
?>