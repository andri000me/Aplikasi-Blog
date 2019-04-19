<?php 

	$id = $_GET['id'];

	$sql = $koneksi->query("DELETE FROM tbl_artikel WHERE id = '$id' ");

	if ($sql) {
		?>
          	<script type="text/javascript">
                alert("Data Berhasil Di Hapus");
                window.location.href="?page=artikel";
            </script>
        <?php 
	} else {
		?>
          	<script type="text/javascript">
                alert("Data Gagal Di Hapus");
                window.location.href="?page=artikel";
            </script>
        <?php 
	}
 ?>