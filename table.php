<?php include 'navbar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Anggota Motor</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5 .margin-top: 0 !important;">
    <h2 class="mb-4 text-center font-weight-bold" style="font-family: 'Roboto', sans-serif;">Table Anggota Motor</h2>

        <table class="table table-bordered table-striped table-hover"">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'koneksi.php';
                $motor = mysqli_query($koneksi, "SELECT * FROM motor");
                $no = 1;
                foreach ($motor as $row){
                    $jeniskelamin = ($row['jeniskelamin'] == 'p') ? 'Perempuan' : 'Laki-laki';
                    echo "<tr>
                    <td>". $no ."</td>
                    <td>". $row['nama'] ."</td>
                    <td>". $jeniskelamin ."</td>
                    <td>". $row['alamat'] ."</td>
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <div class="container">
        <a href='../index.php' class='btn btn-primary btn-sm'>Kembali</a>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
<?php  require 'footer.php';?>
</body>
</html>