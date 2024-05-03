<?php 
include 'koneksi.php';
$id_agt = $_GET['id_agt'];
$motor = mysqli_query($koneksi, "SELECT * FROM motor WHERE id_agt='$id_agt'");
$row = mysqli_fetch_array($motor);

// Menyusun data jurusan menjadi array dinamis

// Membuat fungsi untuk menetapkan tombol radio yang aktif
function active_radio_button($value, $input){
    // Jika nilai dari radio sama dengan input
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Anggota Motor</title>
    <!-- Menggunakan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Form Edit Mahasiswa</h2>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id_agt'];?>" name="id_agt">
            <div class="form-group">
                <label for="id_agt">ID Anggota</label>
                <input type="text" class="form-control" value="<?php echo $row['id_agt']?>" name="nim">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" value="<?php echo $row['nama']?>" name="nama">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="L" <?php echo active_radio_button("L", $row['jeniskelamin'])?>>
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="P" <?php echo active_radio_button("P", $row['jeniskelamin'])?>>
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" value="<?php echo $row['alamat'];?>" name="alamat">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="anggota.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <!-- Menggunakan Bootstrap JS (Popper.js dan jQuery diperlukan untuk beberapa fitur) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
