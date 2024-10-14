
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
    <?php
        require 'koneksi.php';
        
        $user_data = "SELECT * FROM Users";
        $result = $conn->query($user_data);
        
      
    ?>
        <div class="d-flex flex-column">
            <div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top ">
                <div class="ms-5 container-fluid ">
                    <div class="nav nav-pills ">
                        <div class="nav-item  ">
                            <a href="formulir.php" class="nav-link  fw-bold text-white ">Daftar</a> 
                        </div>
                        <div class="nav-item ms-3 ">
                            <a href="#" class="nav-link active fw-bold text-black bg-light">User List</a> 
                        </div>
                    </div>       
                </div>
            </div>
            <div class="container mt-3 d-flex flex-column justify-content-center" >
                <h1 id="title">Tabel User</h1>
                <div class="rounded-2 overflow-hidden">
                <table class="table mb-0">
                    <thead class="table-dark ">
                        <tr>
                            <th class="p-3 border-0">No</th>
                            <th class="p-3 border-0">Nama</th>
                            <th class="p-3 border-0">Email</th>
                            <th class="p-3 border-0">Hobi</th>
                            <th class="p-3 border-0">Jenis Kelamin</th>
                            <th class="p-3 border-0">Tanggal Lahir</th>
                            <th class="p-3 border-0">Umur</th>
                        </tr>
                    </thead>
                    <tbody class="table-light ">
                        <?php 
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<tr class="border-0">
                                    <td class="p-3 border-0">' . $row["id"] . '</td>
                                    <td class="p-3 border-0">' . $row["nama"] . '</td>
                                    <td class="p-3 border-0">' . $row["email"] . '</td>
                                    <td class="p-3 border-0">' . $row["hobi"] . '</td>
                                    <td class="p-3 border-0">' . $row["jenis_kelamin"] . '</td>
                                    <td class="p-3 border-0">' . $row["tanggal_lahir"] . '</td>
                                    <td class="p-3 border-0">' . (isset($row["umur"]) ? $row["umur"] . ' Tahun' : 'Data not available') . '</td>
                                </tr>';
                            }
                        } else {
                            echo '<tr><td colspan="7" class="text-center border-0">No results found</td></tr>';
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
                </div>    
            </div>
        </div>
        
    </body>
</html>