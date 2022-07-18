<header class="w3-top">
    <div class="contenido">
        <img src="assets/logo.png" alt="">
        <div>
            <a href="inicio.php" class="<?php if(isset($sec) && $sec==1){ echo "activo";}?>">Inicio</a>
            <a href="rentar.php" class="<?php if(isset($sec) && $sec==2){ echo "activo";}?>">Como Rentar</a>
            <a href="sucursal.php" class="<?php if(isset($sec) && $sec==3){ echo "activo";}?>">Sucursal</a>
        </div>
    </div>
</header>