<?php
// session start
if(!empty($_SESSION)){ }else{ session_start(); }
//session
if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
// panggil file
// tampilkan form edit
$idGet = $_GET['id'];
$hasil = $proses->tampil_data_id('mahasiswa','id',$idGet);
?>
        <div class="col-lg-6">
            <br/>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <!-- form berfungsi mengirimkan data input
                    dengan method post ke proses crud dengan paramater get aksi edit -->
                    <form action="proses/crud_biodata.php?aksi=edit" method="POST">
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" value="<?php echo $hasil['nama'];?>" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="number" value="<?php echo $hasil['nim'];?>" class="form-control" name="nim">
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <input type="harga" value="<?php echo $hasil['semester'];?>" class="form-control" name="semester">
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <input type="text" value="<?php echo $hasil['prodi'];?>" class="form-control" name="prodi">
                            <input type="hidden" value="<?php echo $hasil['id'];?>" class="form-control" name="id">
                        </div>
        
                        <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>

