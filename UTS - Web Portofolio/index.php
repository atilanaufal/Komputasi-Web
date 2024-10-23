<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atila NFL Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/style.css?v=1.0" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-dark">
<?php
    //Menyambungkan file koneksi.php ke file yang di inginkan
    include 'services/koneksi.php';
    
    //Mengambil satu baris data dari tabel home_bnner
    $home = "SELECT * FROM home_banner ORDER BY id LIMIT 1 ";
    $result_home = $conn->query($home);
    $home_data = $result_home->fetch_assoc();
   
    //Mengambil seluruh baris data dari tabel short_sk_card
    $skill = "SELECT * FROM short_sk_card";
    $result_skill = $conn->query($skill);
    
    //Mengambil seluruh baris data dari tabel short_intr_card
    $interest = "SELECT * FROM short_intr_card";
    $result_interest = $conn->query($interest);
    
    //Mengambil seluruh baris data dari tabel short_prjt_card
    $project = "SELECT * FROM short_prjt_card";
    $result_project = $conn->query($project);
?>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top shadow-sm ">
            <div class="container-fluid p-1 p-md-2 ms-0 ms-md-4 ">
                <!-- Nav Menu -->
                <div class="navbar-nav mx-auto  ms-md-5 d-flex flex-row p-2 ">
                    <a href="" class="nav-link   nav-text-color-active ms-0 ms-md-3 ">Home</a>
                    <a href="pages/about.php" class="nav-link  nav-text-color ms-4 ms-md-3">About</a>
                    <a href="pages/project.php" class="nav-link nav-text-color ms-4 ms-md-3">Projects</a>
                    <a href="pages/skills.php" class="nav-link  nav-text-color ms-4 ms-md-3">Skills</a>
                    <a href="pages/contact.php" class="nav-link nav-text-color ms-4 ms-md-3">Contact</a>
                </div>
                <!-- Nav Menu ^ -->
            </div>
        </nav>

        <!-- Navigation Bar ^-->

        <!-- Home Banner -->
        <div class="container-fluid  full-height mt-2 mt-md-0" >
            <div class="container-fluid  h-100 d-flex flex-column flex-md-row align-items-center justify-content-around "  >
                <div class="w-md-50 text-white order-2 order-md-1 p-3 p-md-0">
                    <?php
                    //memecah data pada column title  menjadi sebuah array berdasarkan spasi
                    $title = explode(' ', $home_data['title']); 
                    //memasukan data dari variabel $home_data sebagai output ke website     
                    echo '
                    <p class="occupation ps-2 fs-6">'.$home_data['occupation'].'</p>
                    <h1 class="fs-1">'.$title[0].'<span class="text-danger">'.$title[1].'</span></h1>
                    <p class="mt-3 fs-5 txt-gray ">'.$home_data['description'].'</p>
                    ';
                    ?>
                    <div class="text-center mt-4 d-flex flex-sm-row flex-column justify-content-start">
                        <a href="pages/about.php" class="btn btn-danger rounded-1 mt-1 px-4">Read More</a>
                        <a href="pages/contact.php" class="ms-sm-4 ms-0 btn btn-dark border border-danger text-danger rounded-1 mt-sm-1 mt-2 px-4">Contact Me</a>
                    </div>
                </div>
                <div class="banner-pfp order-1 order-md-2 " >
              
                </div>
            </div>
        </div>
        <!-- Home Banner ^-->

        <!-- Skills & Interest Section -->
        <div class="ft-prj-mt  container  d-flex flex-column justify-content-center align-items-center">
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
            <a href="pages/skills.php" class="btn btn-danger rounded-1 px-5 ">See More</a>
        </div>
        <!-- Skills & Interest Section ^-->

        <!-- Project Section -->
        <div class="ft-prj-mt  container d-flex flex-column justify-content-center align-items-center">
            <p class="snk-title p-2 fs-4 text-white">Featured Project</p>
                <div class="mt-5 w-100 d-flex flex-row flex-wrap  justify-content-between align-items-between">
                <?php
                //Melakukan looping untuk setiap data pada tabel short_prjt_card
                    if ($result_project->num_rows > 0) {
                        while($row = $result_project->fetch_assoc()) {               
                             //menggunakan data yang sudah di looping sebagai output ke website      
                             //pada looping yang id nya adalah 1, kita gunakan ternary untuk memberikan 
                             //class mb-5 untuk id 1 dan berikan class mb-0 untuk id seterusnya
                            echo '
                            <!-- Project '.$row['id'].' -->
                            <div class="col-md-5  col-12 '.(($row['id'] == 1) ? "mb-5" : "mb-0").'">
                            <div class="card bg-dark border border-danger rounded-0">
                                <img src='.$row['prjt_card_image'].' class="card-img-top img-fluid rounded-0" alt="Project 1" style=" '.(($row['id'] == 1) ? "object-fit: cover;" : "object-fit: auto;").'  height:300px">
                                <div class="card-body p-4">
                                    <h5 class="card-title text-white">'.$row['prjt_card_name'].'</h5>
                                    <p class="card-text text-white">'.$row['prjt_card_desc'].'</p>
                                    <a href='.$row['prjt_card_link'].' class="btn btn-danger">Learn More</a>
                                </div>
                            </div>
                            </div>
                            <!-- Project '.$row['id'].'^ -->
                            '; 
                        }
                    } 
                    //Menutup koneksi dari database karena tidak ada lagi yang memakainya dibawah
                    $conn->close();    
                    ?>
            </div>
            <a href="pages/project.php" class="btn btn-danger rounded-1 mt-md-3 mt-5 px-5">See More</a>
        </div>
        <!-- Projects Section ^-->

        <!-- Footer -->
        <footer class="mt-5 shadow container-fluid text-center py-4 bg-dark text-white">
            <p class="text-center">©Copyright 2024 AtilaNFL - All Rights Reserved</p>
        </footer>
        <!-- Footer ^-->
</body>
</html>



