<?php 

	$id = $_GET['id'];

	$sql = mysqli_query($koneksi, "DELETE FROM tbl_kategori WHERE id_kategori = '$id'");

	if ($sql > 0) {
		?>
          	<script type="text/javascript">
                alert("Data Berhasil Di Hapus");
                window.location.href="?page=kategori";
            </script>
        <?php 
	} else {
		?>
            <script type="text/javascript">
                alert("Data Gagal Di Hapus");
               window.location.href="?page=kategori";
            </script>
        <?php 
	}

 ?>