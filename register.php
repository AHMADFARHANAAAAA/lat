<?php
include "koneksi.php"; // Ensure this path is correct

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and retrieve form data
    $namadep = $_POST['namadep'] ?? '';
    $namabel = $_POST['namabel'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $usia = $_POST['usia'] ?? '';
    $jk = $_POST['jk'] ?? '';
    $ttl = $_POST['ttl'] ?? '';
    $email = $_POST['email'] ?? '';
    $notel = $_POST['notel'] ?? '';

    // Check if all fields are filled
    if ($namadep && $namabel && $username && $password && $usia && $jk && $ttl && $email && $notel) {
        // Prepare the SQL query
        $mysql = "INSERT INTO register (namadep, namabel, username, password, usia, jk, ttl, email, notel) VALUES 
        ('$namadep', '$namabel', '$username', '$password', '$usia', '$jk', '$ttl', '$email', '$notel')";

        // Execute the query and check for errors
        if (mysqli_query($connection, $mysql)) {
            // Redirect back to insert.php with a success message
            header("Location: index.php?successMessage=Selamat, anda telah terdaftar");
            exit(); // Stop script execution after redirect
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }

    // Close the connection
    mysqli_close($connection);
} else {
    echo "Form not submitted correctly.";
}
?>
