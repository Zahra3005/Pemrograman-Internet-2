<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data Mahasiswa</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, 
		td {
			padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Mahasiswa</h1>
	<table>
		<thead>
			<tr style="background-color:orange;">
            	<th>id</th>
                <th>No.</th>
				<th>Nama</th>
				<th>Semester</th>
				<th>Alamat</th>
				<th>No.tlp</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_mahasiswa();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr style="background-color:yellow;">
						<td style="background-color:yellow;"><?=$index++ ?></td>
						<td style="background-color:yellow;"><?=$data->id_mahasiswa ?></td>
							<td style="background-color:yellow;"><?=$data->nama ?></td>
							<td style="background-color:yellow;"><?=$data->semester ?></td>
							<td style="background-color:yellow;"><?=$data->alamat ?></td>
							<td style="background-color:yellow;"><?=$data->no_telp ?></td>
							<td style="background-color:yellow;"><?=$data->email ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td align="center" colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>