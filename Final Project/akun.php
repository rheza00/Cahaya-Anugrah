<?php require "koneksi.php"; ?>
<?php

$query = "Select * from customer";
$result = mysqli_query($db, $query);
$customer = mysqli_fetch_array($result);
?>
<?php session_start();?>

<?php if($customer['gambar']!=null):?>
<img width="200" src="<?php echo $customer['gambar']?>"><br />
<?php echo ' Wellcome ' . $_SESSION['User'];?><br />
<?php echo $customer['no_telp']?><br /><br />
<h4>Informasi Produk</h4>
<?php echo $customer['gender']?><br />
<?php endif;?>

<?php
if(isset($_SESSION['User']))
{
    echo "<br>";
    echo $customer['tgl_lahir'];
    echo "<br>";
    echo $customer['no_telp'];
    echo "<br>";
    echo $customer['gender'];
    echo "<br>";
        echo $customer['alamat'];
    echo "<br>";
        echo $customer['email'];
    echo "<br>";
    echo '<a href="logout.php?logout">Logout</a>';
}
else
{
    header("location:home.php");
}
?>

