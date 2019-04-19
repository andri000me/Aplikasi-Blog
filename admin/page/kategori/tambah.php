<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Data Kategori
                            </h2>
                        </div>
                        <div class="body">
	                        <form action="" method="post">
                                <div class="row clearfix">
                                    <div class="col-sm-8">
                                        <label>Nama Kategori</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <button type="submit" name="save" value="save" class="btn btn-primary">
                                         <i class="material-icons">save</i>
                                         <span>Simpan</span>
                                    </button>
                            </form>
<?php 

    if (isset($_POST['save'])) {

       $nama = htmlspecialchars($_POST["nama_kategori"]);

       $sql = $koneksi->query("INSERT INTO tbl_kategori (nama_kategori) VALUES ('$nama')");

       if ($sql) {
           ?>
            <script type="text/javascript">
                alert("Data Berhasil Di Tambah Kan");
                window.location.href="?page=kategori";
            </script>
           <?php 
       } else {
        ?>
            <script type="text/javascript">
                alert("Data Gagal Di Tambah Kan");
                header("location : tambah.php");
            </script>
           <?php 
       }

    }

      
 ?>      
                     