<?php 
session_start();
echo ' This is the other other page!. <br> These are sessions! ';
print_r($_SESSION);
echo 'These are POSTS: ';
		print_r($_POST);

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "markdonald";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT * FROM login where username = '".$_SESSION['uname']."' AND password = '".$_SESSION['pword']."'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//    echo 'Login Success!';
// } else {
//    echo 'Invalid Inputs!';
// }
// $conn->close();


?>
<br>
<a href="index.php">Other page</a>

<a href="otherpage.php">Other page</a>

<a href="otherotherpage.php">Other Other page</a>

<a href="index.php?logout=true">Logout</a>