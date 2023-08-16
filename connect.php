<?php
// Replace these with your actual database credentials
$host = '127.0.0.1';
$username = 'wifiuser';
$password = 'admin';
$database = 'wifi';

// Establish a connection to MySQL
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the signup form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $street = $_POST['street'];
    $phone = $_POST['phone'];

    //$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO client (nome, bairro, telefone) VALUES ('$name', '$street', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Signup successful! Welcome, $name!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
