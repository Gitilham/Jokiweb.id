<?php include 'inc/header.php'; ?>

<style>
  h2 {
    text-align: center;
    margin-top: 40px;
    margin-bottom: 30px;
    font-weight: 600;
    color: #198754;
  }

  .card {
    background: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 12px;
    padding: 2rem;
    margin-bottom: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }

  form label {
    font-weight: 500;
    color: #333;
    display: block;
    margin-bottom: 10px;
  }

  input[type="text"],
  select,
  textarea {
    width: 100%;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #ced4da;
    margin-top: 5px;
    font-size: 1rem;
  }

  textarea {
    resize: vertical;
  }

  .btn-wa {
    background-color: #25d366;
    color: white;
    padding: 0.6rem 1.5rem;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    margin-top: 15px;
    border: none;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .btn-wa:hover {
    background-color: #1ea958;
  }
</style>

<h2>Formulir Pemesanan</h2>

<div class="card">
  <form onsubmit="return redirectToWA()">
    <label>
      Nama Lengkap:
      <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
    </label>

    <label>
      No. WhatsApp:
      <input type="text" name="wa" placeholder="Contoh: 081234567890" required>
    </label>

    <label>
      Pilih Layanan:
      <select name="layanan" required>
        <option value="">-- Pilih Layanan --</option>
        <option value="Tugas Dasar HTML/CSS">Tugas Dasar HTML/CSS</option>
        <option value="Portofolio Diri">Portofolio Diri</option>
        <option value="Toko Online">Toko Online</option>
        <option value="Permintaan Khusus">Permintaan Khusus</option>
      </select>
    </label>

    <label>
      Catatan Tambahan:
      <textarea name="catatan" placeholder="Contoh: warna tema, deadline, dsb." rows="4"></textarea>
    </label>

    <button type="submit" class="btn-wa">Kirim via WhatsApp</button>
  </form>
</div>

<script>
  function redirectToWA() {
    const nama = document.querySelector('[name=nama]').value.trim();
    const waInput = document.querySelector('[name=wa]').value.trim();
    const layanan = document.querySelector('[name=layanan]').value;
    const catatan = document.querySelector('[name=catatan]').value.trim();

    // Validasi input kosong
    if (!nama || !waInput || !layanan) {
      alert("Harap isi semua data yang wajib.");
      return false;
    }

    // Validasi nomor WA (wajib angka dan panjang minimal 10 karakter)
    if (!/^0[0-9]{9,13}$/.test(waInput)) {
      alert("Format nomor WhatsApp tidak valid. Gunakan format: 08xxxx...");
      return false;
    }

    // Konversi nomor WA ke format internasional (62...)
    const wa = waInput.replace(/^0/, "62");

    const adminNo = "6285824123702"; // Nomor WA admin
    const message = `Halo WebJoki.id! Saya ingin memesan:\n\n` +
                    `📌 Nama: ${nama}\n` +
                    `📱 No. WA: ${waInput}\n` +
                    `💼 Layanan: ${layanan}\n` +
                    `📝 Catatan: ${catatan || '-'}`;

    const waUrl = `https://wa.me/${adminNo}?text=${encodeURIComponent(message)}`;

    window.open(waUrl, '_blank'); // buka WA di tab baru
    return false; // cegah submit form default
  }
</script>

<?php include 'inc/footer.php'; ?>
