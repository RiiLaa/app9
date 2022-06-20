<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    require 'proses/panggil.php';
?>

<!DOCTYPE HTML>
<html>
<?php
include('themes/header.php');
?>

    <body>
    <?php
    include('themes/navbar.php');
    ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
                        <?php
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];switch ($page) {// Beranda
                                case 'data_user':
                                    include 'pages/user/data_user.php';
                                    break;
                                case 'tambah_user':
                                    include 'pages/user/tambah_user.php';
                                    break;
                                case 'ubah_user';
                                    include 'pages/user/ubah_user.php';
                                    break;
                                case 'biodata';
                                    include 'pages/biodata/data_mahasiswa.php';
                                    break;
                                case 'tambah_mahasiswa';
                                    include 'pages/biodata/tambah_mahasiswa.php';
                                    break;
                                case 'ubah_mahasiswa';
                                    include 'pages/biodata/ubah_mahasiswa.php';
                                    break;
                                case 'prodi';
                                    include 'pages/prodi/data_prodi.php';
                                    break;
                                case 'tambah_prodi';
                                    include 'pages/prodi/tambah_prodi.php';
                                    break;
                                case 'ubah_prodi';
                                    include 'pages/prodi/ubah_prodi.php';
                                    break;
                            }
                        }else{
                            include "pages/beranda.php";
                        }
                        ?>
			    </div>
			</div>
		</div>
	</body>
</html>