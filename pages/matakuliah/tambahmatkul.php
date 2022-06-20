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
						<h4 class="card-title">Tambah Prodi</h4>
						</div>
						<div class="card-body">
							<form action="proses/crud_prodi.php?aksi=tambah" method="POST">
								<div class="form-group">
									<label>Nama Prodi </label>
									<input type="text" value="" class="form-control" name="nama_prodi">
								</div>
								<div class="form-group">
									<label>Jenjang</label>
									<input type="text" value="" class="form-control" name="jenjang">
								</div>
								<div class="form-group">
									<label>Akreditasi</label>
									<input type="harga" value="" class="form-control" name="akreditasi">
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>