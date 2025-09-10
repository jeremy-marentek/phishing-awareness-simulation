<?php
session_start();
$email = $_SESSION['email'] ?? '';
$password = $_SESSION['password'] ?? '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Simulasi Phishing - Edukasi</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; margin-top: 50px;">
    <h1>⚠️ SIMULASI PHISHING</h1>
    <p>Anda barusan memasukkan data berikut ke situs palsu:</p>
    <p><strong>Email/Username:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Password:</strong> <?= htmlspecialchars($password) ?></p>
    <hr>
    <p><strong>Pelajaran:</strong> Jangan pernah masukkan password pada link mencurigakan!<br>
    Selalu periksa URL dengan teliti sebelum login.</p>
</body>
</html>
