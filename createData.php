<?php
include 'connection.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$program_studi = $_POST['program_studi'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($connection, "INSERT INTO mahasiswa(nim, nama, program_studi, jurusan) VALUES ('$nim','$nama','$program_studi','$jurusan')");

if ($query) {
    echo json_encode(array('message' => 'Data Berhasil Dibuat'));
} else {
    echo json_encode(array('message' => 'Data Gagal Dibuat'));}