<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$Alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$Alamat','$jurusan')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");


//copyright faris iman rozandi
?>

