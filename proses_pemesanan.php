<?php
// Database connection configuration
$servername = "localhost";
$username = "root";     // Default XAMPP username
$password = "";         // Default XAMPP password (empty)
$dbname = "genba_house"; // Your database name as seen in phpMyAdmin

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tipe = $_POST["tipe"];
    $no_telp = $_POST["no_telp"];
    $jumlah = $_POST["jumlah"];
    $id_pengiriman = $_POST["id_pengiriman"];
    $id_mitra = $_POST["id_mitra"];
    
    // Create SQL query to insert data
    $sql = "INSERT INTO tb_penjualan (nama, alamat, tipe, jumlah, no_telp, id_pengiriman, id_mitra) 
            VALUES ('$nama', '$alamat', $tipe, $jumlah, $no_telp, $id_pengiriman, $id_mitra)";
    
    // Execute query and check if successful
    if ($conn->query($sql) === TRUE) {
        echo "Data pemesanan berhasil disimpan";
        // Redirect back to form after 3 seconds
        header("refresh:3;url=Pemesanan.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        // Redirect back to form after 5 seconds
        header("refresh:5;url=Pemesanan.html");
    }
}

// Close connection
$conn->close();
?>