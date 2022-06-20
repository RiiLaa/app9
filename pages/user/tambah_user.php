<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
	if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
?>
				<div class="col-lg-12">
					<br/>
					<div class="card">
						<div class="card-header">
						<h4 class="card-title">Tambah Pengguna</h4>
						</div>
						<div class="card-body">
							<form action="proses/crud.php?aksi=tambah" method="POST">
								<div class="form-group">
									<label>Nama </label>
									<input type="text" value="" class="form-control" name="nama">
								</div>
								<div class="form-group">
									<label>Telepon</label>
									<input type="number" value="" class="form-control" name="telepon">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="harga" value="" class="form-control" name="email">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<textarea name="alamat" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" value="" class="form-control" name="user">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" value="" class="form-control" name="pass">
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>