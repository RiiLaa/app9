<?php
// session start
if(!empty($_SESSION)){ }else{ session_start(); }
//session
if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
// panggil file
// tampilkan form edit
$idGet = $_GET['id'];
$hasil = $proses->tampil_data_id('matakuliah','id',$idGet);?>
        <div class="col-lg-6">
            <br/>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Program Matakuliah</h4>
                </div>
                <div class="card-body">
                    <!-- form berfungsi mengirimkan data input
                    dengan method post ke proses crud dengan paramater get aksi edit -->
                    <form action="proses/crud_matakuliah.php?aksi=edit" method="POST">
                        <div class="form-group">
                            <label>Nama Matakuliah </label>
                            <input type="text" value="<?php echo $hasil['nama_matakuliah'];?>" class="form-control" name="nama_matakuliah">
                        </div>
                        <div class="form-group">
                            <label>Dosen pengajar</label>
                            <input type="text" value="<?php echo $hasil['dosen_pengajar'];?>" class="form-control" name="dosen_pengajar">
                        </div>
                        <div class="form-group">
                            <label>Ruang kuliah</label>
                            <input type="harga" value="<?php echo $hasil['ruang_kuliah'];?>" class="form-control" name="ruang_kuliah">
                            <input type="hidden" value="<?php echo $hasil['id'];?>" class="form-control" name="id">
                        </div>
        
                        <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Edit Data Matakuliah</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>

