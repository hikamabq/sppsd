<?php 
require_once('../db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM petugas WHERE id = ".$id." ";
    $tampilkan = mysqli_query($con, $query);
    header('Location: index_petugas.php');
}

?>