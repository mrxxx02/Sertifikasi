<!DOCTYPE html>
<htm>
    <head>
        <title>Membuat Form Inputan Data Anggota</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>id_agt</td><td><input type="text" onkeyup="isi_otomatis()" name="id_agt"></td>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td>
                <tr><td>JENIS KELAMIN</td><td>
                <input type="radio" name="jeniskelamin" value="L">Laki laki
                <input type="radio" name="jeniskelamin" value="P">Perempuan
                </td> </tr>
                <tr><td>JURUSAN</td><td>
        
                    </td></tr>
                    <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                    <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
                    </tr>
                </tr>
            </table>
        </form>
    </body>
</htm>