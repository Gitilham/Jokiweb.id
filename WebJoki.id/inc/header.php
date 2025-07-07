<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebJoki.id - Jasa Website Kilat</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons (Optional) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }

    header {
      background-color: #0d6efd;
      color: white;
      padding: 1.5rem 0;
      text-align: center;
    }

    header h1 {
      font-size: 2rem;
      font-weight: 700;
      margin: 0;
    }

    header p {
      margin: 0.25rem 0 1rem;
      font-size: 1rem;
      opacity: 0.9;
    }

    nav {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-top: 0.5rem;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      padding: 0.5rem 1rem;
      transition: background 0.3s ease;
      border-radius: 25px;
    }

    nav a:hover,
    nav a.active {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .container {
      max-width: 1140px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
  </style>
</head>
<body>

<header>
  <h1>WebJoki.id</h1>
  <p>Layanan Website Kilat untuk Tugas & UMKM</p>
  <nav>
    <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Beranda</a>
    <a href="layanan.php" class="<?= basename($_SERVER['PHP_SELF']) == 'layanan.php' ? 'active' : '' ?>">Layanan</a>
    <a href="pemesanan.php" class="<?= basename($_SERVER['PHP_SELF']) == 'pemesanan.php' ? 'active' : '' ?>">Pemesanan</a>
    <a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">Tentang</a>
    <a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Kontak</a>
  </nav>
</header>

<div class="container">
