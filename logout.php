<?php
// inicializamos sesion
session_start();

// eliminamos sesion
session_unset();

// destruimos sesion
session_destroy();

// redirigimos al usuario
header('Location: /phperos-app/login.php');
