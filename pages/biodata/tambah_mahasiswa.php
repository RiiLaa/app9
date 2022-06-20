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
						<h4 class="card-title">Tambah Mahasiswa</h4>
						</div>
						<div class="card-body">
							<form action="proses/crud_biodata.php?aksi=tambah" method="POST">
								<div class="form-group">
									<label>Nama </label>
									<input type="text" value="" class="form-control" name="nama">
								</div>
								<div class="form-group">
									<label>NIM</label>
									<input type="number" value="" class="form-control" name="nim">
								</div>
								<div class="form-group">
									<label>Semester</label>
									<input type="harga" value="" class="form-control" name="semester">
								</div>
								<div class="form-group">
									<label>Prodi</label>
									<input type="harga" value="" class="form-control" name="prodi">
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>