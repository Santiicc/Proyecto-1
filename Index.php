<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Styles/Styles.css">
    <title>MiTiendaOnline</title>
</head>
<body>
    <main>
        <!--Contenedor general de todo el sistema de login y register-->
        <div class="container_gral">
            
            <!--Inicializo la caja trasera y la separo para cuando es registro o login-->
            <div class="backbox">

                <div class="backbox-login">
                    <h3>Ya tenes una cuenta?</h3>
                    <p>Inicia Sesion</p>
                    <button id="button-login">Iniciar Sesion</button>
                </div>

                <div class="backbox-register">
                    <h3>No tenes una cuenta?</h3>
                    <p>Registrarte para poder usar la web</p>
                    <button id="button-register">Registrar</button>
                </div>

            </div>

            <!--Establezco los formularios de login y register-->
            <div class="login-register">

                <form action="" class="form__login">
                    <h2>Inicia Sesion</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <form action="Php/User-RegisterBE.php" method ="POST" class="form__register">
                    <h2>Registrarte</h2>
                    <input type="text" placeholder="Nombre Completo" name = name>
                    <input type="number" placeholder="Telefono" name = number>
                    <input type="text" placeholder="Correo Electronico" name = email>
                    <input type="password" placeholder="Contraseña" name = password>
                    <button>Entrar</button>
                </form>

            </div>
        </div>
    </main>
    <script src="Assets/Logic/script.js"></script>
</body>
</html>