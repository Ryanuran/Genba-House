<?php
include "Pemesanan2.php";  // Changed from file2.php to match the actual filename
$Nama = $_REQUEST['Nama'];
$Alamat = $_REQUEST['Alamat'];
$tipe = $_REQUEST['tipe'];  // Changed from Tipe to tipe to match form field name
$Jumlah = $_REQUEST['Jumlah'];
$No_telp = $_REQUEST['No_telp'];
$Id_Pengiriman = $_REQUEST['Id_Pengiriman'];
$Id_Mitra = $_REQUEST['Id_Mitra'];

$mysqli = "INSERT INTO tb_penjualan (Nama, Alamat, Tipe, Jumlah, No_telp, Id_Pengiriman, Id_Mitra) 
           VALUES ('$Nama', '$Alamat', '$tipe', '$Jumlah', '$No_telp', '$Id_Pengiriman', '$Id_Mitra')";
$result = mysqli_query($conn, $mysqli);
if($result){
    echo "input berhasil";
}else{
    echo "input gagal";
}
mysqli_close($conn);
?>