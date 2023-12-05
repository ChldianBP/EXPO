<?php
session_start();
include 'kategori.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);



$prevQuery = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");
$data = mysqli_fetch_array($prevQuery, MYSQLI_ASSOC);

if ($password == $data['password'])
{
    $_SESSION['admin'] = $data['id_login'];
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=adminbe.php">';
	exit;
}
else
echo "<script>
	alert ('Login Gagal');
	</script>";
	    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=loginbe.php">';

?>
