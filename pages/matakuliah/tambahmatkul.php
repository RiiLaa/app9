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
						<h4 class="card-title">Tambah Matakuliah</h4>
						</div>
						<div class="card-body">
							<form action="proses/crud_matakuliah.php?aksi=tambah" method="POST">
								<div class="form-group">
									<label>Nama Matakuliah </label>
									<input type="text" value="" class="form-control" name="nama_matakuliah">
								</div>
								<div class="form-group">
									<label>Dosen_pengajar</label>
									<input type="text" value="" class="form-control" name="dosen_pengajar">
								</div>
								<div class="form-group">
									<label>Ruang_kuliah</label>
									<input type="integer" value="" class="form-control" name="ruang_kuliah">
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data Matakuliah</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>