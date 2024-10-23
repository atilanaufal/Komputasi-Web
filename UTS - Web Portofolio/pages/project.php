<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atila NFL Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/project.css?v=1.0" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-dark">
<?php
   //Menyambungkan file koneksi.php ke file yang di inginkan
    include '../services/koneksi.php';
    
    //Mengambil seluruh baris data dari tabel project
    $project = "SELECT * FROM project";
    $result_project = $conn->query($project);
    ?>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-sm bg-dark sticky-top shadow-sm ">
            <div class="container-fluid p-1 p-md-2 ms-0 ms-md-4 ">
                <!-- Nav Menu -->
                <div class="navbar-nav mx-auto ms-md-5 d-flex flex-row p-2 ">
                    <a href="../index.php" class="nav-link   nav-text-color ms-0 ms-md-3 ">Home</a>
                    <a href="about.php" class="nav-link  nav-text-color ms-4 ms-md-3">About</a>
                    <a href="" class="nav-link  nav-text-color-active ms-4 ms-md-3">Projects</a>
                    <a href="skills.php" class="nav-link  nav-text-color ms-4 ms-md-3">Skills</a>
                    <a href="contact.php" class="nav-link   nav-text-color ms-4 ms-md-3">Contact</a>
                </div>
                <!-- Nav Menu ^ -->
            </div>
        </nav>

        <!-- Navigation Bar ^-->

        <!-- Welcom Project Banner -->
        <div class=" shadow-lg bg-dark  " >
            <div class="image-background">
                <div class="image1"></div>
                <div class="image2"></div>
                <div class="image3 d-none d-md-block"></div>
                <div class="image4 d-none d-md-block"></div>
            </div>
            <div class="overlay container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-center "  >      
                <div class="w-md-50 text-white  d-flex flex-column justify-content-center align-items-center">
                    <h1 class="banner-title pb-2">My <span class="text-danger pb-2 ">Projects</span></h1>
                    <span class="mt-3">
                        <span class="d-flex px-3 px-md-0 flex-row justify-content-md-around justify-content-center align-items-center flex-wrap">
                         <p class="occupation-l  px-4 px-md-2  fw-bolder">Jelajahi beragam karya saya!</p>
                        </span>
                        <p class="mt-0 mt-md-3 p-3 p-md-0">
                        Selamat datang. Di sini, saya berbagi proses, ide, dan hasil dari project yang sedang saya kembangkan.
                        Nikmati dan telusuri seluruh koleksi project saya.
                        </p>
                    </span>               
                </div>
            </div>
        </div>
        <!-- Welcom Project Banner 1^-->
       

        <!-- All Project Section -->     
        <div class="ft-prj-mt d-flex flex-column justify-content-center align-items-center ">
            <p class="snk-title p-2 fs-4 text-white">All Projects</p>
            <?php
                //Melakukan looping untuk setiap data pada tabel project
                if ($result_project->num_rows > 0) {
                    while($row = $result_project->fetch_assoc()) {
                        //memecah data pada column prjt_icon dan occupation  menjadi sebuah array berdasarkan (,)
                        $prjt_icons = explode(',', $row['prjt_icon']);
                        //menggunakan data diatas sebagai output ke website  
                        echo '
                        <!-- Project Card '.$row['prjt_id'].' -->
                        <a href='.$row['prjt_link'].' target="_blank" class="prj-card">
                        <div class="card shadow-lg bg-dark mt-5  mx-5 d-flex flex-column flex-md-row justify-content-start align-items-center" >
                            <img src='.$row['prjt_img'].' alt="'.$row['prjt_name'].'" class="project-card  prj-img-w" >
                            <div class="px-md-auto mx-0 mx-md-auto mt-3 w-md-50 text-white d-md-block d-flex flex-column justify-content-center align-items-center">
                              <p class="fs-6 txt-gray">'.$row['prjt_type'].'</p>
                                <h1 class="occupation-l ps-2 ">'.$row['prjt_name'].'</h1>
                                <span class="mt-1 d-flex flex-row align-items-center ">
                                    <span class="fs-6 text-white">Made With </span>
                                    '; 
                                    //looping seluruh data pada array $prjt_icons 
                                    foreach ($prjt_icons as $icon) {
                                        //menampilkan output <img> ke web sesuai dengan jumlah data pada array hasil looping
                                        echo '<img src='.$icon.' alt="C#" class="snk-icon ms-3">';
                                    };
                                    
                                   echo '
                                </span>
                                <span>
                                    <p class=" fs-5 txt-gray p-4 p-md-0 mt-0 mt-md-3 ">
                                    '.$row['prjt_desc'].'
                                    </p>
                                </span>               
                            </div>
                        </div>
                        </a>
            
                        <!-- Project Card '.$row['prjt_id'].'^ -->
                    ';
                    }
                }          
                //Menutup koneksi dari database karena tidak ada lagi yang memakainya dibawah  
                $conn->close();
            ?>

            
        </div>
        <!-- All Project Section ^-->

        <!-- Footer -->
        <footer class="mt-5 shadow container-fluid text-center py-4 bg-dark text-white">
            <p class="text-center">©Copyright 2024 AtilaNFL - All Rights Reserved</p>
        </footer>
        <!-- Footer ^-->
</body>
</html>
