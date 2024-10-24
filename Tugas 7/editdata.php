<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    $judul = "Edit Biodata Mahasiswa";
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

<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch data based on ID
    $sql = "SELECT * FROM biodata WHERE id_biodata = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);  // Bind ID as integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<p>Data tidak ditemukan.</p>";
        exit;
    }
}

// Update data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];

    // Update query
    $sql = "UPDATE biodata SET nama_depan = ?, nama_belakang = ? WHERE id_biodata = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nama_depan, $nama_belakang, $id);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Data berhasil diperbarui.</div>";
    } else {
        echo "<div class='alert alert-danger'>Terjadi kesalahan dalam memperbarui data.</div>";
    }
}
?>

  <form method="post">
    <div class="mb-3">
      <label for="nama_depan" class="form-label">Nama Depan</label>
      <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="<?= $row['nama_depan'] ?>" required>
    </div>
    <div class="mb-3">
      <label for="nama_belakang" class="form-label">Nama Belakang</label>
      <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="<?= $row['nama_belakang'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="viewbiodata.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>

</body>
</html>
