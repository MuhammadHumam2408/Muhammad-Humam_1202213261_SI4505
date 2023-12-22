<?php

// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "tugas3_wad_humam");

// Fungsi Baca Data (Read)
function read($query) {
  global $conn;
  
  $result = mysqli_query($conn, $query);  
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Fungsi Insert Data (Create)
function create($data) {

  global $conn;
  
  $id = $data["id_motor"];
  $nama = $data["nama_motor"];
  $merk = $data["merk_motor"];  
  $warna = $data["warna_motor"];
  $harga = $data["harga_motor"];
   
  $query = "INSERT INTO data_motor  
                (id_motor, nama_motor, merk_motor,  
                 warna_motor, harga_motor) 
           VALUES 
               ('$id', '$nama', '$merk', 
                '$warna', '$harga')";
               
  mysqli_query($conn, $query);  
  
  return mysqli_affected_rows($conn);

}

// Fungsi Update Data (Update) 
function update($data) {

  global $conn;

  $id = $data["id_motor"];
  $nama = $data["nama_motor"];
  $merk = $data["merk_motor"];
  $warna = $data["warna_motor"];
  $harga = $data["harga_motor"];
  
  $query = "UPDATE data_motor SET
               nama_motor = '$nama',
               merk_motor = '$merk',
               warna_motor = '$warna',
               harga_motor = '$harga'
            WHERE id_motor = '$id'";
           
  mysqli_query($conn, $query);
  
  return mysqli_affected_rows($conn);

}

?>