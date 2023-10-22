<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['valido']);
    unset($_SESSION['nombre']);
    unset($_SESSION['id']);

    session_destroy();

    header('Location: http://localhost/examen/sign-in/index.html');
 

?>