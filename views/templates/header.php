<header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
    <div class="container">
        <a href="index.html" class="logo">
            <img src="images/log.svg" alt="escudo"></a>
        <a href="index.html" class="moque">
            <img class="hidden-md-down" src="images/o.svg" alt="lema"></a>
        <button type="buttom" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
        <button type="buttom" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <from action="" id="bloque-buscar" class="collapse">
            <div class="container-bloque-buscar">
                <input type="text" placeholder="Buscar...">
                <input type="submit" value="Buscar">
            </div>
        </from>
        <nav id="menu-principal" class="collapse">
            <ul>
                <li class="<?php if ( $clink=='inicio') { echo 'active'; } ?>"><a href="index.php">Inicio</a>
                </li>
                <li class="<?php if ( $clink=='nosotros') { echo 'active'; } ?>"><a href="index.php?action=nosotros">Nosotros</a>
                </li>
                <li class="<?php if ( $clink==" servicio ") { echo "active "; } ?>"><a href="guia/index.html">Guía Turística</a>
                </li>
                <li class="<?php if ( $clink=='contactenos') { echo 'active'; } ?>"><a href="index.php?action=contactenos">Contáctenos</a>
                </li>
            </ul>
        </nav>
    </div>
</header>