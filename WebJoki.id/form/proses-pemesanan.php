<?php
// Ambil data dari form
$nama     = htmlspecialchars($_POST['nama']);
$wa       = htmlspecialchars($_POST['wa']);
$layanan  = htmlspecialchars($_POST['layanan']);
$catatan  = htmlspecialchars($_POST['catatan']);

// Nomor admin WebJoki (ganti dengan nomor aslimu)
$admin_no = "6285824123702";

// Buat pesan
$pesan = "Halo WebJoki.id! Saya ingin memesan layanan berikut:\n\n"
       . "📌 Nama: $nama\n"
       . "📱 No. WA: $wa\n"
       . "💼 Layanan: $layanan\n"
       . "📝 Catatan: $catatan";

// Encode untuk URL WhatsApp
$pesan_encoded = urlencode($pesan);

// Redirect ke WhatsApp admin
header("Location: https://wa.me/$admin_no?text=$pesan_encoded");
exit();
