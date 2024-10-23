<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atila NFL Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/about.css?v=1.0" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-dark">
<?php
    //Menyambungkan file koneksi.php ke file yang di inginkan
    include '../services/koneksi.php';

    // fungsi untuk mengambil data per 1 baris dari tabel
    function getDataPerRow($conn, $table, $row) {
        $data = "SELECT * FROM $table ORDER BY id LIMIT 1 OFFSET $row";
        $result = $conn->query($data);
        return $result->fetch_assoc(); // Return a single row
    }
    //Mengambil data pada baris yang diinginkan dari tabel
    $about_row1 = getDataPerRow($conn, 'about_banner', 0);
    $about_row2 = getDataPerRow($conn, 'about_banner', 1);
    $about_row3 = getDataPerRow($conn, 'about_banner', 2);

    //Mengambil seluruh baris data dari tabel short_sk_card
    $skill = "SELECT * FROM short_sk_card";
    $result_skill = $conn->query($skill);

    //Mengambil seluruh baris data dari tabel short_intr_card
    $interest = "SELECT * FROM short_intr_card";
    $result_interest = $conn->query($interest);
    ?>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-sm  bg-dark sticky-top shadow-sm ">
            <div class="container-fluid p-1 p-md-2 ms-0 ms-md-4 ">
                <!-- Nav Menu -->
                <div class="navbar-nav mx-auto ms-md-5 d-flex flex-row p-2 ">
                    <a href="../index.php" class="nav-link   nav-text-color ms-0 ms-md-3 ">Home</a>
                    <a href="" class="nav-link  nav-text-color-active ms-4 ms-md-3">About</a>
                    <a href="project.php" class="nav-link  nav-text-color ms-4 ms-md-3">Projects</a>
                    <a href="skills.php" class="nav-link  nav-text-color ms-4 ms-md-3">Skills</a>
                    <a href="contact.php" class="nav-link   nav-text-color ms-4 ms-md-3">Contact</a>
                </div>
                <!-- Nav Menu ^ -->
            </div>
        </nav>

        <!-- Navigation Bar ^-->

        <!-- About Banner 1-->
        <div class="card shadow-lg bg-dark  full-height mt-2 mt-md-4 mx-4" >
            <div class="container-fluid  h-100 d-flex flex-column flex-md-row align-items-center justify-content-around "  >
        
            <?php
                //memecah data pada column title dan occupation  menjadi sebuah array berdasarkan spasi
                $title = explode(' ', $about_row1['title']); 
                 $occupations = explode(',', $about_row1['occupation']);  
                  //menggunakan data dari variabel $about_row1, $title, dan $occupations sebagai output ke website       
                 echo '
                 <h1 class="banner-title text-white mt-4 pb-2 d-inline-block d-md-none">'.$title[0].' <span class="text-danger pb-2 d-inline-block d-md-none">'.$title[1].' </span></h1>
                 <div class="banner-pfp mt-2 mt-md-0" ></div>
                 <div class="w-md-50 text-white  d-flex flex-column justify-content-center align-items-center">
                     <h1 class="banner-title pb-2 d-none d-md-inline-block">'.$title[0].'  <span class="text-danger pb-2 d-none d-md-inline-block">'.$title[1].' </span></h1>
                     <span class="mt-3">
                     <span class="d-flex px-3 px-md-0 flex-row justify-content-md-around justify-content-between align-items-center flex-wrap">
                 ';         
                        //looping seluruh data dari array $occupations 
                        foreach($occupations as $occupation) {
                            //menampilkan output <p> ke web sesuai dengan jumlah data pada array hasil looping
                            echo ' 
                            <p class="occupation-x  px-4 px-md-2 fs-6 ">'.$occupation.'</p>
                            ';
                        }
                        echo '
                        </span>
                        <p class="mt-3 fs-5 txt-gray p-3 p-md-0">'.$about_row1['description'].' </p>
                    </span>               
                </div>
                        ';        
            ?>
            </div>
        </div>
        <!-- About Banner 1^-->
       <!-- About Banner 2-->
       <div class="card shadow-lg bg-dark  full-height mt-4 mt-md-5 mx-4" >
            <div class="container-fluid  h-100 d-flex flex-column flex-md-row align-items-center justify-content-around "  >
            <?php           
                //memecah data pada column title  menjadi sebuah array berdasarkan spasi
                $title2 = explode(' ', $about_row2['title']); 
                //menggunakan data dari variabel $about_row2, dan $title sebagai output ke website    
                        echo '
                        <h1 class="mt-4 text-center fs-3 text-white px-4 pb-2 d-inline-block d-md-none">'.$title2[0]. $title2[1].' <span class="text-danger pb-2 d-inline-block d-md-none">'.$title2[2].' </span> Student</h1>
                        <div class="banner-pfp-2 mt-2 mt-md-0  order-1 order-md-2 " ></div>
                        <div class="w-md-50 text-white  d-flex flex-column justify-content-center align-items-center  order-2 order-md-1">
                          <p class=" align-self-center align-self-md-start fs-6 txt-gray">'.$about_row2['occupation'].'</p>
                            <h1 class="occupation-l ps-4 pb-2 d-none d-md-inline-block">'.$title2[0]. $title2[1].' <span class="text-danger pb-2 d-none d-md-inline-block">'.$title2[2].'</span> Student</h1>
                            <span class="mt-0 mt-md-3 ">
                                <p class="mt-3 fs-5 txt-gray p-3 p-md-0"> '.$about_row2['description'].' </p>
                            </span>               
                        </div>
                        ';        
            ?>
            </div>
        </div>
        <!-- About Banner 2^-->

        <!-- Skills & Interest Section -->
        <div class="mt-sect  container  d-flex flex-column justify-content-center align-items-center">
            <p class="snk-title pb-2 fs-4 text-white">Skill & Interest</p>
            <div class="container-fluid d-flex flex-row flex-wrap justify-content-center align-items-center">
                <!-- Skills Card -->
                <div class="col-lg-5 col-12 border border-danger shadow m-5">
                 <div class="card-header text-white fw-bold fs-4 text-center py-3">Skills</div>
                    <div class="d-flex flex-row flex-wrap p-3 ">
                    <?php
                    //Melakukan looping untuk setiap data pada tabel short_sk_card
                    if ($result_skill->num_rows > 0) {
                        while($row = $result_skill->fetch_assoc()) {        
                            //menggunakan data yang sudah di looping sebagai output ke website             
                            echo '
                            <div class="col-4  d-flex flex-column align-items-center px-3 py-3">
                                <img src='.$row['sk_card_icon'].' alt='.$row['sk_card_name'].' class="snk-icon ">
                                <span class="mt-2 fs-6 text-white">'.$row['sk_card_name'].'</span>
                            </div>
                            '; 
                        }
                    }            
                    ?>
                    </div>
                </div>      
                <!-- Skills Card^ -->
            
                <!-- Interest Card -->
                <div class="col-lg-5 col-12 border border-danger  shadow m-5">
                 <div class="card-header  text-white fw-bold fs-4 text-center py-3">Interest</div>
                    <div class="d-flex flex-row flex-wrap p-3 ">
                    <?php
                    //Melakukan looping untuk setiap data pada tabel short_intr_card
                    if ($result_interest->num_rows > 0) {
                        while($row = $result_interest->fetch_assoc()) {    
                             //Membuat satu variabel khusus, karena pada looping tertentu,
                             // satu div akan  membutuhkan class yang berbeda 
                            $padding_class = '';
                            if ($row['id'] == 1) {
                                $padding_class = 'px-3';
                            } elseif ($row['id'] == 2) {
                                $padding_class = 'px-1';
                            } else {
                                $padding_class = 'px-2';
                            }             
                            //menggunakan data yang sudah di looping sebagai output ke website     
                            echo '
                            <div class="col-4  d-flex flex-column align-items-center '.$padding_class.' py-3">
                                <img src='.$row['intr_card_icon'].' alt='.$row['intr_card_name'].' class="snk-icon ">
                                <span class="mt-2 fs-6 text-white">'.$row['intr_card_name'].'</span>
                            </div>
                            '; 
                        }
                    }              
                    ?>
                    </div>
                </div>
            </div>          
            <!-- Interest Card^ -->
            <a href="skills.php" class="btn btn-danger rounded-1 px-5 ">See More</a>
        </div>
        <!-- Skills & Interest Section ^-->

        <!-- Goal Banner -->
        <div class="card shadow-lg bg-dark  full-height-2 mt-sect mx-4" >
            <div class="container-fluid  h-100 d-flex flex-column flex-md-row align-items-center justify-content-around "  >
            <?php           
            //menggunakan data dari variabel $about_row3 sebagai output ke website    
                        echo '
                        <h1 class="banner-title text-white mt-4 pb-2 d-inline-block d-md-none">'.$about_row3['title'].'</h1>
                        <div class="banner-pfp-3 mt-2 mt-md-0" ></div>
                        <div class="w-md-50 text-white  d-flex flex-column justify-content-center align-items-center">
                            <h1 class="banner-title pb-2 d-none d-md-inline-block">'.$about_row3['title'].'</h1>
                            <span class="mt-3">
                                <span class="d-flex px-3 px-md-0 flex-row justify-content-center align-items-center ">
                                 <h3 class="occupation-l  px-2 ">'.$about_row3['occupation'].'</h3>
                                </span>
                               <p class="mt-3 fs-5 txt-gray p-3 p-md-0">'.$about_row3['description'].'</p>
                            </span>               
                        </div>
                        ';        
                        //Menutup koneksi dari database karena tidak ada lagi yang memakainya dibawah
                        $conn->close();  
            ?>
            </div>
        </div>
        <!-- Goal Banner ^-->
        <!-- Academic Background Section -->
        <div class="mt-sect d-flex flex-column justify-content-center align-items-center ">
            <p class="snk-title p-2 fs-4 text-white">Academic Background</p>
            <!-- Academic Card 1 -->
            <div class="ac-bd-l card shadow-lg acbg-w bg-dark mt-5 5 mx-5 d-flex flex-column flex-md-row justify-content-start align-items-center" >
                <img src="../asset/icon/smamuci.png" alt="SMA Muhammadiyah Cipanas" class="acbg-icon ps-0 ps-md-4 py-3 mt-2 mt-md-0 " >
                <div class="ms-0 ms-md-5 mt-3  text-white d-md-block d-flex flex-column justify-content-center align-items-center  w-100  ">
                  <p class="fs-6 txt-gray">Senior HighSchool</p>
                    <h1 class="fs-md-4 fs-5 text-center text-md-start ">SMA Muhammadiyah Cipanas<span class="fs-6 ms-2 text-danger d-none d-md-inline"> Ilmu Pengetahuan Sosial</span></h1>
                    <span class="fs-6 p-3 text-danger d-inline d-md-none">Ilmu Pengetahuan Sosial</span>
                </div>
            </div>
            <!-- Academic Card 1^ -->
            <!-- Academic Card 2 -->
            <div class="ac-bd-l card shadow-lg acbg-w bg-dark mt-5  mx-5 d-flex flex-column flex-md-row justify-content-start align-items-center" >
                <img src="../asset/icon/upj.png" alt="Universitas Pembangunan Jaya" class="acbg-icon ms-0 ms-md-2 ps-4  py-3 mt-2 mt-md-0 " >
                <div class="ms-0 ms-md-5 mt-3  text-white d-md-block d-flex flex-column justify-content-center align-items-center  w-100 ">
                  <p class="fs-6 txt-gray">University</p>
                    <h1 class="fs-md-4 fs-5 text-center text-md-start ">Universitas Pembangunan Jaya<span class="fs-6 ms-2 text-danger d-none d-md-inline">Teknik Informatika</span></h1>
                    <span class="fs-6 p-3 text-danger d-inline d-md-none">Teknik Informatika</span>
                </div>
            </div>
            <!-- Academic Card 2^ -->
        </div>
        <!-- Academic Background Section ^-->
        <!-- Footer -->
        <footer class="mt-5 shadow container-fluid text-center py-4 bg-dark text-white">
            <p class="text-center">©Copyright 2024 AtilaNFL - All Rights Reserved</p>
        </footer>
        <!-- Footer ^-->
</body>
</html>
