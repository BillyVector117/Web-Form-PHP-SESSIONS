<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel='stylesheet' type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/ff6a64be3e.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>
    <div class="container">
        <h1 class="title">Log in</h1>
        <hr class="border-line">
        <!-- Form redirect at same page -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form" name="signup">
            <div class="form-group">
                <i class="icon left fa fa-user"></i><input type="text" name="user" class="user" placeholder="User">
            </div>

            <div class="form-group">
                <i class="icon left fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="password">
                <i class="submit-btn fa fa-arrow-right" onclick="signup.submit()"></i> <!-- login es el 'name' del form -->
            </div>
            <!-- Here is the posible error messages -->
            <?php if (!empty($errors)) : ?>
                <!-- If $errors is NOT empty, then it has errors -->
                <div class="error">
                    <ul>
                        <?php echo $errors ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
        <p class="text-signup">Do not have an account yet? <a href="signUp.php">Sign me Up</a></p>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>