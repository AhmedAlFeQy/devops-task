<!DOCTYPE html>
<html>
<body>

&quot;Hello World!&quot;
</br>

<?php
// Connect to MySQL

require_once('config.php');
$connection = mysqli_connect($host, $username, $password, $database);

// Check for errors
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Insert visitor's IP address into the visitors table
$insert_query = "INSERT INTO visitors (ip_address) VALUES ('".$_SERVER['REMOTE_ADDR']."')";
mysqli_query($connection, $insert_query);

// Display visitor's IP address

$visitor_id = mysqli_insert_id($connection);
echo "the visitor no is ".$visitor_id. "   Your IP address is ".$_SERVER['REMOTE_ADDR']."    and the current time is ".date("Y-m-d H:i:s");
?>

</body>
</html>