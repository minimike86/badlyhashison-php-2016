<?php
session_start();
// Check if a session has been started.
// If not then its probably an ajax request so start a session.
if (session_status() == PHP_SESSION_NONE) {
    // Unset all of the session variables.
    $_SESSION = array();
    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
        );
    }
    // Finally, destroy the session.
    session_destroy();

    // redirect to homepage
    echo "<html>";
    echo "<body>";
    echo "<h1>Logged Out!</h1>";
    echo "<p><script>document.location='index.php'</script></p>";
    echo "</body>";
    echo "</html>";

} else {
    
    // Finally, destroy the session.
    session_destroy();

    // redirect to homepage
    echo "<html>";
    echo "<body>";
    echo "<h1>Logged Out!</h1>";
    echo "<p><script>document.location='index.php'</script></p>";
    echo "</body>";
    echo "</html>";

}
?>