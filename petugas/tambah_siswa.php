<?php 
require_once('layouts/header.php');
require_once('../db.php');


$query = "SELECT * FROM kelas";
$kelas = mysqli_query($con, $query);

if(isset($_POST['kirim'])){
    $siswa = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $id_kelas = $_POST['id_kelas'];
    $query = "INSERT INTO siswa (nama, alamat, id_kelas) VALUES ('".$siswa."', '".$alamat."', ".$id_kelas.")";
    $save = mysqli_query($con, $query);
    header('Location: index_siswa.php');
}

?>

<div class="container">
    <h1>Tambah Data Siswa</h1>
    <form action="" method="POST">
        <label for="">Nama Siswa</label>
        <input type="text" name="nama">
        <label for="">Alamat</label>
        <input type="text" name="alamat">
        <label for="">Kelas</label>
        <select name="id_kelas" id="">
            <?php foreach($kelas as $data): ?>
            <option value="<?= $data['id'] ?>"><?= $data['nama_kelas'] ?></option>
            <?php endforeach; ?>
        </select>

        <br>
        <br>
        <p>
            <a href="index_siswa.php" class="btn btn-kuning">Kembali</a>
            <button type="submit" name="kirim" class="btn btn-hijau">Kirim</button>
        </p>
    </form>
</div>


<?php 
require_once('layouts/footer.php');
?>