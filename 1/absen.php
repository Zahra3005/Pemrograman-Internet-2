<?php
include 'header.html';
include 'model_absen.php';
$model_absen = new model_absen();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Absensi Mahasiswa</title>
</head>
<br><br><br><br>
<body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Absensi Mahasiswa</h1>		
		<a href="tambah_absen.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_absen.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table  align="center" width="800px" border="1">
			<thead>
				<tr align="center" style="background-color:pink;">
					<th>No.</th>
					<th>Id Absen</th>
					<th>Id Mahasiswa</th>
					<th>Id Matkul</th>
					<th>Waktu Absen</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model_absen->tampil_absen();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$index++ ?></td>
							<td><?=$data->id_absen ?></td>
							<td><?=$data->id_mahasiswa ?></td>
							<td><?=$data->id_matkul ?></td>
							<td><?=$data->waktu_absen ?></td>
							<td><?=$data->status ?></td>
							
							<td>
								<a name="edit" id="edit" class="btn btn btn-warning" href="edit_absen.php?id_absen=<?=$data->id_absen ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn btn-danger" href="proses2.php?id_absen=<?=$data->id_absen ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td align="center" colspan="9">Belum ada data pada tabel absensi mahasiswa.</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>