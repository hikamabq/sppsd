<?php 
require_once('layouts/header.php');
require_once('db.php');

$query = "SELECT 
            siswa.id as id, 
            siswa.nama as nama,
            siswa.alamat as alamat,
            kelas.nama_kelas as kelas  
        FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id";
$tampilkan = mysqli_query($con, $query);

?>

<div class="container">
    <h1>Data Siswa</h1>
    <br>
    <p>
        <a href="tambah_siswa.php" class="btn btn-hijau">Tambah Data</a>
    </p>
    <br>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Nama siswa</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach($tampilkan as $data): ?>
            <tr>
                <td align="center" width="50px"><?= $no++; ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['kelas'] ?></td>
                <td align="center" width="150px">
                    <a href="edit_siswa.php?id=<?= $data['id'] ?>" class="btn btn-kuning">Edit</a>
                    <a href="hapus_siswa.php?id=<?= $data['id'] ?>" class="btn btn-merah">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php 
require_once('layouts/footer.php');
?>