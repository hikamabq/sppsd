<?php 
require_once('layouts/header.php');
require_once('../db.php');


$query = "SELECT * FROM siswa WHERE id = ".$_SESSION['id']."";
$tampilkan = mysqli_query($con, $query);
$dataProfil = mysqli_fetch_assoc($tampilkan);

?>

<div class="container">
    <h1>Profil siswa</h1>
    <br>
    nama : <?= $dataProfil['username'] ?>
    password : <?= $dataProfil['password'] ?>
</div>


<?php 
require_once('layouts/footer.php');
?>