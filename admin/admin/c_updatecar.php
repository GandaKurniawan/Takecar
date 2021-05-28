<?php

include '../../connect.php';


$sql = "UPDATE mobil SET nama='".$_POST['nama']."' ,
jenis='".$_POST['jenis']."',plat='".$_POST['plat']."',kapasitas='".$_POST['kapasitas']."', foto='".$_POST['foto']."',harga='".$_POST['harga']."' WHERE id_mobil='".$_POST['id_mobil']."'";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  header("Location: mobil.php");
?>
