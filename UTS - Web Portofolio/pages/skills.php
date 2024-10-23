<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atila NFL Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/skills.css?v=1.0" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-dark">
    <?php
    //Menyambungkan file koneksi.php ke file yang di inginkan
    include '../services/koneksi.php';
    //Mengubah tipe charset supaya support simbol seperti ★, dll
    $conn->set_charset("utf8mb4");
    
    //Mengambil seluruh baris data dari tabel mk_skills
    $mk_skills = "SELECT * FROM mk_skills";
    $result_mk_skills = $conn->query($mk_skills);
    
    //Mengambil seluruh baris data dari tabel ft_skills
    $ft_skills = "SELECT * FROM ft_skills";
    $result_ft_skills = $conn->query($ft_skills);
    
    //Mengambil seluruh baris data dari tabel skills
    $skills = "SELECT * FROM skills";
    $result_skills = $conn->query($skills);

    //Mengambil seluruh baris data dari tabel interest
    $interest = "SELECT * FROM interest";
    $result_interest = $conn->query($interest);

    ?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-sm bg-dark sticky-top shadow-sm">
        <div class="container-fluid p-1 p-md-2 ms-0 ms-md-4">
            <!-- Nav Menu -->
            <div class="navbar-nav mx-auto ms-md-5 d-flex flex-row p-2">
                <a href="../index.php" class="nav-link nav-text-color ms-0 ms-md-3">Home</a>
                <a href="about.php" class="nav-link nav-text-color ms-4 ms-md-3">About</a>
                <a href="project.php" class="nav-link nav-text-color ms-4 ms-md-3">Projects</a>
                <a href="" class="nav-link nav-text-color-active ms-4 ms-md-3">Skills</a>
                <a href="contact.php" class="nav-link nav-text-color ms-4 ms-md-3">Contact</a>
            </div>
            <!-- Nav Menu ^ -->
        </div>
    </nav>
    <!-- Navigation Bar ^-->

    <!-- Main Skills Section -->
    <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
    <h1 class="banner-title text-white pb-2">Main <span class="text-danger pb-2">Skills</span></h1>
        <div class="container row justify-content-evenly align-items-center">
            <?php
            //Melakukan looping untuk setiap data pada tabel mk_skills
                if ($result_mk_skills->num_rows > 0) {
                    while($row = $result_mk_skills->fetch_assoc()) {
                        //menggunakan data diatas sebagai output ke website  
                        echo '
                        <!--Main Skills Card '. $row['msk_id'].' -->
                        <div class="col-lg-4 '.(($row['msk_id'] == 3) ? "col-12" : "col-6" ).'">
                            <div class="card container-mk shadow-lg bg-dark mt-5  ">
                                <img src='. $row['msk_icon'].' alt="Pic" class="intr-icon py-3 mt-2 mx-auto">
                                <div class="txt-sm-b ms-0 mt-0 mt-md-3 p-1 p-md-3 text-white d-flex flex-column align-items-center">
                                    <p class="fs-6 txt-gray">'. $row['msk_type'].'</p>
                                    <p class="fs-6 px-3">'. $row['msk_desc'].'</p>
                                    <span class="fs-5 fw-bold text-danger">'. $row['msk_perf'].'</span>
                                </div>
                            </div>
                        </div>
                        <!--Main Skills Card '. $row['msk_id'].' ^ -->
                    ';
                    }
                }            
            ?>
        </div>
    </div>
    <!-- Main Skills Section ^-->

    <!-- Featured Skills Section -->
    <div class="mt-sect p-3 d-flex flex-column justify-content-center align-items-center bg-danger">
        <h1 class=" text-white pb-2">Featured</h1>
        <div class="container pb-3 mb-3 row row2 align-items-center justify-content-start">
            <?php
            //Melakukan looping untuk setiap data pada tabel ft_skills
                if ($result_ft_skills->num_rows > 0) {
                    while($row = $result_ft_skills->fetch_assoc()) {
                        //menggunakan data diatas sebagai output ke website  
                        echo '
                        <!--Featured Skill Card '. $row['ft_sk_id'].' -->
                        <div class="col-md-4   container-sk ">
                        <div class="card border border-light shadow-lg bg-dark mt-5  d-flex flex-column flex-md-row  align-items-center">
                            <img src='. $row['ft_sk_icon'].' alt='. $row['ft_sk_name'].' class="acbg-icon p-3 ">
                            <div class="txt-sm ms-0 mt-0 mt-md-3 p-1 p-md-3 text-white text-center flex-grow-1">
                                <p class="fs-6  txt-gray">'. $row['ft_sk_type'].' </p>
                                <p class="fs-5 ">'. $row['ft_sk_name'].'</p>
                                <p class="fs-6 d-none d-md-block text-danger">'. $row['ft_sk_perf'].'</p>
                                <p class="fs-6 d-block d-md-none text-danger">Good</p>
                            </div>
                        </div>
                    </div>
                        <!--Featured Skill Card '. $row['ft_sk_id'].' ^ -->
                    ';
                    }
                } 
            ?>
        </div>
    </div>
    <!-- Featured Skills Section ^-->

    <!-- Other Skills Section -->
    <div class="mt-sect d-flex flex-column justify-content-center align-items-center">
        <h1 class="banner-title text-white pb-2">Other Skills</h1>
        <div class="container row row2 align-items-center justify-content-start">
        <?php
        //Melakukan looping untuk setiap data pada tabel skills
                if ($result_skills->num_rows > 0) {
                    while($row = $result_skills->fetch_assoc()) {
                        //menggunakan data diatas sebagai output ke website  
                        echo '
                        <!-- Skill Card '. $row['sk_id'].' -->
                        <div class="col-md-4   container-sk ">
                        <div class="card border border-light shadow-lg bg-dark mt-5  d-flex flex-column flex-md-row  align-items-center">
                            <img src='. $row['sk_icon'].' alt='. $row['sk_name'].' class="acbg-icon p-3 ">
                            <div class="txt-sm ms-0 mt-0 mt-md-3 p-1 p-md-3 text-white text-center flex-grow-1">
                                <p class="fs-6  txt-gray">'. $row['sk_type'].' </p>
                                <p class="fs-5 ">'. $row['sk_name'].'</p>
                                <p class="fs-6 d-none d-md-block text-danger">'. $row['sk_perf'].'</p>
                                <p class="fs-6 d-block d-md-none text-danger">Good</p>
                            </div>
                        </div>
                    </div>
                        <!-- Skill Card '. $row['sk_id'].' ^ -->
                    ';
                    }
                } 
            ?>
        </div>
    </div>
    <!-- Other Skills Section ^-->

    <!-- Interest Section -->
    <div class="mt-sect d-flex flex-column justify-content-center align-items-center">
        <h1 class="banner-title text-white pb-2">Eager To <span class="text-danger pb-2">Learn</span></h1>
        <div class="container row justify-content-evenly align-items-center">
            <?php
            //Melakukan looping untuk setiap data pada tabel interest
                if ($result_interest->num_rows > 0) {
                    while($row = $result_interest->fetch_assoc()) {
                        //menggunakan data diatas sebagai output ke website  
                        echo '
                        <!--Interest Card '. $row['intr_id'].' -->
                        <div class="col-lg-3 col-sm-4 '.(($row['intr_id'] == 3) ? "col-7" : "col-6").'  ">
                            <div class="card container-intr bd-intr shadow-lg bg-dark mt-5  ">
                                <img src='.$row['intr_icon'].' alt='.$row['intr_name'].' class="intr-icon py-3 mt-2 mx-auto">
                                <div class="txt-sm-b ms-0 mt-0 mt-md-3 p-1 p-md-3 text-white d-flex flex-column align-items-center">
                                    <p class="fs-6 txt-gray">'.$row['intr_type'].'</p>
                                    <p class="fs-5 occupation-x px-2">'.$row['intr_name'].'</p>
                                    <p class="fs-6 px-3">'.$row['intr_desc'].'</p>
                                    <span class="fs-5 fw-bold text-danger">'.$row['intr_prty'].'</span>
                                </div>
                            </div>
                        </div>
                        <!--Interest Card '. $row['intr_id'].' ^ -->
                    ';
                    }
                } 
                //Menutup koneksi dari database karena tidak ada lagi yang memakainya dibawah  
                $conn->close();
            ?>
        </div>
    </div>
    <!-- Interest Section ^-->


    <!-- Footer -->
    <footer class="mt-5 shadow container-fluid text-center py-4 bg-dark text-white">
        <p class="text-center">©Copyright 2024 AtilaNFL - All Rights Reserved</p>
    </footer>
    <!-- Footer ^-->
</body>
</html>
