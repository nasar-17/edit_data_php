<?php 
include "connection.php";
parse_str(file_get_contents('php://input'), $put);
$nim = $put['nim'];
$nama = $put['nama'];
$program_studi = $put['program_studi'];
$jurusan = $put['jurusan'];

$query = mysqli_query($connection, "UPDATE mahasiswa SET nama ='$nama', program_studi = '$program_studi', jurusan = '$jurusan' WHERE nim='$nim'");

if ($query) {
    echo json_encode(array('message' => 'Data Berhasil Diubah'));
} else {
    echo json_encode(array('message' => 'Data Gagal Diubah'));
    }