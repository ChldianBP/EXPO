<?php
$id = $_GET['id'];
session_start();
include "kategori.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "assets/images/blog/";
$get_data = mysqli_query($conn,"SELECT isi FROM panduan_praktis where id_panduan=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['isi']<>"-")
{
    unlink("assets/images/blog/".$hasil['isi']);
}


$query=mysqli_query($conn,"DELETE from panduan_praktis where id_panduan=$id");
echo "<script>
	alert ('Panduan berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=panduan.php>";
?>
 