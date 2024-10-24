<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    $judul = "Lihat Biodata Mahasiswa";
?>
  <title><?= $judul ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container mt-3">
  <h2><?= $judul ?></h2>
        
  <table class="table table-hover">
    <thead>
      <tr>
        <th><input type="checkbox" id="select_all"></th>
        <th>ID</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php 
include "koneksi.php";
$sql = "SELECT * FROM biodata";  // Use the actual column name
$result = $conn->query($sql);
 
if ($result->num_rows == 0) {
?>
      <tr>
        <td colspan="5">Data Kosong</td>
      </tr>
<?php
} else {
    while ($row = $result->fetch_assoc()) {
?>
      <tr>  
        <td><input  
        type='checkbox'  
        class='checkbox' name='checked_id[]' value='<?= $row["id_biodata"]; ?>'></td>  
        <td><?= $row["id_biodata"]; ?></td>  
        <td><?= $row['nama_depan']; ?></td>  
        <td><?= $row['nama_belakang']; ?></td>  
        <td>  
        <a href='editdata.php?id=<?= $row["id_biodata"]; ?>' class='btn btn-warning btn-sm'>Edit</a>  
        <a href='hapusdata.php?id=<?= $row["id_biodata"]; ?>' class='btn btn-danger btn-sm'  
        onclick='confirm("Apakah Anda yakin ingin menghapus data ini?")'
        >Hapus</a>  
        </td>  
</tr>  
<?php
    }
}
?>
    </tbody>
  </table>
</div>
 
</body>
</html>
