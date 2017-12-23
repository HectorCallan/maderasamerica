<!--  Light Bootstrap Table core CSS -->
<link rel="stylesheet" type="text/css" href="../css/light-bootstrap-dashboard.css"/>
<?php
    if( isset($_SESSION['usuario']) && $_SESSION['usuario'] != "" ){
?>
<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="../images/assets/sidebar-5.jpg">
    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.maderasamerica.com" class="simple-text">MADERAS AMERICAS</a>
            </div>
            <ul class="nav">
                <li>
                    <a id="lnkDatos" href="#" onclick="mostrarPantalla('general');">
                        <i class="glyphicon glyphicon-asterisk"></i><p>Datos</p>
                    </a>
                </li>
                <li>
                    <a id="lnkCategoria" href="#" onclick="mostrarPantalla('categoria');">
                        <i class="glyphicon glyphicon-asterisk"></i><p>Categorias</p>
                    </a>
                </li>
                <li>
                    <a id="lnkProductos" href="#" onclick="mostrarPantalla('producto');">
                        <i class="glyphicon glyphicon-asterisk"></i><p>Productos</p>
                    </a>
                </li>
                <li>
                    <a id="lnkMarcas" href="#" onclick="mostrarPantalla('marca');">
                        <i class="glyphicon glyphicon-asterisk"></i><p>Marcas</p>
                    </a>
                </li>
                <li>
                    <a id="lnkOfertas" href="#" onclick="mostrarPantalla('oferta');">
                        <i class="glyphicon glyphicon-asterisk"></i><p>Ofertas</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Opciones</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="text-center" style="margin: 10px 3px;">
                            <img id="imgUser" src="../images/marker.fw.png" alt="imagen de usuario" class="img-circle" style="width: 40px; height: 40px;">
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>Admin <b class="caret"></b></p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="lSalir" href="#" onclick="cerrar_sesion();">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Categoría</h4>
                                <p class="category">Administra el Slider, datos principales y clientes.</p>
                            </div>
                            <div class="content all-icons">
                                <div id="divContent" class="row">
                                    <?php 
                                        include_once("view/vGeneral.php");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.create-ti.com">CREATE-TI</a>, creando tecnologías de información
                </p>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../jquery/jquery-3.1.1.min.js"></script>
<script src="../js/dataTables/js/jquery.dataTables.js"></script>
<script src="js/fAdmin.js"></script>
<?php 
    } else{
        header ("Location: ./admin/");
    } 
?>