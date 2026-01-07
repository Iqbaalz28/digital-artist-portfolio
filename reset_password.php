<?php
/**
 * Password Reset Tool - DELETE THIS FILE AFTER USE!
 * Access: http://localhost/digitalartist/reset_password.php
 */

// Load CodeIgniter
define('BASEPATH', 'system/');
include('application/config/database.php');

$host = $db['default']['hostname'];
$user = $db['default']['username'];
$pass = $db['default']['password'];
$dbname = $db['default']['database'];

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// New password (change this)
$newPassword = 'admin123';
$hashedPassword = md5($newPassword);

// Update all users (or you can specify a specific email)
$sql = "UPDATE users SET password = '$hashedPassword'";
// Or for specific user: $sql = "UPDATE users SET password = '$hashedPassword' WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "<h1 style='color: green;'>✅ Password berhasil direset!</h1>";
    echo "<p>Password baru: <strong>$newPassword</strong></p>";
    echo "<p>MD5 Hash: <code>$hashedPassword</code></p>";
    echo "<br><a href='manage/auth'>Login sekarang →</a>";
    echo "<br><br><p style='color: red;'><strong>⚠️ PENTING: Hapus file ini setelah selesai!</strong></p>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
