<?php
  session_start();
 ?>
<?php
include "../../connect.php";

$sql = "UPDATE mobil SET nama='".$_POST['nama']."',
jenis='".$_POST['jenis']."',plat='".$_POST['plat']."',kapasitas='".$_POST['kapasitas']."', foto='".$_POST['foto']."',harga='".$_POST['harga']."' WHERE id_mobil='".$_GET['id_mobil']."'";

mysqli_query($query, $sql);

header("Location: mobil.php");
die();
 ?>
