<?php include '../koneksi.php'; ?>

<div class="sidebar">
			<div class="populer">
				<h2>Post Terbaru</h2>
			</div>
			<div class="post">
				<ul>
					<?php 

						$no = 1;
						$ambil = $koneksi->query("SELECT * FROM tbl_artikel ORDER BY id_artikel DESC LIMIT 2");
						while ($tampil = $ambil->fetch_assoc()) {
							
					 ?>
						<li>
							<a href="single_post.php?id=<?= $tampil ['id_artikel']; ?>">
								<h3><?= $no++,$tampil ['judul_artikel']; ?></h3>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="category">
				<h2>Category</h2>
					<ul>
						<?php 
							$sql = $koneksi->query("SELECT * FROM tbl_kategori");
							while ($data = $sql->fetch_assoc()) {
							
						 ?>
						<li><a href="category.php?id=<?= $data['id_kategori']; ?>">
								<h3><?= $data['nama_kategori']; ?></h3>
							</a>
						</li>
						<?php } ?>
					</ul>
			</div>
		</div>
		