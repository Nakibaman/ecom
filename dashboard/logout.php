<?php  
	session_start();
	session_destroy();
	ob_clean();
	header("location: ../login.php");
?>