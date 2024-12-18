<?php
// Script para manejar la descarga de imágenes
if (isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $filepath = "img/" . $file;

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    } else {
        echo "El archivo no existe.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstroSpace</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
   
    <a href="#" <div class="logo">🌌 AstroSpace</div>
        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="#wallpapers">Wallpapers</a>
            <a href="#informacion">Información</a>
            <a href="#noticias">Noticias</a>
            <a href="#productos">Productos</a>
        </nav>
    </header>
    
    <!-- Inicio -->
    <section id="inicio">
        <div class="inicio-container">
            <div class="inicio-texto">
                <h1>Bienvenido a AstroSpace</h1>
                <p>Explora la inmensidad del universo con nuestra colección única de imágenes, noticias y recursos. Sumérgete en el cosmos y descubre la belleza de las estrellas, planetas y galaxias lejanas.</p>
                <a href="#wallpapers" class="btn">Ver Wallpapers</a>
            </div>
            <div class="inicio-imagen">
                <img src="img/astropapu.png" alt="astropapu">
            </div>
        </div>
    </section>

    <section id="wallpapers">
        <h2 class="heading">Wallpapers</h2>
        <div class="wallpaper-grid">
            <?php
            $images = ["wallpaper1.jpg", "wallpaper2.jpg", "wallpaper3.jpg", "wallpaper4.jpg","wallpaper5.jpg","wallpaper6.jpg"];
            foreach ($images as $image) {
                echo "<div class='caja'>";
                echo "<img src='img/$image' alt='$image'>";
                echo "<a href='?file=$image' class='download-btn'>Descargar</a>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <!-- Información -->
    <section id="informacion">
        <h2 class="heading">Información sobre Astros</h2>
        <div class="cajacon">
            <div class="caja">
                <div class="caj"><img src="img/sol.jpg" alt="da fokin'sun"></div>
                <h3>El Sol</h3>
                <p>Nuestra estrella principal, fuente de vida y energía.</p>
            </div>
            <div class="caja">
                <div class="caj"><img src="img/luna.jpg" alt="luna$$$"></div>
                <h3>La Luna</h3>
                <p>El satélite natural de la Tierra, influencia de las mareas.</p>
            </div>
            <div class="caja">
                <div class="caj"><img src="img/marte.jpg" alt="martelol$$$"></div>
                <h3>Marte</h3>
                <p>El planeta rojo, un posible destino para la humanidad.</p>
            </div>
            <div class="caja">
                <div class="caj"><img src="img/jupiter.jpg" alt="jupiter$$$"></div>
                <h3>Júpiter</h3>
                <p>El gigante gaseoso, conocido por su Gran Mancha Roja.</p>
            </div>
            <div class="caja">
                <div class="caj"><img src="img/saturno.jpg" alt="saturno$$$"></div>
                <h3>Saturno</h3>
                <p>Famoso por sus impresionantes anillos de hielo.</p>
            </div>
            <div class="caja">
                <div class="caj"><img src="img/nebulosas.jpg" alt="nebulosa$$$"></div>
                <h3>Nebulosas</h3>
                <p>Regiones de gas y polvo donde nacen las estrellas.</p>
            </div>
        </div>
    </section>

    <!-- Noticias -->
    <section id="noticias">
        <h2 class="heading">Noticias Recientes</h2>
        <div class="noticia">
            <h4>Descubrimiento de un nuevo exoplaneta</h4>
            <p>Astrónomos descubren un planeta similar a la Tierra en la zona habitable de su estrella.</p>
        </div>
        <div class="noticia">
            <h4>Misión Artemis a la Luna</h4>
            <p>La NASA planea su regreso a la Luna para establecer una base permanente.</p>
        </div>
        <div class="noticia">
            <h4>Imágenes del Telescopio James Webb</h4>
            <p>Nuevas imágenes de galaxias lejanas revelan detalles sin precedentes.</p>
        </div>
        <div class="noticia">
            <h4>Colisión de asteroides observada</h4>
            <p>Científicos registran el impacto entre dos asteroides en el cinturón principal.</p>
        </div>
    </section>

    <!-- Productos -->
    <section id="productos">
        <h2 class="heading">Productos</h2>
        <div class="product-grid">
            <div class="caja">
                <img src="img/camisa1.jpg" alt="Camisa 1">
                <h3>Camiseta Galaxy</h3>
                <p>$158.00 MXN</p>
                <a href="#" class="btn">Comprar</a>
            </div>
            <div class="caja">
                <img src="img/taza1.jpg" alt="Taza 1">
                <h3>Taza de Nebulosa</h3>
                <p>$89.00 MXN</p>
                <a href="#" class="btn">Comprar</a>
            </div>
            <div class="caja">
                <img src="img/camisa2.jpg" alt="Camisa 2">
                <h3>Camisa Estelar</h3>
                <p>$200.00 MXN</p>
                <a href="#" class="btn">Comprar</a>
            </div>
            <div class="caja">
                <img src="img/taza2.jpg" alt="Taza 2">
                <h3>Taza Espacial</h3>
                <p>$74.00 MXN</p>
                <a href="#" class="btn">Comprar</a>
            </div>
            <div class="caja">
                <img src="img/camisa3.jpg" alt="Camisa 3">
                <h3>Camiseta Lunar</h3>
                <p>$145.00 MXN</p>
                <a href="#" class="btn">Comprar</a>
            </div>
            <div class="caja">
                <img src="img/taza3.jpg" alt="Taza 3">
                <h3>Taza Solar</h3>
                <p>$100.00 MXN</p>
                <a href="#" class="btn">Comprar</a>
            </div>
            <div class="caja">
                <img src="img/teles1.jpg" alt="telescopio 1">
                <h3>Telescopio HG-300</h3>
                <p>$1,500.00 MXN</p>
                <a href="#" class="btn">Comprar</a>
            </div>
            <div class="caja">
                <img src="img/teles2.jpg" alt="Telescopio 2">
                <h3>Telescopio HG-500</h3>
                <p>$2,300.00 MXN</p>
                <a href="#" class="btn">Comprar</a>
            </div>
        </div>
    </section>
    <section id="formulario-compra">
    <h2 class="heading">Finalizar Compra</h2>
    <form action="procesar_compra.php" method="POST" class="compra-formulario">
        <div class="form-group">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección de Envío:</label>
            <input type="text" id="direccion" name="direccion" placeholder="Ingresa tu dirección" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
        </div>
        <div class="form-group">
            <label for="producto">Producto Seleccionado:</label>
            <select id="producto" name="producto" required>
                <option value="" disabled selected>Selecciona un producto</option>
                <option value="camiseta_galaxy">Camiseta Galaxy</option>
                <option value="taza_nebulosa">Taza de Nebulosa</option>
                <option value="camisa_estelar">Camisa Estelar</option>
                <option value="taza_espacial">Taza Espacial</option>
                <option value="camiseta_lunar">Camiseta Lunar</option>
                <option value="taza_solar">Taza Solar</option>
                <option value="telescopio_hg-300">Telescopio HG-300</option>
                <option value="telescopio_hg-500">Telescopio HG-500</option>
            </select>
        </div>
        <div class="form-group">
            <label for="metodo_pago">Método de Pago:</label>
            <select id="metodo_pago" name="metodo_pago" required>
                <option value="" disabled selected>Selecciona un método de pago</option>
                <option value="tarjeta_credito">Tarjeta de Crédito</option>
                <option value="paypal">PayPal</option>
                <option value="transferencia">Transferencia Bancaria</option>
            </select>
        </div>
        <button type="submit" class="btn">Realizar Pedido</button>
    </form>
</section>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 AstroSpace. Todos los derechos reservados.</p>
        <p class="creditos">Diseñado por el tilin mayor y el pirata de culiacan.</p>
    </footer>
</body>
</html>


