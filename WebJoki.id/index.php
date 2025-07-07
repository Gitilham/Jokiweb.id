<?php include __DIR__ . '/inc/header.php'; ?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    line-height: 1.6;
  }

  .hero {
    background: linear-gradient(to right, #0d6efd, #0b5ed7);
    color: white;
    padding: 3rem 1rem;
    border-radius: 10px;
    margin-bottom: 2rem;
    transition: all 0.3s ease-in-out;
  }

  .hero h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
  }

  .card {
    border: none;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
  }

  .card-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
  }

  ul li {
    margin-bottom: 0.5rem;
    font-size: 1.05rem;
  }

  .btn-wa {
    background-color: #25d366;
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    font-size: 1.1rem;
    border-radius: 50px;
    transition: background-color 0.3s ease, transform 0.2s;
  }

  .btn-wa:hover {
    background-color: #1ebe5d;
    transform: scale(1.05);
    text-decoration: none;
  }

  .mt-5 {
    margin-top: 4rem !important;
  }

  .text-center h4 {
    font-weight: 600;
    font-size: 1.5rem;
  }
</style>

<div class="hero shadow-sm text-center">
  <h2 class="fw-bold">Selamat Datang di WebJoki.id</h2>
  <p>Kami menyediakan layanan pembuatan website cepat dan terjangkau untuk mahasiswa, UMKM, guru, dan freelancer. Cukup isi data, kirim permintaan, dan website Anda langsung kami kerjakan!</p>
</div>

<div class="row g-4">
  <div class="col-md-6">
    <div class="card border-info h-100 shadow-sm">
      <div class="card-body">
        <h5 class="card-title text-info">Mengapa Memilih Kami?</h5>
        <ul class="mb-0">
          <li>✅ Proses cepat dan mudah</li>
          <li>✅ Harga mahasiswa & UMKM</li>
          <li>✅ Tersedia berbagai jenis website</li>
          <li>✅ Bisa langsung pesan via WhatsApp</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card border-success h-100 shadow-sm">
      <div class="card-body">
        <h5 class="card-title text-success">Layanan Unggulan</h5>
        <ul class="mb-0">
          <li><strong>Tugas Dasar HTML/CSS</strong> – Website untuk tugas kuliah.</li>
          <li><strong>Portofolio Diri</strong> – Untuk mahasiswa & freelancer.</li>
          <li><strong>Toko Online</strong> – Menampilkan produk UMKM.</li>
          <li><strong>Permintaan Khusus</strong> – Website sesuai kebutuhanmu.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="text-center mt-5">
  <h4>Siap Buat Website?</h4>
  <a href="pemesanan.php" class="btn btn-wa btn-lg mt-2">Klik untuk Pesan Sekarang &raquo;</a>
</div>

<?php include __DIR__ . '/inc/footer.php'; ?>
