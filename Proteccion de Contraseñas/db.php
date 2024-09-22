<?php
$servername = "sql101.infinityfree.com"; 
$username = "if0_37312973"; 
$password = "Aisd3213004 ";
$dbname = "if0_37312973_mi_base_de_datos"; 
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
