<!-- This module allow recognize active user session to redirect "login/signUp" -->
<?php session_start();
// Active user = main content, inactive user = signUp
if (isset($_SESSION['user'])) {
    header('Location: content.php');
} else {
    header('Location: signUp.php');
}
?>