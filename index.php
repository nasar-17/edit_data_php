<?php
require 'connection.php';
?>
    <?php
    $query = mysqli_query($connection, 'SELECT * FROM mahasiswa');

    if($query){
        $result = array();
        while($row = mysqli_fetch_array($query)) {
            array_push($result, array(
                'nim' => $row['nim'],
                'nama' => $row['nama'],
                'program_studi' => $row['program_studi'],
                'jurusan' => $row['jurusan']
            ));
        }
    }

    echo json_encode($result);
    ?>