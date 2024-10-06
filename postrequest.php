<?php

// URL API tujuan
$url = 'https://jsonplaceholder.typicode.com/posts';

$postId = 1; //id yang ingin dihapus

// Data yang akan dikirim (format array PHP)
$data = array(
    'title' => 'Tugas Praktikum Interoperabilitas API Dasar dengan PHP',
    'body' => 'POST request untuk mengirim data',
    'userId' => 22
);

// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk metode POST dan kirim data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Tampilkan respon dari server
echo $response;