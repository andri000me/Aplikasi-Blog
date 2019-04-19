<?php 
	
	  include 'header.php';
	  include '../koneksi.php';
?>
		<div class="content">

			<?php 

					$id = $_GET['id'];
					$num_char = 25;

					// Pagnation
					$jumlahDataPerhalaman = 2;

					$sql = mysqli_query($koneksi, "SELECT * FROM tbl_artikel");

					$jumlahData =  mysqli_num_rows($sql);
					$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
					if (isset($_GET["halaman"])) {
						$halamanAktif = $_GET["halaman"];
					} else {
						$halamanAktif = 1;
					}
					$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

					$sql = mysqli_query($koneksi, "SELECT * FROM tbl_artikel LIMIT $awalData, $jumlahDataPerhalaman");
					while ($data = mysqli_fetch_assoc($sql)) {
						
				 ?>
				<article>
					<figure>
						<img src="img/<?= $data['foto_artikel']; ?>">
						<figcaption><?= $data ['judul_artikel']; ?></figcaption>
					</figure>
					<hgroup>
						<h2><?= $data ['judul_artikel']; ?></h2>
						<p class="penulis">Penulis : <span><?= $data['penulis_artikel']; ?></span></p>
						<p class="date">Tanggal : <span><?= $data['tanggal']; ?></span></p>
					</hgroup>
					<p><?= substr($data ['isi_artikel'],$num_char); ?></p>
					<button type="button">
						<a href="single_post.php?id=<?= $data['id_artikel']; ?>">Read More</a>
					</button>
				</article>
			<?php } ?>
			<div class="halaman">
				<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
					<?php if ($i == $halamanAktif ) : ?>
						<a class="aktif" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
					<?php else : ?>
						<a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
					<?php endif; ?>
				<?php endfor; ?>
			</div>
		</div>

			<?php 
				  include 'sidebar.php'; 
				  include 'footer.php'
			?>
	