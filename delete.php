<?php 
include "connection.php";
parse_str(file_get_contents('php://input'), $put);
$nim = $put['nim'];

$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
$sql = mysqli_query($connection, $query);

if ($sql) {
    echo json_encode(array('message' => 'Data Berhasil Dihapus'));
} else {
    echo json_encode(array('message' => 'Data Gagal Dihapus'));
    }