<?php include 'header.php'; 
	  include '../koneksi.php';
?>
		<div class="content">
			<?php 

					$id = $_GET['id'];
					$num_char = 25;
					$sql = $koneksi->query("SELECT * FROM tbl_artikel where id_kategori = '$id' ");

					while ($data = $sql->fetch_assoc () ) {
						
				 ?>
				<article>
					<figure>
						<img src="img/<?= $data['foto_artikel']; ?>">
						<figcaption><?= $data ['judul_artikel']; ?></figcaption>
					</figure>
					<hgroup>
						<h2><?= $data ['judul_artikel']; ?></h2>
					</hgroup>
					<p><?= substr($data ['isi_artikel'],$num_char); ?></p>
					<button type="button">
						<a href="single_post.php?id=<?= $data['id']; ?>">Read More</a>
					</button>
				</article>
			<?php } ?>
		</div>
			<?php include 'sidebar.php'; 
				  include 'footer.php'
			?>
	