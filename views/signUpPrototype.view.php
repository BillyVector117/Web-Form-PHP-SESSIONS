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
    <title>Sign Up</title>
</head>

<body>
    <div class="container mt-5">
        <!-- Fila que contendra columnas -->
        <div class="row">
            <!-- Div con 10 columnas y empujar el div 1 col a la derecha.  -->
            <div class="col s10 push-s1">
                <!-- Div/fila para tener dos columnas (1.Para la imagen, 2. Para el formulario)-->
                <div class="row">
                    <!-- Primer columna para imagen, solo a partir de m. se muestra, no en movil. -->
                    <div class="col m5 hide-on-small-only">
                        <!-- Imagen, ya no tiene la ruta /public por que todo se encuentra en el mismo lugar -->
                        <img src="views/assets/undraw_welcome_cats_thqn.png" alt="Welcome" class="mobile">
                    </div>
                    <!-- Aqui se agregara la caja del formulario (signin/signup) -->
                    <div class="col s12 m7">
                        <!-- Segunda columna para formulario, en mobil ocupara 12 columnas, mientras que en mayores lo restante (7 columnas) -->
                        <div class="row">
                            <!-- Formulario, Fila 1 (Inputs) -->
                            <div class="signup-box">
                                <!-- Formulario, caja de inputs -->
                                <h1 class="describe">Sign Up Section</h1><!-- Titulo del formulario -->
                                <form action="" class="signup-form">
                                    <!-- Formulario completo -->

                                    <div class="diviver"></div> <!-- Linea para divivir -->
                                    <div class="ml-3">
                                        <!-- Sección para todos los inputs del formulario -->
                                        <input type="email" name="email" placeholder="E-mail" class="input__email"><!-- input email(123@gmail.com) -->
                                        <input type="password" name="password" placeholder="Password" class="input__name"><!-- input password (********)-->
                                        <button class="btn btn-secondary" type="submit" name="action">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- Aqui finaliza el primer row del formulario (inputs) -->
                        <div class="row">
                            <!-- Formulario, Fila 2 (Login/Cuenta existente) -->
                            <div class="login-box">
                                <a href="/login"><b>Already have an account?, click here</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>