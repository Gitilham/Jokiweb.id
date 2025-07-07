<?php include __DIR__ . '/inc/header.php'; ?>

<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f6f9;
  }

  h2 {
    text-align: center;
    margin-top: 40px;
    margin-bottom: 30px;
    font-weight: 700;
    color: #0d6efd;
  }

  /* Animasi muncul dari bawah */
  @keyframes fadeSlideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .card {
    background: #ffffff;
    border-radius: 12px;
    padding: 1.8rem;
    margin-bottom: 2.5rem;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
    opacity: 0;
    animation: fadeSlideUp 0.7s ease forwards;
  }

  .card:nth-of-type(1) { animation-delay: 0.2s; }
  .card:nth-of-type(2) { animation-delay: 0.4s; }
  .card:nth-of-type(3) { animation-delay: 0.6s; }
  .card:nth-of-type(4) { animation-delay: 0.8s; }

  .card h3 {
    color: #0d6efd;
    font-size: 1.6rem;
    margin-bottom: 0.6rem;
  }

  .card p {
    font-size: 1rem;
    color: #444;
    margin-bottom: 0.5rem;
  }

  .btn-wa, .btn-demo {
    display: inline-block;
    padding: 0.5rem 1.4rem;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.95rem;
    margin-top: 8px;
  }

  .btn-wa {
    background-color: #25d366;
    color: white;
    margin-right: 10px;
  }

  .btn-wa:hover {
    background-color: #1ea958;
  }

  .btn-demo {
    background-color: #0d6efd;
    color: white;
  }

  .btn-demo:hover {
    background-color: #0b58c5;
  }

  .template-grid {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin: 1.2rem 0;
  }

  .template-item {
    flex: 1 1 calc(33.333% - 1rem);
    background: #f9f9f9;
    border: 1px solid #e1e1e1;
    border-radius: 10px;
    padding: 0.8rem;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
  }

  .template-item img {
    width: 100%;
    height: 140px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
  }

  @media (max-width: 768px) {
    .template-item {
      flex: 1 1 100%;
    }
  }
</style>

<div class="container">
  <h2>Layanan Kami</h2>

  <!-- Template Card -->
  <?php
  $layanan = [
    [
      'judul' => 'Tugas Dasar HTML/CSS',
      'deskripsi' => 'Layanan untuk mahasiswa yang membutuhkan website statis sederhana.',
      'harga' => 'Rp50.000',
      'whatsapp' => 'Tugas%20Dasar%20HTML%2FCSS',
      'folder' => 'htmlcss',
    ],
    [
      'judul' => 'Portofolio Diri',
      'deskripsi' => 'Website personal untuk CV, proyek, kontak, dan branding diri.',
      'harga' => 'Rp100.000',
      'whatsapp' => 'Portofolio%20Diri',
      'folder' => 'portofolio',
    ],
    [
      'judul' => 'Toko Online',
      'deskripsi' => 'Layanan untuk UMKM menampilkan produk dan kontak WhatsApp.',
      'harga' => 'Rp150.000',
      'whatsapp' => 'Toko%20Online',
      'folder' => 'toko',
    ],
    [
      'judul' => 'Website Permintaan Khusus',
      'deskripsi' => 'Layanan custom seperti blog, company profile, atau landing page.',
      'harga' => 'Mulai dari Rp200.000 (tergantung kebutuhan)',
      'whatsapp' => 'Permintaan%20Khusus',
      'folder' => 'khusus',
    ],
  ];

  foreach ($layanan as $index => $data):
  ?>
    <div class="card">
      <h3><?= $data['judul'] ?></h3>
      <p><?= $data['deskripsi'] ?></p>
      <p><strong>Harga:</strong> <?= $data['harga'] ?></p>

      <div class="template-grid">
        <?php for ($i = 1; $i <= 3; $i++): ?>
          <div class="template-item">
            <img src="assets/img/<?= $data['folder'] . '-' . $i ?>.jpg" alt="Template <?= $i ?>">
            <a href="demo/htmlcss-1/" class="btn-demo">Preview</a>
          </div>
        <?php endfor; ?>
      </div>

      <a href="https://wa.me/6285824123702?..." class="btn-wa">Pesan via WhatsApp</a>

    </div>
  <?php endforeach; ?>
</div>

<?php include __DIR__ . '/inc/footer.php'; ?>
