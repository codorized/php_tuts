<?php 
session_start();
echo ' This is the other page!<br> These are sessions!';



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "markdonald";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login where username = '".$_SESSION['uname']."' AND password = '".$_SESSION['pword']."'";
$result = $conn->query($sql);
if(isset($_SESSION['result']))
{
	$_SESSION['result'] = $result->num_rows;
}	
else 
{
	$_SESSION['result'] = 0;
}

print_r($_SESSION);

if ($result->num_rows > 0) {
   echo 'Login Success!';
} else {
   echo 'Invalid Inputs!';
}
$conn->close();

?>

<br>

<?php 
include 'header.php';
?>