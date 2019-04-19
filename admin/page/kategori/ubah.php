
<?php 
    
    $id = $_GET['id'];

    if (isset($_POST['save'])) {
       
       $kategori = htmlspecialchars($_POST["nama_kategori"]);

       $sql2 = mysqli_query($koneksi, "UPDATE tbl_kategori SET 
                    nama_kategori = '$kategori'
                    WHERE id_kategori = '$id'");

       if ($sql2 > 0) {
           ?>
            <script type="text/javascript">
                alert("Data Berhasil Di Ubah");
                window.location.href="?page=kategori";
            </script>
        <?php 
       } else {
        ?>
            <script type="text/javascript">
                alert("Data Gagal Di ubah");
                window.location.href="?page=kategori";
            </script>
        <?php 
       }
    }

 ?>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Ubah Data Kategori
                            </h2>
                        </div>
                        <div class="body">
	                        <form action="" method="post">
                                <div class="row clearfix">
                                    <div class="col-sm-8">
                                        <label>Nama Kategori</label>
                                        <div class="form-group">
                                          
                                                <div class="form-line">
                                                    <?php 

                                                        $sql = $koneksi->query("SELECT * FROM tbl_kategori WHERE id_kategori = '$id' ");

                                                        while ($data = $sql->fetch_assoc()) {
                                                            
                                                    ?>
                                                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="<?= $data["nama_kategori"];  ?>" />
                                                    <?php } ?>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                 <button type="submit" name="save" value="save" class="btn btn-primary">
                                         <i class="material-icons">save</i>
                                         <span>Ubah</span>
                                    </button>
                            </form>
