<?php 
include 'koneksi.php';

// Menyimpan data ke dalam variabel
$id_agt = $_POST['id_agt'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];

// Query SQL untuk update data
$query = "UPDATE motor SET nama='$nama',jeniskelamin='$jeniskelamin', alamat='$alamat' WHERE id_agt='$id_agt'";
mysqli_query($koneksi, $query);

// Mengalihkan ke halaman index.php setelah update
header("location:anggota.php");
?>
