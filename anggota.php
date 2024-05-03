<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Anggota Motor</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#273036" fill-opacity="1" d="M0,64L11.4,80C22.9,96,46,128,69,154.7C91.4,181,114,203,137,176C160,149,183,75,206,69.3C228.6,64,251,128,274,165.3C297.1,203,320,213,343,213.3C365.7,213,389,203,411,218.7C434.3,235,457,277,480,266.7C502.9,256,526,192,549,165.3C571.4,139,594,149,617,138.7C640,128,663,96,686,101.3C708.6,107,731,149,754,149.3C777.1,149,800,107,823,112C845.7,117,869,171,891,208C914.3,245,937,267,960,256C982.9,245,1006,203,1029,181.3C1051.4,160,1074,160,1097,176C1120,192,1143,224,1166,234.7C1188.6,245,1211,235,1234,192C1257.1,149,1280,75,1303,48C1325.7,21,1349,43,1371,90.7C1394.3,139,1417,213,1429,250.7L1440,288L1440,0L1428.6,0C1417.1,0,1394,0,1371,0C1348.6,0,1326,0,1303,0C1280,0,1257,0,1234,0C1211.4,0,1189,0,1166,0C1142.9,0,1120,0,1097,0C1074.3,0,1051,0,1029,0C1005.7,0,983,0,960,0C937.1,0,914,0,891,0C868.6,0,846,0,823,0C800,0,777,0,754,0C731.4,0,709,0,686,0C662.9,0,640,0,617,0C594.3,0,571,0,549,0C525.7,0,503,0,480,0C457.1,0,434,0,411,0C388.6,0,366,0,343,0C320,0,297,0,274,0C251.4,0,229,0,206,0C182.9,0,160,0,137,0C114.3,0,91,0,69,0C45.7,0,23,0,11,0L0,0Z"></path>
</svg>
    <div class="container mt-5 .margin-top: 0 !important;">
    <h2 class="mb-4 text-center font-weight-bold" style="font-family: 'Roboto', sans-serif;">Anggota Motor</h2>

        <table class="table table-bordered table-striped table-hover"">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>ID_Anggota</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'koneksi.php';
                $motor = mysqli_query($koneksi, "SELECT * FROM motor");
                $no = 1;
                foreach ($motor as $row){
                    $jeniskelamin = ($row['jeniskelamin'] == 'p') ? 'Perempuan' : 'Laki-laki'; // Mengubah laki laki menjadi laki-laki
                    echo "<tr>
                    <td>". $no ."</td>
                    <td>". $row['id_agt'] ."</td>
                    <td>". $row['nama'] ."</td>
                    <td>". $jeniskelamin ."</td>
                    <td>". $row['alamat'] ."</td>
                    <td>
                        <a href='form-edit.php?id_agt=$row[id_agt]' class='btn btn-primary btn-sm'>Edit</a> <!-- Menggunakan tombol Bootstrap -->
                        <a href='delete.php?id_agt=$row[id_agt]' class='btn btn-danger btn-sm'>Delete</a> <!-- Menggunakan tombol Bootstrap -->
                    </td>
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-6 mb-3">
            <a href='form-input.php' class='btn btn-primary btn-sm'>Tambah</a>
            <a onclick="window.print()" class='btn btn-danger btn-sm'>Cetak</a>
        </div>
        <div class="col-md-6 mb-3">
        <a href='dashboard.php' class='btn btn-primary btn-sm'>Kembali</a>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

    <br>
    
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,192L21.8,170.7C43.6,149,87,107,131,117.3C174.5,128,218,192,262,208C305.5,224,349,192,393,197.3C436.4,203,480,245,524,234.7C567.3,224,611,160,655,154.7C698.2,149,742,203,785,224C829.1,245,873,235,916,218.7C960,203,1004,181,1047,176C1090.9,171,1135,181,1178,192C1221.8,203,1265,213,1309,186.7C1352.7,160,1396,96,1418,64L1440,32L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
</body>

</html>