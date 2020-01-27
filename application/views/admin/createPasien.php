<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="<?= base_url();?>Dashboard/daftar" role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">No. Rekam Medis</label>
    <input type="text" class="form-control" id="no_r_m" name="no_r_m">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">No. Registrasi Nasional</label>
    <input type="text" class="form-control" id="no_r_n" name="no_r_n">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pasien</label>
    <input type="text" class="form-control" id="nm_pasien" name="nm_pasien">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Umur Pasien</label>
    <input type="number" class="form-control" id="umur" name="umur">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <div class="form-line">
        <select name="j_k" class="form-control" required>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>                        
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- <script src="/assets/bootstrap/js/bootstrap.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>