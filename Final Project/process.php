<?php 
require_once('koneksi.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['nama']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Mohon diisi tabelnya");
       }
       else
       {
            $query="SELECT * FROM customer where nama='".$_POST['nama']."' and password='".$_POST['password']."'";
            $result=mysqli_query($db,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['nama'];
                header("location:akun.php");
            }
            else
            {
                header("location:login.php?Invalid= Mohon masukkan user dan password yang benar ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>