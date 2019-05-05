<?php 
// Initialize the session.
session_start();
session_regenerate_id(true);

if ( isset($_POST['login_username_value']) && !empty($_POST['login_username_value']) && isset($_POST['login_password_value']) && !empty($_POST['login_password_value']) ) {
	// POST fields set
	$username = htmlspecialchars($_POST['login_username_value']);
	$password = htmlspecialchars($_POST['login_password_value']);
	if ( $username=="vrake" && $password=="K£nD@l_170896K£nD@l_170896" ) {
		// vrake logged in
		$_SESSION["username"]="vrake";
		$_SESSION["forename"]="Vannessa";
		$_SESSION["surname"]="Rake";
		echo "<h1>Login Successful!</h1>";
    	echo "<p><script>document.location='index.php'</script></p>";
		echo "</body>";
		echo "</html>";
	} else {
		// Login Failed
		echo "<html>";
		echo "<body>";
		echo "<h1>Login Failed!</h1>";
    	echo "<p><script>document.location='index.php'</script></p>";
		echo "</body>";
		echo "</html>";
	}
} else {
	// POST fields not set
	echo "<html>";
	echo "<body>";
	echo "<h1>Login Failed!</h1>";
    echo "<p><script>document.location='index.php'</script></p>";
	echo "</body>";
	echo "</html>";
}
?>