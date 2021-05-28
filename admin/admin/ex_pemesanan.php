<?php
include '../../connect.php'
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
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
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pemesanan.xls");
	?>

	<center>
		<h1>Data Pemesanan</h1>
	</center>

	<table border="1">
		<?php
		$sql = "SELECT *
			FROM pemesanan
			LEFT JOIN mobil
			ON pemesanan.id_mobil = mobil.id_mobil;";
		foreach ($db->query($sql) as $row) {
		?>
    <tr>
			<td><?=$row['foto']?></td>
			<td><?=$row['nama']?></td>
			<td><?=$row['jenis']?></td>
			<td><?=$row['kapasitas']?></td>
			<td><?=$row['plat']?></td>
			<td><?=$row['harga']?></td>
    </tr>
    <?php }  ?>
	</table>
</body>
</html>
