<?php
$id = $_GET['id'];
session_start();
include "kategori.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "assets/images/blog/";
$get_data = mysqli_query($conn,"SELECT gambar FROM inspirasi where id_inspirasi=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambar']<>"-")
{
    unlink("assets/images/blog/".$hasil['gambar']);
}


$query=mysqli_query($conn,"DELETE from inspirasi where id_inspirasi=$id");
echo "<script>
	alert ('Inspirasi berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=inspirasi.php>";
?>
