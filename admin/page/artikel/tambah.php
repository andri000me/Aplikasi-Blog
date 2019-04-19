<?php 

    

    if (isset($_POST['save'])) {
        
        $judul_artikel = $_POST["judul_artikel"];
        $nama_kategori = $_POST["nama_kategori"];
        $tanggal = $_POST["tanggal"];
        $penulis_artikel = $_POST["penulis_artikel"];
        $isi_artikel = $_POST["isi_artikel"];

      // Prosses upload gambar
        $namaFile = $_FILES["thumnail"]["name"];
        $ukuranFile = $_FILES["thumnail"]["size"];
        $error = $_FILES["thumnail"]["error"];
        $tmpName = $_FILES["thumnail"]["tmp_name"];

        // Prosses pengecekan
        if ( $error === 4 ) {
             ?>
                <script>
                    alert("Thumnail tidak boleh kosong");
                </script>
            <?php 
            return false;
        }

        $EksGambarValid = ["jpg","jpeg","png"];
        $EksGambar = explode(".", $namaFile);
        $EksGambar = strtolower(end($EksGambar));

        if ( !in_array($EksGambar, $EksGambarValid)) {
            ?>
                <script>
                    alert("Yang anda upload bukan gambar");
                </script>
            <?php 
            return false;
        }

        // Lolos pengecekan
        $namaFileBaru = uniqid();
        $namaFileBaru .= ".";
        $namaFileBaru .= $EksGambar;
        $ProssesUpload = move_uploaded_file($tmpName, "../blog/img/".$namaFileBaru);

        if ($ProssesUpload > 0){

            $sql3 = mysqli_query($koneksi, "INSERT INTO tbl_artikel 
                    VALUES ('','$nama_kategori','$namaFileBaru','$judul_artikel','$penulis_artikel','$tanggal','$isi_artikel')
                    ");

            if ($sql3) {
            ?>
                <script type="text/javascript">
                    alert("Data Berhasil Di Tambah Kan");
                   window.location.href="?page=artikel";
                </script>
            <?php 
            } 
        } else {
                ?>
                    <script type="text/javascript">
                        alert("Data Gagal Di Tambah Kan");
                       window.location.href="?page=artikel";
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
                                Tambah Data Barang
                            </h2>
                        </div>
                        <div class="body">
	                        <form action="" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-sm-8">
                                        <label>Judul Artikel</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="judul_artikel" id="judul_artikel" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Kategori</label>
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="nama_kategori" id="nama_kategori">
                                                <?php 
                                                    
                                                    $sql2 = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                                                    while ($data = mysqli_fetch_assoc($sql2)) {         
                                                ?>
                                                    <option value="<?= $data["id_kategori"]; ?>"> <?= $data['nama_kategori'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Masukan Tanggal</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Masukan Penulis</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="penulis_artikel" id="penulis_artikel" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CKEditor -->
                                    <div class="col-sm-12 form-group">
                                        <textarea id="ckeditor" class="ckeditor" name="isi_artikel">

                                        </textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Masukan Thumnail</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="thumnail" id="thumnail" class="form-control">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                 <button type="submit" name="save" value="save" class="btn btn-primary">
                                         <i class="material-icons">save</i>
                                         <span>Simpan</span>
                                    </button>
                            </form>                                   

                     
                     