<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars(isset($_POST['name']) ? $_POST['name'] : 'Belum diisi');
        $email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : 'Belum diisi');
        $hobi = isset($_POST['hobi']) ? implode(", ", array_map('htmlspecialchars', $_POST['hobi'])) : 'Belum diisi.';
        $jk = htmlspecialchars(isset($_POST['jenis-kelamin']) ? $_POST['jenis-kelamin'] : 'Belum diisi');
        $tgllhr = isset($_POST['tanggal-lahir']) ? $_POST['tanggal-lahir'] : null; 
        $umur = $tgllhr ? date_diff(date_create($tgllhr), date_create('today'))->y : 'Belum diisi'; 
    }

    ?>

    <div class="container mt-5 d-flex flex-column justify-content-center">
        <div class="card w-50 mx-auto">
            <div class="card-header bg-primary rounded-top text-white p-3 h5">User Data</div>
            <div class="card-body p-3 h6">Nama         : <?= $nama; ?></div>
            <div class="card-body p-3 h6">Email        : <?= $email; ?></div>
            <div class="card-body p-3 h6">Hobi         : <?= $hobi; ?></div>
            <div class="card-body p-3 h6">Jenis Kelamin: <?= $jk; ?></div>
            <div class="card-body p-3 h6">Umur         : <?= $umur; ?> Tahun</div>
        </div>
        <a href="daftar.php" class="w-50 mx-auto btn btn-success mt-1 bg-primary text-white p-2 fw-bolder" type="submit" name="submit">Kembali</a>

    </div>


</body>
</html>
