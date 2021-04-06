<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Nilai</title>
</head>
<br><br><br><br>
<body>

<div class="container">
  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/hero-img.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Nilai Mahasiswa</h1>
	<a class="btn btn btn-warning" href="Nilai.php">Kembali</a>
	<br><br>
	<form align="center" action="proses.php" method="post"> <strong>
		<label>NIM</label>
		<br>
		<input class="form-control" type="text" name="nim">
		<br>
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama"><br>
		<label>UTS</label>
		<br>
		<input class="form-control" type="number" name="uts">
		<br>
		<label>UAS</label>
		<br>
		<input class="form-control" type="number" name="uas">
		<br>
		<label>Tugas</label>
		<br>
		<input class="form-control" type="number" name="tugas">
		<br><br> </strong>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_simpan">Submit</button>
		
	</form>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

	
</body>
<?php
include 'footer.html';
?>
</html>