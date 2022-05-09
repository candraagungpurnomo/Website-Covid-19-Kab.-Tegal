<?php
session_start();
include"koneksi.php"; // masukan konekasi DB
// ambil variable data 
$kecamatan=$_POST['kecamatan'];
$jml=$_POST['jml'];
$idkec = @$_GET['idkec']; // ambil data ID di URL
//Proses query update
$update=mysqli_query($conn,"update covidsembuh set kecamatan='$kecamatan', jml='$jml' where idkec='$idkec'");
if($update){

// pesan dengan sistem session
$_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil diupdate.</font>';
header("location:tampil_data.php"); // kembali ke halaman tampil
}else{
echo "Gagal update data!";
}
?>