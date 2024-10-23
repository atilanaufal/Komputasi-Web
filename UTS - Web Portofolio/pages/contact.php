<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atila NFL Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/contact.css?v=1.0" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-dark d-flex flex-column min-vh-100">
<?php
    //Menyambungkan file koneksi.php ke file yang di inginkan
    include '../services/koneksi.php';
   
    //Mengambil seluruh baris data dari tabel contact_content
    $contact = "SELECT * FROM contact_content";
    $result_contact = $conn->query($contact);
    ?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-sm bg-dark sticky-top shadow-sm">
        <div class="container-fluid p-1 p-md-2 ms-0 ms-md-4">
            <div class="navbar-nav mx-auto ms-md-5 d-flex flex-row p-2">
                <a href="../index.php" class="nav-link nav-text-color ms-0 ms-md-3">Home</a>
                <a href="about.php" class="nav-link nav-text-color ms-4 ms-md-3">About</a>
                <a href="project.php" class="nav-link nav-text-color ms-4 ms-md-3">Projects</a>
                <a href="skills.php" class="nav-link nav-text-color ms-4 ms-md-3">Skills</a>
                <a href="" class="nav-link nav-text-color-active ms-4 ms-md-3">Contact</a>
            </div>
        </div>
    </nav>
?>
    <!-- Main Content Wrapper -->
    <div class="flex-grow-1">
        <div class="container mt-4 d-block d-md-flex flex-row justify-content-around align-items-center">
            <div class="me-auto w-md-50 text-center">
                <h1 class="banner-title text-danger">Contact <span class="text-white">Me</span></h1>
                <?php
                //Melakukan looping untuk setiap data pada tabel contact_content
                    if ($result_contact->num_rows > 0) {
                        while ($row = $result_contact->fetch_assoc()) {
                            //memecah data pada column dibawah ini   menjadi sebuah array berdasarkan (,)
                            $contact_links = explode(',', $row['contact_link']);
                            $contact_icons = explode(',', $row['contact_icon']);
                            $contact_icon_names = explode(',', $row['contact_icon_name']);
                            //menggunakan data diatas sebagai output ke website  
                            echo '
                                <p class="fs-5 txt-gray p-3">
                                    ' . $row['contact_desc'] . '
                                </p>
                            ';
                            echo '
                                <p class="pt-2 fs-6 d-none d-md-block txt-gray text-center">
                                    Temukan saya juga di sini
                                </p>
                            ';
                        }
                    }
                ?>
                <span class="mt-2 me-4 d-none d-md-flex flex-row align-items-center justify-content-center">
                <?php
                //tiga data yang sudah dipecah ke dalam arraynya masing-masing, digabungkan menjadi satu array
                    $count = min(count($contact_links), count($contact_icons), count($contact_icon_names));
                    //looping seluruh data pada array $count
                    for ($i = 0; $i < $count; $i++) {
                         //menampilkan data ke web dari array sesuai dengan isi dari array tersebut
                        echo '
                                <a href="' . htmlspecialchars($contact_links[$i]) . '" target="_blank">
                                    <img src="' . htmlspecialchars($contact_icons[$i]) . '" 
                                        alt="' . htmlspecialchars($contact_icon_names[$i]) . '" 
                                        class="acc-icon ms-4 rounded-2">
                                </a>          
                        ';
                    }                                      
                ?>
                </span>
            </div>

            <form method="post" action="contact.php" class="card bg-dark shadow p-4 w-100" style="max-width: 600px;">
                <div class="form-group contact-bar">
                    <input type="text" id="name" name="name" placeholder=" " required>
                    <label for="name">Name</label>
                </div>
                <div class="form-group contact-bar mt-4">
                    <input type="email" id="email" name="email" placeholder=" " required>
                    <label for="email">Email</label>
                </div>
                <div class="form-group contact-bar mt-4">
                    <input type="number" id="phone-number" name="phone-number" placeholder=" " required>
                    <label for="phone-number">Phone Number</label>
                </div>
                <div class="form-group contact-bar mt-4">
                    <input type="text" id="subject" name="subject" placeholder=" " required>
                    <label for="subject">Subject</label>
                </div>
                <div class="form-group contact-bar mt-4">
                    <textarea id="messages" name="messages" rows="4" placeholder=" " required></textarea>
                    <label for="messages">Messages</label>
                </div>
                <div class="text-center mt-4 d-flex flex-row justify-content-center">
                    <button class="btn btn-danger px-4 w-100" type="submit">Send</button>
                    <button class="btn btn-dark border border-danger text-danger px-4 ms-2 w-100" type="reset">Reset</button>
                </div>
            </form>

            <p class="mt-5 fs-6 d-block d-md-none txt-gray text-center">Temukan saya juga di sini</p>
            <span class="me-4 d-flex d-md-none flex-row align-items-center justify-content-center">
            <?php
            //tiga data yang sudah dipecah ke dalam arraynya masing-masing, digabungkan menjadi satu array
                    $count = min(count($contact_links), count($contact_icons), count($contact_icon_names));
                    //looping seluruh data pada array $count
                    for ($i = 0; $i < $count; $i++) {
                        //menampilkan data ke web dari array sesuai dengan isi dari array tersebut
                        echo '
                                <a href="' . htmlspecialchars($contact_links[$i]) . '" target="_blank">
                                    <img src="' . htmlspecialchars($contact_icons[$i]) . '" 
                                        alt="' . htmlspecialchars($contact_icon_names[$i]) . '" 
                                        class="acc-icon ms-4 rounded-2">
                                </a>          
                        ';
                    }                                      
                ?>
            </span>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5 shadow text-center text-white py-3">
        <p class="text-center">&copy; 2024 AtilaNFL - All Rights Reserved</p>
    </footer>
    <?php   
        //Mengambil data dari masing masing input form ke dalam variabel dibawah ini
        $name =  htmlspecialchars(isset($_POST['name']) ? $_POST['name'] : 'Belum diisi');
        $email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : 'Belum diisi');
        $number = htmlspecialchars(isset($_POST['phone-number']) ? $_POST['phone-number'] : 'Belum diisi');
        $subject = htmlspecialchars(isset($_POST['subject'] ) ? $_POST['subject']  : 'Belum diisi');
        $msg =   htmlspecialchars(isset($_POST['messages'] ) ? $_POST['messages']  : 'Belum diisi');

        //Memasukan data dari kelima variabel di atas ke dalam tabel contact
        $data = "INSERT INTO contact(name, email, number, subject, messages) Values('$name', '$email', '$number', '$subject', '$msg')";

        //Mengecek apabila data berhasil dimasukkan ke tabel,
        //jika berhasil, maka data akan masuk, dan pesan erhasil akan diberikan
        //jika tidak tampilkan errornya
        if ($conn->query($data) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          //Menutup koneksi dari database karena tidak ada lagi yang memakainya dibawah  
          $conn->close();
    ?>

</body>
</html>
