<?php echo "<h1 align=\"center\">Welcome, This is a PHP Application</h1>"; 

// Create connection
$conn = new mysqli('docker_mysql:3306', 'user_root', 'user_root');

// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
} 
echo "<h4 align=\"center\">Database Connected successfully</h4>";

phpinfo();

?>
