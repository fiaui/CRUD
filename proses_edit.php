<?php

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$id = $_POST['id'];

$database = new PDO("mysql:host=localhost;dbname=sekolah3", 'root', '');
$query = $database->query("UPDATE `siswa` SET nama='$nama', kelas='$kelas' where id='$id'");

if($query){
    header("Location:index.php");
}