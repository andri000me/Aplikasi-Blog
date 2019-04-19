          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kategori
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example">
                                    <thead>
                                        <tr>
                                        	<th>NO</th>
                                            <th>Judul</th>
                                        </tr>
                                    </thead>
                                    <tbody>
 
                                    <?php 
                                        $no = 1;

                                        $sql = $koneksi->query("SELECT * FROM tbl_kategori");

                                        while ($data = $sql->fetch_assoc()) {
                                           
                                     ?>

	                                     <tr>
	                                        <td><?= $no++; ?></td>
                                            <td><?= $data["nama_kategori"]; ?></td>
                                            <td>
                                            	<a onclick="return confirm('Apakah Anda Yakin untuk hapus Data Ini')"class="btn btn-danger" href="?page=kategori&aksi=hapus&id=<?= $data['id_kategori']  ?>">
                                                    <i class="material-icons">delete</i>   
                                                </a>
        
                                            	<a class="btn btn-primary" href="?page=kategori&aksi=ubah&id=<?= $data['id_kategori']  ?>">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                            </td>
	                                     </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <br>
                                <a class=" btn btn-info" href="?page=kategori&aksi=tambah">
                                    <i class="material-icons">add_box</i>
                                    <span>Tambah</span>    
                                </a>

                                <br><br>
                            </div>