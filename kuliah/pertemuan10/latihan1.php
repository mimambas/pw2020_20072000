<?php
// koneksi ke database dan pilih database nya
$conn = mysqli_connect('localhost', 'root', '', 'pw_20072000');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// ubah datanya ke dalam bentuk array
// tampung ke variable mahasiswa

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="img/Asset 1.png" width="40"></td>
      <td>20072000</td>
      <td>Imam Bas</td>
      <td>basrurrohman@gmail.com</td>
      <td>Multimedia</td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
  </table>
</body>

</html>