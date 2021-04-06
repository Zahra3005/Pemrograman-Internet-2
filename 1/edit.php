<?php
include 'header.html';
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Nilai Mahasiswa</title>
</head>
<br><br><br><br>

<body>
	
	<div class="container">
  	<div class="row">
	  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-1.png" class="img-fluid" alt="">
    </div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Edit Nilai Mahasiswa</h1>
	<br><br>
	<form form align="center" action="proses.php" method="post"> <strong>
		<label>NIM</label>
		<br>
		<input class="form-control" type="text" name="nim" value="<?php echo $data->nim ?>">
		<br>
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama" value="<?php echo $data->nama ?>">
		<br>
		<label>UTS</label>
		<br>
		<input class="form-control" type="text" name="uts" value="<?php echo $data->uts ?>">
		<br>
		<label>Tugas</label>
		<br>
		<input class="form-control" type="text" name="tugas" value="<?php echo $data->tugas ?>">
		<br>
		<label>UAS</label>
		<br>
		<input class="form-control" type="text" name="uas" value="<?php echo $data->uas ?>">
		<br><br></strong>
		<a class="btn btn btn-warning"  href="nilai.php">Kembali</a> <button class="btn btn btn-info" type="submit" name="submit_edit">Submit</button> 
	</form>
	<div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>

  </div>
</div>
	
	
</body>
<?php
include 'footer.html';
?>
</html>
