<?php
session_start();
if (!isset($_POST['nama_pantai']) ) {
  header('Location:update_inspirasi.php');
  exit;
}
include "kategori.php";

date_default_timezone_set('Asia/Bangkok');

$nama_pantai = $_POST['nama_pantai'];
$alamat = $_POST['alamat'];
$gambar = $_POST['gambar'];



 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $update_query2 = mysqli_query($conn, "UPDATE `inspirasi` SET `id_inspirasi`= NULL,'nama_pantai`='$nama_pantai',`alamat`='$alamat',`gambar`='$gambar' WHERE 1");
    if ($update_query2){
    echo "<script>
    alert ('Inspirasi berhasil diubah');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=inspirasi.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, Inspirasi gagal diubah');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=update_inspirasi.php?id=$ids'>";
    }
}

else{
$target_dir = "assets/images/blog/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10044070) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" ) {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo "<script>
            alert ('Cek Ukuran File, Tipe File');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_inspirasi.php?id=$ids'>";

}

else {
  $get_data = mysqli_query($conn, "SELECT gambar FROM inspirasi where id_inspirasi='$ids'");
  $hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
  if($hasil['gambar']<>"-")
  {
      unlink("assets/images/blog/".$hasil['gambar']);
  }

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $update_query = mysqli_query($conn, "UPDATE `inspirasi` SET `id_inspirasi`= NULL,'nama_pantai`='$nama_pantai',`gambar`='$newfilename',`alamat`='$alamat' WHERE 1");
  if ($update_query){
  echo "<script>
  alert ('Inspirasi berhasil diubah');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=inspirasi.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi galat, Inspirasi gagal diubah');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=update_inspirasi.php?id=$ids'>";
  }
  } else {
      echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_inspirasi.php?id=$ids'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------









?>
