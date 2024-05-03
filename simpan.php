<?php
include 'koneksi.php';
// MENYIMPAN DATA KEDALAM VARIABEL 

$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$query="INSERT INTO motor SET nama='$nama',jeniskelamin='$jeniskelamin',alamat='$alamat' ";
// MENGALIKAN KE HALAMAN INDEX PHP

header("location:anggota.php");
mysqli_query($koneksi, $query);
?>