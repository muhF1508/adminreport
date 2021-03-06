 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Data Siswa</h1>
		<h4>
		<small>Tambah Data Siswa</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post" enctype="multipart/form">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="kelas">Kelas</label>
						<input type="text" name="kelas" id="kelas" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" id="alamat" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="umur">Umur</label>
						<input type="text" name="umur" id="umur" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="tgl_lahir">Tanggal Lahir</label>
						<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="foto">Foto</label>
						<input type="file" name="foto" id="foto" class="form-control" required>
					</div>
					<div class="form-group pull-right" style="margin-top: 20px;">
						<input type="submit" name="add" class="btn btn-success" required>
					</div>
					</div>
				</form>
			</div>
		</div>
	</h4> 
 </div>

  <?php include_once('../_footer.php'); ?>
