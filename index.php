<?php 

session_start();
echo 'These are SESSIONS: ';
		print_r($_SESSION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST['username'], $_POST['password']))
	{
	  	$_SESSION['uname'] = $_POST['username'];
		$_SESSION['pword'] = $_POST['password'];
		$_SESSION['result'] = 0;
		
		header('Location: otherpage.php');

	}
}

if (isset($_GET['logout'])) {
	session_unset();
	header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<form method="post">
	<input type="text" name="username">
	<input type="text" name="password">
	<button type="submit">Submit</button>
</form>

<?php 
include 'header.php';
?>


</body>
</html>