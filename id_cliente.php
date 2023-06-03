<?php
$googleClientId = '516496620936-aqk2jah15d1fb37kperkq001h9dm95oj.apps.googleusercontent.com';

// Utiliza el ID de cliente en tu lógica de autenticación o integración con Google Sign-In
// Por ejemplo, puedes verificar si el ID de cliente recibido coincide con el tuyo
if ($_POST['clientId'] === $googleClientId) {
    // Realiza tu lógica personalizada aquí
    // Puede ser almacenar el ID de cliente en una base de datos o realizar otras acciones relacionadas con la autenticación
    echo 'Autenticación exitosa';
} else {
    echo 'Autenticación fallida';
}
?>
