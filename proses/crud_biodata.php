<?php
    require 'panggil.php';

    // proses tambah
    if(!empty($_GET['aksi'] == 'tambah'))
    {
        $nama       = strip_tags($_POST['nama']);
        $nim        = strip_tags($_POST['nim']);
        $semester   = strip_tags($_POST['semester']);
        $prodi      = strip_tags($_POST['prodi']);
        
        $tabel = 'mahasiswa';
        # proses insert
        $data[] = array(
            'nama'	    =>$nama,
            'nim'		=>$nim,
            'semester'	=>$semester,
            'id_prodi'		=>$prodi
        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Mahasiswa Berhasil");window.location="../index.php?page=biodata"</script>';
    }

    // proses edit
	if(!empty($_GET['aksi'] == 'edit'))
	{   
		$nama       = strip_tags($_POST['nama']);
        $nim        = strip_tags($_POST['nim']);
        $semester   = strip_tags($_POST['semester']);
        $prodi      = strip_tags($_POST['prodi']);

        $data = array(
            'nama'	    =>$nama,
            'nim'		=>$nim,
            'semester'	=>$semester,
            'prodi'		=>$prodi
        );
        
        $tabel = 'mahasiswa';
        $where = 'id';
        $id = strip_tags($_POST['id']);
        var_dump($proses->edit_data($tabel,$data,$where,$id));
        echo '<script>alert("Edit Mahasiswa Berhasil");window.location="../index.php?page=biodata"</script>';
    }
    
    // hapus data
    if(!empty($_GET['aksi'] == 'hapus'))
    {
        $tabel = 'mahasiswa';
        $where = 'id';
        $id    = strip_tags($_GET['hapusid']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Mahasiswa Berhasil");window.location="../index.php?page=biodata"</script>';
    }

    // login
    if(!empty($_GET['aksi'] == 'login'))
    {   
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);
        // panggil fungsi proses_login() yang ada di class prosesCrud()
        $result = $proses->proses_login($user,$pass);
        if($result == 'gagal')
        {
            echo "<script>window.location='../login.php?get=gagal';</script>";
        }else{
            // status yang diberikan 
            session_start();
            $_SESSION['ADMIN'] = $result;
            // status yang diberikan 
            echo "<script>window.location='../index.php';</script>";
        }
    }
?>