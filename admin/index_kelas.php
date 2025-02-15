<?php 
require_once('layouts/header.php');
require_once('db.php');

$query = "SELECT * FROM kelas";
$tampilkan = mysqli_query($con, $query);

?>

<div class="container">
    <h1>Data Kelas</h1>
    <br>
    <p>
        <a href="tambah_kelas.php" class="btn btn-hijau">Tambah Data</a>
    </p>
    <br>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach($tampilkan as $data): ?>
            <tr>
                <td align="center" width="50px"><?= $no++; ?></td>
                <td><?= $data['nama_kelas'] ?></td>
                <td align="center" width="150px">
                    <a href="edit_kelas.php?id=<?= $data['id'] ?>" class="btn btn-kuning">Edit</a>
                    <a href="hapus_kelas.php?id=<?= $data['id'] ?>" class="btn btn-merah">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php 
require_once('layouts/footer.php');
?>