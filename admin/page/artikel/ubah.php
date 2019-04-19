
<?php 

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "SELECT  * FROM tbl_artikel WHERE id = '$id'");
    $result = mysqli_fetch_array($sql);

    if (isset($_POST["ubah"])) {
        
        $judul = htmlspecialchars($_POST["judul_artikel"]);
        $kategori = htmlspecialchars($_POST["nama_kategori"]);
        $tanggal = htmlspecialchars($_POST["tanggal"]);
        $penulis = htmlspecialchars($_POST["punulis_artikel"]);
        $isi = htmlspecialchars($_POST["isi_artikel"]);

        $thumnail = $_FILES["thumnail"]["name"];
        $lokasi = $_FILES["thumnail"]["tmp_name"];

        if (!empty($lokasi)) {
            $upload = move_uploaded_file($lokasi,  "../blog/img/".$lokasi);

            $sql5 = mysqli_query($koneksi, "UPDATE tbl_artikel SET 
                        id_kategori = '$kategori',
                        foto_artikel = '$thumnail',
                        judul_artikel = '$judul',
                        penulis_artikel = '$penulis',
                        tanggal = '$tanggal',
                        isi_artikel = '$isi' WHERE 
                        id = '$id'");
            if ($sql5 > 0) {
                ?>
                    <script>
                        alert("Data Berhasil Di Ubah");
                        window.location.href="?page=artikel";
                    </script>
                <?php
            } else {
                 ?>
                    <script>
                        alert("Data gagal Di Ubah");
                        window.location.href="?page=artikel";
                    </script>
                <?php
            }
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
                                     <?php 
                                        
                                         $sql2 = $koneksi->query("SELECT * FROM tbl_artikel  where id = '$id' ");
                                        while ($data = $sql2->fetch_assoc()) {         
                                    ?>
                                    <input type="hidden" name="thumnailLama" value="<?= $data["foto_artikel"]; ?>">
                                    <div class="col-sm-8">
                                        <label>Judul Artikel</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="judul_artikel" id="judul_artikel" value="<?= $data["judul_artikel"];  ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Kategori</label>
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="nama_kategori" id="nama_kategori">
                                                <?php 
                                                    $query1 = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                                                    while ($tampil = mysqli_fetch_assoc($query1)) {

                                                        if ($tampil["id_kategori"] == $result["id_kategori"]) {
                                                            echo '<option selected value"'.$tampil["id_kategori"].'">'.$tampil["nama_kategori"].'</option>';
                                                        } else {
                                                            echo '<option value"'.$tampil["id_kategori"].'">'.$tampil["nama_kategori"].'</option>';
                                                        }

                                                    }

                                                ?>
                                                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Masukan Tanggal</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $data["tanggal"];  ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Masukan Penulis</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="penulis_artikel" id="penulis_artikel" class="form-control" value="<?= $data["penulis_artikel"];  ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CKEditor -->
                                    <div class="col-sm-12 form-group">
                                        <textarea id="ckeditor" class="ckeditor" name="isi_artikel">
                                            <?= $data["isi_artikel"] ?>
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Prefiew Thumnail</label>
                                            <div class="form-control">
                                                <img width="80" height="80" src="../blog/img/<?= $data["foto_artikel"]; ?>">
                                            </div>
                                        </div>  
                                    </div>        
                                <?php } ?>   
                                </div>
                                 <button type="submit" name="ubah" value="save" class="btn btn-primary">
                                         <i class="material-icons">save</i>
                                         <span>Ubah</span>
                                </button>
                            </form>   
                         