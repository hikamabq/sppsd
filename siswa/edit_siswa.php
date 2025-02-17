<?php 
require_once('layouts/header.php');
require_once('../db.php');


$query = "SELECT * FROM kelas";
$kelas = mysqli_query($con, $query);

$query = "SELECT * FROM siswa WHERE id = ".$_GET['id']."";
$tampilkan = mysqli_query($con, $query);
$dataEdit = mysqli_fetch_assoc($tampilkan);

if(isset($_POST['kirim'])){
    $siswa = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $id_kelas = $_POST['id_kelas'];
    $query = "UPDATE siswa SET nama = '".$siswa."', alamat='".$alamat."', id_kelas=".$id_kelas." WHERE id=".$_GET['id']."";
    $tampilkan = mysqli_query($con, $query);
    header('Location: index_siswa.php');
}

?>

<div class="container">
    <h1>Edit Data siswa</h1>
    <form action="" method="POST">
        <label for="">Nama siswa</label>
        <input type="text" name="nama" value="<?= $dataEdit['nama'] ?>">
        <label for="">Alamat</label>
        <input type="text" name="alamat" value="<?= $dataEdit['alamat'] ?>">
        <label for="">Kelas</label>
        <select name="id_kelas" id="">
            <?php foreach($kelas as $data): ?>
            <option value="<?= $data['id'] ?>" <?= ($dataEdit['id_kelas'] == $data['id'] ? 'selected' : '') ?>><?= $data['nama_kelas'] ?></option>
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