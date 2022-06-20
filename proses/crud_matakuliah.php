<?php
    require 'panggil.php';

    // proses tambah
    if(!empty($_GET['aksi'] == 'tambah'))
    {
        $nama_matakuliah   = strip_tags($_POST['nama_matakuliah']);
        $dosen_pengajar      = strip_tags($_POST['dosen_pengajar']);
        $ruang_kuliah   = strip_tags($_POST['ruang_kuliah']);
        
        $tabel = 'matakuliah';
        # proses insert
        $data[] = array(
            'nama_matakuliah'	    =>$nama_matakuliah,
            'dosen_pengajar'		=>$dosen_pengajar,
            'ruang_kuliah'	           =>$ruang_kuliah,
        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Prodi Berhasil");window.location="../index.php?page=matakuliah"</script>';
    }

    // proses edit
	if(!empty($_GET['aksi'] == 'edit'))
	{   
		$nama_matakuliah    = strip_tags($_POST['nama_matakuliah']);
        $dosen_pengajar     = strip_tags($_POST['dosen_pengajar']);
        $ruang_kuliah       = strip_tags($_POST['ruang_kuliah']);

        $data = array(
            'nama_matakuliah'	    =>$nama_matakuliah,
            'dosen_pengajar'		=>$dosen_pengajar,
            'ruang_kuliah'	        =>$ruang_kuliah,
        );
        
        $tabel = 'matakuliah';
        $where = 'id';
        $id = strip_tags($_POST['id']);
        $proses->edit_data($tabel,$data,$where,$id);
        echo '<script>alert("Edit Matakuliah Berhasil");window.location="../index.php?page=matakuliah"</script>';
    }
    
    // hapus data
    if(!empty($_GET['aksi'] == 'hapus'))
    {
        $tabel = 'matakuliah';
        $where = 'id';
        $id    = strip_tags($_GET['hapusid']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Matakuliah Berhasil");window.location="../index.php?page=matakuliah"</script>';
    }
