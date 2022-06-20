<?php
    require 'panggil.php';

    // proses tambah
    if(!empty($_GET['aksi'] == 'tambah'))
    {
        $nama_prodi   = strip_tags($_POST['nama_prodi']);
        $jenjang      = strip_tags($_POST['jenjang']);
        $akreditasi   = strip_tags($_POST['akreditasi']);
        
        $tabel = 'prodi';
        # proses insert
        $data[] = array(
            'nama_prodi'	=>$nama_prodi,
            'jenjang'		=>$jenjang,
            'akreditasi'	=>$akreditasi,
        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Prodi Berhasil");window.location="../index.php?page=prodi"</script>';
    }

    // proses edit
	if(!empty($_GET['aksi'] == 'edit'))
	{   
		$nama_prodi   = strip_tags($_POST['nama_prodi']);
        $jenjang      = strip_tags($_POST['jenjang']);
        $akreditasi   = strip_tags($_POST['akreditasi']);

        $data = array(
            'nama_prodi'	=>$nama_prodi,
            'jenjang'		=>$jenjang,
            'akreditasi'	=>$akreditasi,
        );
        
        $tabel = 'prodi';
        $where = 'id_prodi';
        $id = strip_tags($_POST['id_prodi']);
        $proses->edit_data($tabel,$data,$where,$id);
        echo '<script>alert("Edit Prodi Berhasil");window.location="../index.php?page=prodi"</script>';
    }
    
    // hapus data
    if(!empty($_GET['aksi'] == 'hapus'))
    {
        $tabel = 'prodi';
        $where = 'id_prodi';
        $id    = strip_tags($_GET['hapusid']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Prodi Berhasil");window.location="../index.php?page=prodi"</script>';
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