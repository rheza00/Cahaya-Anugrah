<?php require "koneksi.php"; ?>
<script>
function infoExec(messageText, whereToGo)
{
alert(messageText);
window.location = whereToGo;
}
</script>
<?php
$id = $_GET['id'];
$query = "Select * from buku Where id = $id";
$exec = mysqli_query($db, $query);
$buku = mysqli_fetch_array($exec);
if($buku['image']!=null)
unlink($buku['image']);
$query_del = "Delete from buku Where id = ".$id;
$exec_del = mysqli_query($db, $query_del);
if($exec_del)
echo "<script>infoExec('Hapus buku Berhasil','buku.php')</script>";
else
echo "<script>infoExec('Hapus buku gagal
<br />".mysqli_error($db)."','buku.php')</script>";
?>