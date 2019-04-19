          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Artikel
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example">
                                    <thead>
                                        <tr>
                                        	<th>NO</th>
                                            <th>Judul</th>
                                            <th>Thumnail</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
 
                                    <?php 
                                        $no = 1;

                                        $sql = $koneksi->query("SELECT * FROM tbl_artikel,tbl_kategori where tbl_artikel.id_kategori=tbl_kategori.id_kategori");

                                        while ($data = $sql->fetch_assoc()) {
                                           
                                     ?>

	                                     <tr>
	                                        <td><?= $no++; ?></td>
                                            <td><?= $data['judul_artikel']; ?></td>
                                            <td>
                                                <img width="50" height="50" src="../blog/img/<?= $data['foto_artikel']; ?>" >
                                            </td>
                                            <td><?= $data['penulis_artikel']; ?></td>
                                            <td><?= $data['tanggal']; ?></td>
                                            <td><?= $data['nama_kategori']; ?></td>
                                            <td>
                                            	<a onclick="return confirm('Apakah Anda Yakin untuk hapus Data Ini')"class="btn btn-danger" href="?page=artikel&aksi=hapus&id=<?= $data['id']  ?>">
                                                    <i class="material-icons">delete</i>   
                                                </a>
        
                                            	<a class="btn btn-primary" href="?page=artikel&aksi=ubah&id=<?= $data['id']  ?>">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                            </td>
	                                     </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <a class=" btn btn-info" href="?page=artikel&aksi=tambah">
                                    <i class="material-icons">add_box</i>
                                    <span>Tambah</span>    
                                </a>

                                <br><br>
                            </div>