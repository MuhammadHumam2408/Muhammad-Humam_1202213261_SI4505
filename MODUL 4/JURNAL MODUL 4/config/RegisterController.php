<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi

    // a. Ambil nilai input email
    $email = $_POST['email'];
    // b. Ambil nilai input name
    $nama = $_POST['name'];
    // c. Ambil nilai input username
    $username = $_POST['username'];
    // d. Ambil nilai input password
    $password = $_POST['password'];
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()
    $hash = password_hash($password, PASSWORD_DEFAULT);

//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$query_email = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($db, $query_email);
//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
if(mysqli_num_rows($result) == 0) {
    // a. Buatlah query untuk melakukan insert data ke dalam database
    $query_insert = "INSERT INTO users (email, name, username, password) VALUES ('$email', '$nama', '$username', '$hash')";
    $insert = mysqli_query($db, $query_insert);
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
    if($insert) {
        $_SESSION['message'] = 'Pendaftaran Sukses, Silahkan Login';
        $_SESSION['color'] = 'success';
        header('Location: ../login.php');
    } else {
        $_SESSION['message'] = 'Pendaftaran Gagal';
    }

// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar
} else {
    $_SESSION['message'] = 'Email sudah terdaftar';
    header('Location ../register.php');
}
//

?>