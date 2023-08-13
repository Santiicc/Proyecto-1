<?php 
    include "ConectionBE.php";

    $Nombre = $_POST["name"];
    $Mail = $_POST["email"];
    $Contraseña = $_POST["password"];
    $Numero = $_POST["number"];

    // Utiliza comillas simples alrededor de las variables en el query
    $query = "INSERT INTO usuarios(Nombre, Mail, Contraseña, Numero) 
              VALUES('$Nombre', '$Mail', '$Contraseña', '$Numero')";

    $execute = mysqli_query($conection, $query);

    if($execute)
    {
        echo
        '
        <script>
            alert("Usuario Registrado, Ahora Iniciá Sesion")
            window.location = "../Index.php"
        </script>

        '
        ;
    }

    else
    {
        echo
        '
        <script>
            alert("Usuario No Registrado, Intenta de Nuevo")
            window.location = "../Index.php"
        </script>

        '
        ;
    }
?>
