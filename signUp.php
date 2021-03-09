<!-- This module describes all validations/Logic to new users -->

<?php session_start();
// Validate an existing user
if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

// When Form from module signUp.view is sent by 'POST' method means is a new User (submit)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 'user' and 'password are 'name' attributes of EACH INPUT (sent as its own name)
    $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING); // Transform text to low-case and sinitize to prevent inusual access
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    // echo "Your username: $user, - Your password are confidential";
    $errors = ''; // Start in empty value to check later existing/or not errors

    if (empty($user) or empty($password) or empty($password2)) {
        // If any input is empty, exist errors
        $errors .= '<li>Please, fill all inputs :)</li>';
    } else {
        // Connect and add the user to database
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

        // Verify no-repetead users
        // Find and get all data from users table, where the user is the same CURRENT USER register in signUp section (submit)
        // If exist in database the searched user, then will be an error (repetead user)
        $statement = $connect->prepare('SELECT * FROM users WHERE user = :user LIMIT 1');
        $statement->execute(array('user' => $user)); // $user will be the value 'user' in params (When submit signUp)
        $result = $statement->fetch();
        // print_r($result); // $result is the data from the first user registered with the same name (so, it exist previously)
        // var_dump($result); // if FALSE: means user do not exist, if true, an user already has the same same
        if ($result != false) {
            // if $result got a user in database, means ther's an existing user, then +error
            $errors .= 'User already in use :/';
        }
        // Start New user register (If no errors)
        $password = hash('sha512', $password); // Hash password
        $password2 = hash('sha512', $password2); // Hash password2

        if ($password != $password2) {
            // User typed different passwords
            $errors .= 'Passwords most coincide';
        }
    }
    if ($errors == '') {
        $statement = $connect->prepare('INSERT INTO users (id, user, password) VALUES (null, :user, :password)');
        $statement->execute(array(':user' => $user, ':password' => $password));
        header('Location: login.php');
    }
}
require 'views/signUp.view.php'

?>