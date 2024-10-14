
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="d-flex flex-column">
            <div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top ">
                <div class="ms-5 container-fluid ">
                    <div class="nav nav-pills ">
                        <div class="nav-item  ">
                            <a href="#" class="nav-link active fw-bold text-black bg-light">Daftar</a> </div>
                    </div>       
                </div>
            </div>
            <div class="container mt-3 d-flex flex-column justify-content-center" >
                <h1 id="title">Daftar</h1>
           
                <form method="post" action="hasil.php" class="">
                    <div class="mb-3 mt-3">
                        <label id="name-label" for="name">Name</label>
                        <input required class="form-control" id="name" name="name" type="text" placeholder="🫡Hormat Kepada Ketua Guild🫡"/>
                    </div>
                    
                    <div class="mb-3 mt-3">
                        <label id="email-label" for="email">Email</label>
                        <input required class="form-control" id="email" name="email" type="email" placeholder="aowkwowkowk@gmail.com"/>
                    </div>  
                   
                    <div class="mb-3 mt-3">
                        <h3>Hobby</h3>
                        <div class="form-check">
                            <label class="type" for="hobi[]"> 
                                <input  class="form-check-input" id="main" value="main" type="checkbox" name="hobi[]">main 
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="type" for="hobi[]"> 
                                <input  class="form-check-input" id="tidur" value="tidur" type="checkbox" name="hobi[]">tidur
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="type" for="hobi[]"> 
                                <input  class="form-check-input" id="makan" value="makan" type="checkbox" name="hobi[]">makan
                            </label>   
                        </div>                    
                    </div>
                    <div class="mb-3 mt-3">
                        <h3>Jenis Kelamin</h3>
                        <div class="form-check">  
                            <label class="type" for="laki"> 
                                <input required class="form-check-input" id="laki" value="Laki-Laki" type="radio" name="jenis-kelamin">Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="type" for="pr"> 
                                <input required class="form-check-input" id="pr" value="Perempuan" type="radio" name="jenis-kelamin">Perempuan
                            </label>                             
                    </div>
                    <div class="mb-3 mt-3">
                        <h3>Tanggal Lahir</h3>
                        <div class="form-date">  
                                <input required id="sas" type="date" name="tanggal-lahir">
                        </div>
                    </div>
                    <div class="container mt-5">
                        <button class="btn btn-dark" type="submit">Konfirmasi</button>
                        <button class="btn btn-dark" type="reset">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
        
    </body>
</html>
