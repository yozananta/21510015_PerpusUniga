<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome.min.css">
</head>
<body style="width: 500px; margin: auto; margin-top: 10px">
<h4 style="text-align: center; margin-bottom: 20px; margin-top: 20px;">Input Data Mahasiswa</h4>
  <form action="prosestambah.php" method="POST">
    <div class="form-group">
      <label>Nama Mahasiswa</label>
      <input type="text" class="form-control" name="nama" id="nama_mahasiswa">
    </div>
    <div class="form-group">
      <label>NIM</label>
      <input type="number" class="form-control" name="nim" id="nim">
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control" name="almat" id="alamat"></textarea>
    </div>
    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="user" id="user">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="pass" id="pass">
    </div>
    <button style="float: right;" type="submit" class="btn btn-success">Simpan</button>
    <a style="float: right; margin-right: 10px" href="data_mahasiswa.php" type="button" class="btn btn-danger">Batal</a>
  </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

</html>

