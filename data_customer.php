<?php
// Memastikan session hanya dimulai jika belum aktif
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['customer'])) {
    $_SESSION['customer'] = [
        ['id' => 1, 'nama_customer' => 'leo', 'email' => 'leo@example.com', 'no_telepon' => '081234567890'],
        ['id' => 2, 'nama_customer' => 'Aban', 'email' => 'Aban@example.com', 'no_telepon' => '081234567891'],
        ['id' => 3, 'nama_customer' => 'aldi', 'email' => 'aldi@example.com', 'no_telepon' => '081234567892'],
    ];
}

$customer = &$_SESSION['customer'];

// Fungsi untuk mengubah nama customer berdasarkan ID
function ubahNamaCustomer(&$customers, $id, $namaBaru) {
    foreach ($customers as &$c) {
        if ($c['id'] === $id) {
            $c['nama_customer'] = $namaBaru;
            return true; // Mengindikasikan perubahan berhasil
        }
    }
    return false; // Jika ID tidak ditemukan
}

