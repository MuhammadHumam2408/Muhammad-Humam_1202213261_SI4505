<?php
$conn = mysqli_connect("localhost:3308","root","","tugas3_wad_humam");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $ID = $data ["id_motor"];
    $NAMA = $data ["nama_motor"];
    $MERK = $data ["merk_motor"];
    $WARNA = $data ["warna_motor"];
    $HARGA = $data ["harga_motor"];

    $query = "INSERT INTO data_motor (id_motor, nama_motor, , merk_motor, warna_motor, harga_motor) VALUES ('$ID','$NAMA','$MERK','$WARNA','$HARGA')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function hapus($plt){
    global $conn;
    mysqli_query($conn,"DELETE FROM data_motor WHERE id_motor = '$plt'") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>