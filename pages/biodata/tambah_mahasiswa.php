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
									<select name="prodi">
         <br>
			<?php
  
			// Connect to database 
			$con = mysqli_connect("localhost","root","","app_web");
			  
			// mysqli_connect("servername","username","password","database_name")
		   
			// Get all the categories from category table
			$sql = "SELECT * FROM `prodi`";
			$all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["id_prodi"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["nama_prodi"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
        </select>
									

								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>