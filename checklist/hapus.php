<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM checklist WHERE id = '{$id}'";
$result = mysqli_query($koneksi, $sql);
header('location: index.php');
?>