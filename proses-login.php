<?php
    $host = "localhost";
    $usern = "root";
    $passw = "toor";
    $database = "pemograman3";
    
    $con = mysqli_connect($host,$usern,$passw,$database);

    if (isset($_POST['login'])) {
        $usern = mysqli_real_escape_string($con,$_POST['username']);

        $pass = mysqli_real_escape_string($con,md5($_POST['password']));

        $query = "select * from tbl_user where username='$usern' AND password='$pass'";

        $execute = mysqli_query($con, $query);

        $check_user = mysqli_num_rows($execute);

        if($check_user > 0) {
            $_SESSION['usern']=$usern;
            //$_SESSION['waktu']=date("Y-m-d H:i:s");

            header('location: pos.php');
        } else {
            echo "Gagal bos";
        }
    } else {
        echo "Gagal login";
    }
?>