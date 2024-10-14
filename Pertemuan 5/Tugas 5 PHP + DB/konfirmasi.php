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
    $servername = "127.0.0.1"; 
    $username = "root"; 
    $password = "XvMaster12";
    $dbname = "kbw5"; 

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nama = htmlspecialchars(isset($_POST['name']) ? $_POST['name'] : 'Belum diisi');
    $email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : 'Belum diisi');
    $hobi = isset($_POST['hobi']) ? implode(", ", array_map('htmlspecialchars', $_POST['hobi'])) : 'Belum diisi.';
    $jk = htmlspecialchars(isset($_POST['jenis-kelamin']) ? $_POST['jenis-kelamin'] : 'Belum diisi');
    $tgllhr = isset($_POST['tanggal-lahir']) ? $_POST['tanggal-lahir'] : null; // No need for htmlspecialchars here
    $umur = $tgllhr ? date_diff(date_create($tgllhr), date_create('today'))->y : 'Belum diisi'; //

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $stmt = $conn->prepare("INSERT INTO users (nama, email, hobi, jenis_kelamin, tanggal_lahir, umur) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $nama, $email, $hobi, $jk, $tgllhr, $umur);

        if ($stmt->execute()) {
            echo '
            <div class=" my-auto bg-dark bg-opacity-50 modal fade show" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block;">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-body">
                            Data berhasil disimpan!
                        </div>
                        <div class="modal-footer">
                            <a href="/Tugas%205%20PHP%20+%20DB/kontak.php" class="btn btn-danger text-decoration-none">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            ';
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
    }

    $conn->close();
    ?>

    <div class="container mt-5 d-flex flex-column justify-content-center">
        <div class="card w-50 mx-auto">
            <div class="card-header bg-primary rounded-top text-white p-3 h5">Konfirmasi Data</div>
            <div class="card-body p-3 h6">Nama         : <?= $nama; ?></div>
            <div class="card-body p-3 h6">Email        : <?= $email; ?></div>
            <div class="card-body p-3 h6">Hobi         : <?= $hobi; ?></div>
            <div class="card-body p-3 h6">Jenis Kelamin: <?= $jk; ?></div>
            <div class="card-body p-3 h6">Umur         : <?= $umur; ?> Tahun</div>
        </div>
        <form method="post" action="" class="text-center">
            <input type="hidden" name="name" value="<?= $nama; ?>">
            <input type="hidden" name="email" value="<?= $email; ?>">
            <input type="hidden" name="hobi[]" value="<?= $hobi; ?>">
            <input type="hidden" name="jenis-kelamin" value="<?= $jk; ?>">
            <input type="hidden" name="tanggal-lahir" value="<?= $tgllhr; ?>">
            <input type="hidden" name="umur" value="<?= $umur; ?>">
            <button class="w-50 btn btn-success mt-1 bg-primary text-white p-2 fw-bolder" type="submit" name="submit">Submit</button>
        </form>
    </div>


</body>
</html>
