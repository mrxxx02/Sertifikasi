<?php
include'koneksi.php';
$id_agt=$_GET['id_agt'];

mysqli_query($koneksi,
	"DELETE FROM motor
	WHERE id_agt='$id_agt'"
);


header("location:anggota.php");
?>