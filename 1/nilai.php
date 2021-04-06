<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Nilai Mahasiswa</title>
</head>
<br><br><br><br>

<body>
	<div align="center">
		<h1>Data Nilai Mahasiswa</h1>
		<a href="create.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table  align="center" width="800px" border="1">
			<thead>
				<tr align="center" style="background-color:aqua;">
					<th>No.</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>UTS</th>
					<th>UAS</th>
					<th>Tugas</th>
					<th>NA</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_data();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:pink;">
							<td><?=$index++ ?></td>
							<td><?=$data->nim ?></td>
							<td><?=$data->nama ?></td>
							<td><?=$data->uts ?></td>
							<td><?=$data->uas ?></td>
							<td><?=$data->tugas ?></td>
							<td><?=$data->na ?></td>
							<td><?=$data->status ?></td>
							<td>
								<a name="edit" id="edit" href="edit.php?nim=<?=$data->nim ?>"button class="btn btn btn-warning">Edit</a>
								<a name="hapus" id="hapus" href="proses.php?nim=<?=$data->nim ?>"button class="btn btn btn-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td align="center" colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html'
?>
</html>