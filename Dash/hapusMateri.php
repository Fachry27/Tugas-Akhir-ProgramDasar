<?php 

include 'connection.php';
$id = $_GET['id'];

$sqlOLD = "SELECT * FROM materi WHERE id = '$id'";
$query2 = mysqli_query($connect,$sqlOLD);
$data = mysqli_fetch_array($query2);

$img = $data['img_dir'];

if($img != "../materi_img/dummy.png") {
  unlink($img);
}


$sql = "DELETE FROM materi WHERE id = '$id'";
$query = mysqli_query($connect,$sql);



if($query){
  header('Location: Materi.php');
}else{
  header('Location: delete.php?status=gagal');
}



?>