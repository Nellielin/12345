<?php 
$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "ohdogcat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// 檢查連線
if ($conn -> connect_error) {
  	die("連線失敗: " . $conn->connect_error);
	echo "123";
}
?>