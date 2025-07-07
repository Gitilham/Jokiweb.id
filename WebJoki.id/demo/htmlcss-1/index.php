<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Preview Template - HTMLCSS 1</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #f8f9fa;
      color: #333;
    }

    .container {
      max-width: 900px;
      margin: 2rem auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      padding: 2rem;
    }

    h1 {
      color: #007bff;
      text-align: center;
    }

    img.preview {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 1.5rem;
      border: 1px solid #ddd;
    }

    .info {
      margin-bottom: 1.5rem;
    }

    .info p {
      font-size: 1.1rem;
    }

    .btn-wa, .btn-back {
      display: inline-block;
      background-color: #25d366;
      color: white;
      padding: 0.6rem 1.4rem;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s;
      margin-top: 1rem;
      margin-right: 1rem;
    }

    .btn-back {
      background-color: #6c757d;
    }

    .btn-wa:hover {
      background-color: #1ea958;
    }

    .btn-back:hover {
      background-color: #5a6268;
    }

    .payment {
      background: #f1f1f1;
      padding: 1rem;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .payment h3 {
      margin-top: 0;
      color: #333;
    }

    footer {
      text-align: center;
      padding: 1rem;
      margin-top: 3rem;
      font-size: 0.9rem;
      color: #888;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Preview - Tugas HTML/CSS (Template 1)</h1>
  <img src="preview.jpg" alt="Preview Template HTMLCSS 1" class="preview" />

  <div class="info">
    <p><strong>Deskripsi:</strong> Template ini cocok untuk mahasiswa yang butuh website tugas statis sederhana.</p>
    <p><strong>Harga:</strong> Rp50.000</p>

    <a href="https://wa.me/6285824123702?text=Halo%20saya%20ingin%20memesan%20template%20HTMLCSS%201" target="_blank" class="btn-wa">Pesan via WhatsApp</a>
    <a href="../../layanan.php" class="btn-back">Kembali ke Layanan</a>
  </div>

  <div class="payment">
    <h3>Metode Pembayaran</h3>
    <ul>
      <li>Bank BRI - 1234 5678 9101 (a.n WebJoki Studio)</li>
      <li>QRIS All Payment (akan dikirim setelah pemesanan)</li>
    </ul>
    <p>📩 Kirim bukti pembayaran melalui WhatsApp setelah transfer.</p>
  </div>
</div>

<footer>
  &copy; 2025 WebJoki.id - Template Preview
</footer>

</body>
</html>
