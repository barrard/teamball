<?php 
//if (!empty($_SESSION['teamName'])) {
// mysql_query("UPDATE userss SET logout = CURRENT_TIMESTAMP WHERE username='$_SESSION[username]'");
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['SERVER_NAME']}";



	// $query  = "UPDATE userss SET logout = CURRENT_TIMESTAMP WHERE username='$username'";
	// 	mysql_query($query) or trigger_error(mysql_error()." in ".$query);
 	 $_SESSION['teamName']  = '';
 	 $_SESSION['teamId']  = '';
 	 $_SESSION['opponentName'] = '';
	 session_destroy();
	 echo'HIHIHIHIHI';

	 header("Location: /");

//}
 ?>

