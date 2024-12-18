<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $email = htmlspecialchars($_POST['email']);
    $producto = htmlspecialchars($_POST['producto']);
    $metodo_pago = htmlspecialchars($_POST['metodo_pago']);

    // Aquí puedes procesar los datos o almacenarlos en una base de datos
    echo "¡Gracias, $nombre! Tu pedido del producto '$producto' será enviado a '$direccion'. Te contactaremos en $email para confirmar.";
} else {
    echo "Método de solicitud no válido.";
}
?>
