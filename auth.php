
	
<?php
session_start();
if(isset($_SESSION["username"])){
header("Location: welcome.php");
exit(); }
?>