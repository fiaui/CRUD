<?php

$id = $_GET['id'];

$database = new PDO("mysql:host=localhost;dbname=sekolah3", 'root', '');
$query = $database->query("DELETE FROM siswa where id='$id'");

if($query){
    header("Location:index.php");
}