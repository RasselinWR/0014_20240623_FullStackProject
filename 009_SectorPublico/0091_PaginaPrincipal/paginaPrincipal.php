<?php
session_start();   //Uso de la variable GLOBAL
require "consultasSlider.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal Corporación Sfer4D</title>
    <link rel="stylesheet" href="../../009_SectorPublico/0091_PaginaPrincipal/paginaPrincipal.css">
    <script src="../../009_SectorPublico/0091_PaginaPrincipal/scriptsMenu.js"></script>
</head>
<body onload="cargarPagina()">
    <header id="cabeceraPrincipal">
        <div id="iconoAdorno"><img src="../../009_SectorPublico/0091_PaginaPrincipal/images/Sfer4D-IconoEmpresa.jpg" id="iconoEmpresa"></div>      
        <div class="VaciobotonesPrincipal">
            <a href="../../007_Menus/0072_MenuJefesRRHH/loginJefesRRHH.php" class="areaPrivada"><img src="../../009_SectorPublico/0091_PaginaPrincipal/images/CANDADO.png" title="Area Privada" alt="Area Privada" width="40px" height="40px"></a>
            <a href="" class="areaPrivada"><img src="../../009_SectorPublico/0091_PaginaPrincipal/images/COMPRAS.png" title="Ver Carrito de Compra" alt="Ver Carrito de Compra" width="40px" height="40px"></a>
        </div>
        <table id="tabla">
            <tr class="cajaBotonera">
                <div class="bloque_opciones" style="color: yellow" onclick="location.href='../../009_SectorPublico/0091_PaginaPrincipal/paginaPrincipal.php'">INICIO</div>
                <div class="bloque_opciones" style="color: yellow" onclick="location.href='../../009_SectorPublico/0092_PaginaHistoria/paginaHistoria.php'">HISTORIA</div>
                <div class="bloque_opciones" style="color: yellow" onclick="location.href='../../009_SectorPublico/0093_PaginaProductos/paginaProductos.php'">PRODUCTOS</div>
                <div class="bloque_opciones" style="color: yellow" onclick="location.href='../../009_SectorPublico/0094_PaginaServicios/paginaServicios.php'">SERVICIOS</div>
                <div class="bloque_opciones" style="color: yellow" onclick="location.href='../../009_SectorPublico/0095_PaginaProyectos/paginaProyectos.php'">PROYECTOS</div>
                <div class="bloque_opciones" style="color: yellow" onclick="location.href='../../005_Login/0053_LoginCLIENTES/loginCLIENTES.php'">CLIENTES</div>
            </tr>
        </table>
        <div class="VaciobotonesPrincipal"></div>
    </header>  
    <div class="consulta" style="background-image: url(../../009_SectorPublico/0091_PaginaPrincipal/images/DIGITALIZACION.jpg); background-size: 100% 100%;">
    <table id="seccionSlider">
      <form action="consultasSlider.php" method="GET">
        <tr id="bandaSlider">
            <td class="bandasPasaSlider"><input type="submit" class="pasaIzquierda" name="pasaIzquierda" value=""></td>
            <?php
                $i=$_SESSION["PUNTERO"]; 
            ?>  <!-- CARRUSEL DE SLIDER DE 20 IMAGENES COMO MÁXIMO ESTABLECIDO (se puede aumentar en consultasSlider -->
            <td class="imagenCargada" style="background-image: url('../../009_SectorPublico/0091_PaginaPrincipal/sliderImages/<?php echo $_SESSION["NOMBRESLIDER"][$i];?>');"></td>
            <td class="bandasPasaSlider"><input type="submit" class="pasaDerecha" name="pasaDerecha" value=""></td>
        </tr>
        </form>
    </table>
    <?php for($j=0;$j<4;$j++){ ?>     
        <table class="seccionPrincipal">   <!-- PRIMERA BANDA DE NOVEDADES EN PAGINA WEB -->
            <?php for($i=1;$i<5;$i++){ ?>
                <td class="noticia">    
                    <table class="tablaInterna">
                        <tr class="fila">   <!-- COMO SON CUATRO PANELES SE USARÁ $j PARA CADA UNO E $i PARA LAS CELDAS DEL INTERIOR DE CADA PANEL-->
                            <td><img class="imgBloques" src="newsImages/<?php $fila=$i+4*$j; echo extraccionNovedad($fila);?>"></td>
                        </tr>
                        <tr class="fila">
                            <td><div class="textoTitulo" style="margin-left:2%"></div></td>
                        </tr>
                        <tr class="fila">
                            <td><p class="parrafo"></p></td>
                        </tr>
                    </table>
                </td>
            <?php } ?>
        </table>
    <?php } ?>
    </div>
    <div class="piePagina">
        <footer id="piePrincipal">
            <div id="zocalo">
                -------- Fundadores --------
                <br><strong>William Wissangel</strong></br>
                <strong>Sharyllín Rousher</strong>
                <br>---- Correo Electrónico ----</br>
                <strong>sfer4D_corporation@outlook.com</strong>
            </div>
            <div class="pie">
                Asociado: <strong>BioGenTech Corp</strong><br>
                Competidor: <strong>Techeimer Corp</strong><br>
                Inversor: <strong>Medigraria Corporation</strong><br>
                Registro 2024: <strong>Registro C4321</strong>
            </div>
        </footer>
    </div>
</body>
</html>