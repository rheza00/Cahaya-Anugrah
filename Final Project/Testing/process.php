<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:index.php?Empty= Mohon diisi tabelnya");
       }
       else
       {
            $query="SELECT * FROM useradmin2 where UName='".$_POST['UName']."' and Pass='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:wellcome.php");
            }
            else
            {
                header("location:index.php?Invalid= Mohon masukkan user dan password yang benar ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>