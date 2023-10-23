<?php

// https://github.com/Daniboy94/Login-PHP.git

$nombreUsuario = $_POST["usuario"];
$passUsario = $_POST["contraseña"];

// validación usuario
function validarU($nombreUsuario)
{

    if (strlen($nombreUsuario) >= 6 && strlen($nombreUsuario) < 16) {
        // Aquí colocarías el código que se ejecuta si la longitud de $nombreUsuario está en el rango correcto.
        //strlen verifica la longitud del "string"
        return true;
    } else {

        return false;
    }
}

validarU($nombreUsuario);



//validación contraseña
function validarP($passUsario)
{
    if (strlen($passUsario) == 7 && preg_match('/^[A-Za-z]+$/', $passUsario)) {
        //strlen debe ser exactemente 7 caracteres para que pueda validar
        //Usamos la expresion regular preg_mat '/^[A-Za-z]+$/' solo permite que la contraseña tenga letras
        return true;
    } else {

        return false;
    }
}

validarP($passUsario);


//validamos si el login es correcto
if (validarU($nombreUsuario) == true && validarP($passUsario) == true) {

    echo "Acceso Correcto Bienvenido al servidor!!!";
} else {


    echo "Acceso Denegado!!!";
}
