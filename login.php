<?php
// 1. HARUS ADA SESSION START DI PALING ATAS
session_start();
include "koneksi.php";

// Jika sudah login, langsung lempar ke admin
if (isset($_SESSION['username'])) { 
    header("location:admin.php"); 
    exit;
}

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST['user'];
    $passInput = $_POST['pass'];
    $password_md5 = md5($passInput); // Untuk cek ke database

    // 2. CEK KE DATABASE (Sesuai struktur yang kamu mau sebelumnya)
    $stmt = $conn->prepare("SELECT username FROM user WHERE username=? AND password=?");
    $stmt->bind_param("ss", $userInput, $password_md5);
    $stmt->execute();
    $hasil = $stmt->get_result();
    $row = $hasil->fetch_array(MYSQLI_ASSOC);

    if (!empty($row)) {
        // JIKA BERHASIL: Buat Session dan Pindah Halaman
        $_SESSION['username'] = $row['username'];
        header("location:admin.php");
        exit;
    } else {
        // JIKA GAGAL: Buat pesan error untuk ditampilkan di bawah
        $error_message = '
        <div class="row mt-3">
            <div class="col-12 col-sm-6 col-md-4 m-auto">
                <div class="alert alert-warning text-center rounded-5" role="alert">
                    user : ' . htmlspecialchars($userInput) . '<br>
                    pass : ' . htmlspecialchars($passInput) . '<br>
                    <strong>Username dan Password Salah</strong>
                </div>
            </div>
        </div>';
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | My Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="icon" href="img/logo.png" />
</head>
<body class="bg-danger-subtle">

<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 m-auto">
      <div class="card border-0 shadow rounded-5">
        <div class="card-body">
          <div class="text-center mb-3">
            <i class="bi bi-person-circle h1 display-4"></i>
            <p>My Daily Journal</p>
            <hr />
          </div>
          <form action="" method="post">
            <input type="text" name="user" class="form-control my-4 py-2 rounded-4" placeholder="Username" required />
            <input type="password" name="pass" class="form-control my-4 py-2 rounded-4" placeholder="Password" required />
            <div class="text-center my-3 d-grid">
              <button class="btn btn-danger rounded-4">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <?php echo $error_message; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>