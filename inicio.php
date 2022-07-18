<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="w3pro.css">
    <link rel="stylesheet" href="estilo.css">
    <title>Inicio</title>
</head>
<body>
    <?php 
        $sec = 1;
        include('header.php'); 
    ?>
    <main id="inicio">
        <div class="contenido w3-center">
            <h2>Tienda Guadalajara</h2>
            <div class="select-wrapper">
                <label for="color">Color</label>
                <select name="color" id="color">
                    <option value="negro">negro</option>
                </select>
            </div>
            <div class="select-wrapper">
                <label for="talla">Talla</label>
                <select name="talla" id="talla">
                    <option value="negro">negro</option>
                </select>
            </div>
            <div class="select-wrapper">
                <label for="marca">Marca</label>
                <select name="marca" id="marca">
                    <option value="negro">negro</option>
                </select>
            </div>
            <br>
            <div class="select-wrapper">
                <label for="fecha-inicio">Me interesa rentar el día</label>
                <select name="fecha-inicio" id="fecha-inicio">
                    <option value="negro">negro</option>
                </select>
            </div>
            <div class="select-wrapper">
                <label for="fecha-fin">al día</label>
                <select name="fecha-fin" id="fecha-fin">
                    <option value="negro">negro</option>
                </select>
            </div>
        </div>

        <div class="items-wrapper w3-row contenido">
            <div class="w3-col m3 s6">
                <div class="item w3-center">
                    <img src="assets/item.png" alt="">
                    Talla S <br> Maniju <br> LVERSMAN-11 <br> Precio Renta: $ 500 <br>
                    <button class="btn disponible">Disponible</button>
                </div>
            </div>
            <div class="w3-col m3 s6">
                <div class="item w3-center">
                    <img src="assets/item.png" alt="">
                    Talla S <br> Maniju <br> LVERSMAN-11 <br> Precio Renta: $ 500 <br>
                    <button class="btn disponible">Disponible</button>
                </div>
            </div>
            <div class="w3-col m3 s6">
                <div class="item w3-center">
                    <img src="assets/item.png" alt="">
                    Talla S <br> Maniju <br> LVERSMAN-11 <br> Precio Renta: $ 500 <br>
                    <button class="btn no-disponible">No&nbsp;Disponible</button>
                </div>
            </div>
            <div class="w3-col m3 s6">
                <div class="item w3-center">
                    <img src="assets/item.png" alt="">
                    Talla S <br> Maniju <br> LVERSMAN-11 <br> Precio Renta: $ 500 <br>
                    <button class="btn disponible">Disponible</button>
                </div>
            </div>
            <div class="w3-col m3 s6">
                <div class="item w3-center">
                    <img src="assets/item.png" alt="">
                    Talla S <br> Maniju <br> LVERSMAN-11 <br> Precio Renta: $ 500 <br>
                    <button class="btn no-disponible">No&nbsp;Disponible</button>
                </div>
            </div>
            <div class="w3-col m3 s6">
                <div class="item w3-center">
                    <img src="assets/item.png" alt="">
                    Talla S <br> Maniju <br> LVERSMAN-11 <br> Precio Renta: $ 500 <br>
                    <button class="btn disponible">Disponible</button>
                </div>
            </div>
            <div class="w3-col m3 s6">
                <div class="item w3-center">
                    <img src="assets/item.png" alt="">
                    Talla S <br> Maniju <br> LVERSMAN-11 <br> Precio Renta: $ 500 <br>
                    <button class="btn disponible">Disponible</button>
                </div>
            </div>
            <div class="w3-col m3 s6">
                <div class="item w3-center">
                    <img src="assets/item.png" alt="">
                    Talla S <br> Maniju <br> LVERSMAN-11 <br> Precio Renta: $ 500 <br>
                    <button class="btn disponible">Disponible</button>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>