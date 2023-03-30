<?php
//koneksi ke database 
include 'koneksi.php';
//menangkap data yang dikirim dari form
$nim = $_POST ['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

// menginput data ke databse
mysqli_query($koneksi, "INSERT into mahasiswa values('','$nim','$nama','$alamat')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>