<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Inputan Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Menambahkan Bootstrap CSS -->
</head>
<body class="container mt-5"> <!-- Menambahkan kelas Bootstrap untuk mengatur margin -->
    <form method="post" action="simpan.php">
        <div class="mb-3">
            <h1>Tambah Anggota</h1>
            <label for="nim" class="form-label">Id Anggota</label>
            <input type="text" class="form-control" id="id_agt" onkeyup="isiOtomatis()" name="id_agt">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="laki-laki" value="l">
                <label class="form-check-label" for="laki-laki">Laki-laki</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="p">
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label" >Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button> <!-- Mengubah tombol menjadi tombol Bootstrap -->
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> <!-- Menambahkan Bootstrap JavaScript -->
</body>
</html>
