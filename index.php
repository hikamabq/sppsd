<?php 
require_once('db.php');


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ";
    $tampilkan = mysqli_query($con, $query);

    if(mysqli_num_rows($tampilkan)){
        $cekData = mysqli_fetch_assoc($tampilkan);
        $_SESSION['id'] = $cekData['id'];
        if($cekData['role'] == 0){
            header('Location: admin/index.php');
        }elseif($cekData['role'] == 1){
            header('Location: petugas/index.php');
        }else{
            header('Location: siswa/');
        }
    }else{
        echo "data kosong";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        .kiri, .kanan{
            float: left;
        }
        .kiri{
            width: 70%;
            height: 100vh;
            background: #0074b9;
            padding: 10rem 3rem 0 3rem;
            line-height: 30px;
            color: #fff;
        }
        .kanan{
            width: 30%;
            padding: 5rem 3rem 0 3rem;
        }
        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 0.3rem;
            border: 1px solid #aaa;
        }
        input[type=submit]{
            background: #0074b9;
            border: 1px solid #0074b9;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="kiri">
            <h1>Selamat datang di aplikasi SPP berbasis web</h1>
            <br>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, unde maiores aliquid optio itaque amet consectetur sequi similique cupiditate ut. Sed impedit minima voluptate quam eius quidem blanditiis rem porro?
            </p>
        </div>
        <div class="kanan">
            <h3>SMK NUSANTARA INDONESIA</h3>
            <br>
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username..." required>
                <input type="password" name="password" placeholder="Password..." required>
                <input type="submit" name="login" value="Login">
            </form>
        </div>
    </div>
</body>
</html>