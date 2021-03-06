<div class="col-lg-12">


    <a href="index.php?page=tambahmatkul" class="btn btn-success btn-md"><span class="fa fa-plus"></span> Tambah</a>
    <br/><br/>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data matakuliah</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered" id="mytable" style="margin-top: 10px">
                <thead>
                <tr>
                    <th width="50px">No</th>
                    <th>Nama Matakuliah</th>
                    <th>Dosen Pengajar</th>
                    <th>Ruang kuliah</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                $hasil = $proses->tampil_data('matakuliah');
                foreach($hasil as $isi){
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $isi['nama_matakuliah']?></td>
                        <td><?php echo $isi['dosen_pengajar'];?></td>
                        <td><?php echo $isi['ruang_kuliah'];?></td>
                        <td style="text-align: center;">
                            <a href="index.php?page=ubahmatkul&id=<?php echo $isi['id'];?>" class="btn btn-success btn-md">
                                <span class="fa fa-edit"></span></a>
                            <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="proses/crud_matakuliah.php?aksi=hapus&hapusid=<?php echo $isi['id'];?>"
                               class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>