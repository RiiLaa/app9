<?php
// session start
if(!empty($_SESSION)){ }else{ session_start(); }
//session
if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
// panggil file
// tampilkan form edit
$idGet = $_GET['id'];
$hasil = $proses->tampil_data_id('prodi','id_prodi',$idGet);
?>
        <div class="col-lg-6">
            <br/>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Prodi</h4>
                </div>
                <div class="card-body">
                    <!-- form berfungsi mengirimkan data input
                    dengan method post ke proses crud dengan paramater get aksi edit -->
                    <form action="proses/crud_prodi.php?aksi=edit" method="POST">
                        <div class="form-group">
                            <label>Nama Prodi </label>
                            <input type="text" value="<?php echo $hasil['nama_prodi'];?>" class="form-control" name="nama_prodi">
                        </div>
                        <div class="form-group">
                            <label>Jenjang</label>
                            <input type="text" value="<?php echo $hasil['jenjang'];?>" class="form-control" name="jenjang">
                        </div>
                        <div class="form-group">
                            <label>Akreditasi</label>
                            <input type="harga" value="<?php echo $hasil['akreditasi'];?>" class="form-control" name="akreditasi">
                            <input type="hidden" value="<?php echo $hasil['id_prodi'];?>" class="form-control" name="id_prodi">
                        </div>
        
                        <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>

