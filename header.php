
<?php 
?>

<a href="index.php">Other page</a>
<a href="otherpage.php">Other page</a>

<a href="otherotherpage.php">Other Other page</a>

<?php 


if(isset($_SESSION['result']) and $_SESSION['result'] > 0 )
{
?> 

<a href="index.php?logout=true">Logout</a>

<?php 
}
else
{

?>

<a href="index.php?logout=true">Login</a>
<?php 
}


?>	

<a href="index.php?logout=true">Clear</a>