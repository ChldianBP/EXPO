<?php
session_start();
if (!isset($_POST['isi']) ) {
  header('Location:add_panduan.php');
  exit;
}
include "kategori.php";

date_default_timezone_set('Asia/Bangkok');

$isi= $_POST['isi'];
$no= $_POST['no'];




 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $insert_query2 = mysqli_query($conn, "INSERT INTO `panduan_praktis`(`id_panduan`, `isi`, `no`) VALUES (NULL,'$isi','$no');");
    if ($insert_query2){
    echo "<script>
    alert ('Panduan Praktis berhasil ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=panduan.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, Panduan gagal ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=add_panduan.php'>";
    }
}

else{
$target_dir = "assets/images/blog/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     $uploadOk = 1;
//   } else {
//     $uploadOk = 0;
//   }
// }

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
            echo "<meta http-equiv='refresh' content='0;url=add_panduan.php'>";

}

else {
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $insert_query2 = mysqli_query($conn, "INSERT INTO `panduan_praktis`(`id_panduan`, `isi`, `no`) VALUES (NULL,'$isi','$no');");
  if ($insert_query2){
  echo "<script>
  alert ('Panduan berhasil ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=panduan.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi galat, Panduan gagal ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=add_panduan.php'>";
  }
  } else {
      echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=add_panduan.php'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------






 


?>
