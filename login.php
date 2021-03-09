<!-- This module describes all validations to new users -->

<?php session_start();
// Validate existing/current user
if (isset($_SESSION['user'])) {
    header('Location: index.php');
}
$errors = '';
// This validations means the form has been sent (Submit) using 'POST' method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    // echo $user; // Store username

    // Connect and find in database the user loged
    try {
        $connect = new PDO('mysql:host=localhost;dbname=practice', 'root', '');
        /*   foreach ($connect->query('SELECT * from users') as $fila) {
            print_r($fila);
        } */
        // $connect = null; // End connection
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    $statement = $connect->prepare('SELECT * FROM users WHERE user = :user AND password = :password');
    $statement->execute(array(':user' => $user, 'password' => $password));
    $result = $statement->fetch();  // Capture data
    // Is FALSE when the user is not found in database
    if ($result !== false) {
        $_SESSION['user'] = $user;
        header('Location: index.php');
    } else {
        $errors .= '<li> Incorrect data :(</li>';
    }
}


require 'views/login.view.php'

?>