<?php include 'header.php'; 
	  include '../koneksi.php';
?>

<div class="content">
	<?php 

		$id = $_GET['id'];
		$sql = $koneksi->query("SELECT * FROM tbl_artikel WHERE id_artikel = '$id' ");
		$queryComent = mysqli_query($koneksi, "SELECT * FROM tbl_komentar WHERE id_artikel = '$id' ");

		// Fungsi tambah komentar
		if (isset($_POST["btn-coment"])) { 

			$nama_coment = htmlspecialchars($_POST["nama"]);
			$isi_coment = htmlspecialchars($_POST["komentar"]);

			$InsertComent = "INSERT INTO tbl_komentar 
				VALUES ('','$id','$nama_coment','$isi_coment')
			";

			$ResultComent = mysqli_query($koneksi, $InsertComent);

			if ($ResultComent) {
				echo "<div class='alret'>Berhasil di tambahkan</div>";
				echo "<meta http-equiv='refresh' content='1; url=single_post.php?id=".$id."'>";
			} else {
				echo "Gagal Di tambahkan";
			}

		}


while ($data = $sql->fetch_assoc () ) { ?>
	<article>
		<figure>
			<img  src="img/<?= $data['foto_artikel']; ?>">
		</figure>
			<hgroup>
				<h2><?= $data ['judul_artikel']; ?></h2>
				<p class="penulis">Penulis : <span><?= $data ['penulis_artikel']; ?></span></p>
				<p class="date">Tanggal : <span><?= $data['tanggal'] ?></span></p>
			</hgroup>
				<p><?= $data ['isi_artikel']; ?></p>
				<br>
	</article>
<?php } ?>
	
	<!-- Kolom komentar -->

	<div class="coment">
		<form action="" method="post">
			<div class="name">
				<label>Nama anda</label>
				<input type="text" name="nama" class="nama" placeholder="silahkan masukan nama anda">
			</div>
			<div class="isi_koment">
				<label>Komentar anda</label>
				<textarea class="komentar" name="komentar" placeholder="isi komnter"></textarea>
			</div>
			<input type="submit" class="btn-coment" name="btn-coment">
		</form>
		<hr>
		<?php while ($result = mysqli_fetch_assoc($queryComent)) : ?>
			<div class="name_coment">
				<h4><?= $result["nama_komentar"]; ?></h4>
				<p class="isi"><?= $result["isi_komentar"]; ?></p>
			</div>
		<?php endwhile; ?>
	</div>
</div>
<?php 
	include 'sidebar.php';
	include 'footer.php';
 ?>
