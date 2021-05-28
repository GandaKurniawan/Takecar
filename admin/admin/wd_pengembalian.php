<?php
include '../../connect.php'
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Word</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
  // memanggil dan membaca template dokumen yang telah kita buat
// $document = file_get_contents("pemesanan.rtf");
// isi dokumen dinyatakan dalam bentuk string
// $document = str_replace("#NAME", $name, $document);
// $document = str_replace("#TELEPHONE", $telephone, $document);
// $document = str_replace("#ALAMAT", $alamat, $document);
// $document = str_replace("#NAMA", $nama, $document);
// $document = str_replace("#TANGGAL_PEMAKAIAN", $tanggal_pemakaian, $document);
// $document = str_replace("#TANGGAL_KEMBALI", $tanggal_kembali, $document);
// $document = str_replace("#HARGA", $harga, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Pemesanan.doc");
// header("Content-length: ".strlen($document));
// echo $document;
	?>

	<center>
		<h1>Data Pengembalian</h1>
	</center>

	<table border="1">
		<?php
		$sql = "SELECT *
			FROM pengembalian
			LEFT JOIN mobil
			ON pengembalian.id_mobil = mobil.id_mobil;";
		foreach ($db->query($sql) as $row) {
		?>
    <tr>
			<td><?=$row['nama']?></td>
			<td><?=$row['jenis']?></td>
			<td><?=$row['tgl_pemesanan']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['total_bayar']?></td>
			<td><?=$row['pengembalian']?></td>
    </tr>
    <?php }  ?>
	</table>
</body>
</html>
