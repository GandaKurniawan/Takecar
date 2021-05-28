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
	header("Content-Disposition: attachment; filename=Data Rekap.xls");
	?>

	<center>
		<h1>Data Rekap</h1>
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
