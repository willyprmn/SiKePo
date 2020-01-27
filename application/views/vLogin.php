<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SIKEPO ARV</title>
	<!-- <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form method="POST" action="<?= base_url();?>Login/singin">
				  <h2 class="msg">Selamat Datang Silahkan Login</h2>
				  <?= $this->session->set_flashdata('error'); ?>
				  <div class="row">
					  <div class="form-group col-md-12">
						<label for="exampleInputEmail1">Username</label>
						<input type="username" class="form-control" id="username" name="username" placeholder="Input Username" autofocus>
					  </div>
				  </div>
				  <div class="row">
					  <div class="form-group col-md-12">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Input Password">
					  </div>
				  </div>
				  <div class="row">
					  <div class="col-md-12">
						<button class="btn btn-primary" type="submit">Masuk</button>
						</br></br>
						<!-- <a href="<?= base_url()?>Register">Belum Punya Akun ?</a> -->
					  </div>
				  </div>
				</form>
			</div>
		</div>
	</div>

	<!-- <script src="/assets/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>