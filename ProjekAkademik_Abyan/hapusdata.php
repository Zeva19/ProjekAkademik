<?php
include "koneksi.php";
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM pengguna WHERE id_pengguna='$id'") or die(mysqli_error($conn));

header("location:data_pengguna.php");
?>
a