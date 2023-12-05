<?php
$id = $_GET['id'];
session_start();
include "kategori.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "assets/images/blog/";
$get_data = mysqli_query($conn,"SELECT gambar FROM ide_kegiatan where id_kegiatan=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambar']<>"-")
{
    unlink("assets/images/blog/".$hasil['gambar']);
}


$query=mysqli_query($conn,"DELETE from ide_kegiatan where id_kegiatan=$id");
echo "<script>
	alert ('Ide Kegiatan berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=kegiatan.php>";
?>
