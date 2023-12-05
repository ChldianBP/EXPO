<?php
session_start();
if (!isset($_POST['judul']) ) {
  header('Location:add_inspirasi.php');
  exit;
}
include "kategori.php";

date_default_timezone_set('Asia/Bangkok');

$judul= $_POST['nama_pantai'];
$gambar= $_POST['gambar'];
$alamat= $_POST['alamat'];




 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $insert_query2 = mysqli_query($conn, "INSERT INTO `inspirasi` (`id_inspirasi`, `nama_pantai`, `gambar`, `alamat`) VALUES (NULL, '$judul', '$gambar', '$alamat'); ");
    if ($insert_query2){
    echo "<script>
    alert ('Inspirasi berhasil ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=inspirasi.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, Inspirasi gagal ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=add_inspirasi.php'>";
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
            echo "<meta http-equiv='refresh' content='0;url=add_inspirasi.php'>";

}

else {
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $insert_query2 = mysqli_query($conn, "INSERT INTO `inspirasi` (`id_inspirasi`, `nama_pantai`, `gambar`, `alamat`) VALUES (NULL, '$judul', '$gambar', '$alamat'); ");
  if ($insert_query2){
  echo "<script>
  alert ('Inspirasi berhasil ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=inspirasi.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi galat, Berita gagal ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=add_inspirasi.php'>";
  }
  } else {
      echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=add_inspirasi.php'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------









?>
