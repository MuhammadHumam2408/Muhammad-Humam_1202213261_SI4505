<?php 
require 'function.php';



 if (isset( $_POST ["submit"])) {
    $ID = $_POST ["id_motor"];
    $NAMA = $_POST ["nama_motor"];
    $MERK = $_POST ["merk_motor"];
    $WARNA = $_POST ["warna_motor"];
    $HARGA = $_POST ["harga_motor"];

    $query = "INSERT INTO data_motor (id_motor, nama_motor, , merk_motor, warna_motor, harga_motor) VALUES ('$ID','$NAMA','$MERK','$WARNA','$HARGA')";


    mysqli_query($conn,$query);
    

    
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAMS MOTOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Tugas1/index.php">
        
        MAMS MOTOR
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="KODE" class="form-label">ID PRODUK :</label>
                <input type="text" class="form-control" id="id_motor" name ="id_motor" required>
            </div>
            <div class="mb-3">
                <label for="MODEL" class="form-label">NAMA PRODUK :</label>
                <input type="text" class="form-control" id="nama_motor" name ="nama_motor" required>
            </div>
            <div class="mb-3">
                <label for="MEREK" class="form-label">MERK PRODUK :</label>
                <input type="text" class="form-control" id="merk_motor" name ="merk_motor" required>
            </div>
            <div class="mb-3">
                <label for="MEREK" class="form-label">WARNA PRODUK :</label>
                <input type="text" class="form-control" id="warna_motor" name ="warna_motor" required>
            </div>
            <div class="mb-3">
                <label for="HARGA" class="form-label">HARGA :</label>
                <input type="text" class="form-control" id="harga_motor" name ="harga_motor" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>