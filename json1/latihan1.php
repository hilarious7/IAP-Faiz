<?php

// $mahasiswa = [
//     [
//         'nama' => "Muhammad Raja Faiz",
//         'NIM' => "2217020165",
//         'jurusan' => 'Sistem Informasi'
//     ],
//     [
//         'nama' => "Fathir Ramadhano Noerman",
//         'NIM' => "2217020153",
//         'jurusan' => 'Sistem Informasi'
//     ] 
// ];

$dbh = new PDO('mysql:host=localhost;dbname=db_mahasiswa', 'root', '');
$db = $dbh->prepare("SELECT * FROM mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;

?>

