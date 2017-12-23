<!-- Esta pagina no es template, fue desarrollado desde 0 -->
<?php require_once("admin/class/ClsSlider.php"); ?>
<?php require_once("admin/class/ClsTelefono.php"); ?>
<?php require_once("admin/class/ClsCorreo.php"); ?>
<?php require_once("admin/class/ClsEnvios.php"); ?>
<?php require_once("admin/class/ClsTarjeta.php"); ?>
<?php require_once("admin/class/ClsOferta.php"); ?>
<?php require_once("admin/class/ClsCategoria.php"); ?>
<?php require_once("admin/class/ClsProducto.php"); ?>
<?php require_once("admin/class/ClsMarca.php"); ?>
<?php require_once("admin/class/ClsMarcaProd.php"); ?>
<?php require_once("admin/class/ClsMarcaProdCol.php"); ?>
<?php require_once("admin/class/ClsNosotros.php"); ?>
<?php require_once("admin/class/ClsCliente.php"); ?>
<?php require_once("admin/class/ClsHorario.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Maderas Américas</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="icon" type="image/png" href="images/icon.png" />
	<!--  CSS Slick  -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<!-- CSS Font Awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<!-- ei-slider 
	<link rel="stylesheet" type="text/css" href="css/ei-slider.css">
	-->
	<link rel='stylesheet' id='camera-css' href='css/camera.css' type='text/css' media='all'> 
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/styleSlider.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="facebook" class="divFixed">
		<div class="divMinim">
			<div class="minim">
				<div class="titleMinim"> Chatea con nosotros</div>
				<div class="iconMinim"><span class="glyphicon glyphicon-collapse-down"></span></div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="fb-page" data-href="https://www.facebook.com/create.ti/" data-tabs="messages" data-height="370" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/create.ti/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/create.ti/">Create-Ti</a></blockquote></div>
		</div>
	</div>
	<div id="contact" class="divFixedCont">
		<div class="divMinimCont">
			<div class="minim">
				<div class="titleMinim"> Escríbenos</div>
				<div class="iconMinim"><span class="glyphicon glyphicon-collapse-down"></span></div>
			</div>
		</div>
		<form action="admin/util/correo/mail.php" method="post" class="form-horizontal formContac">
			<fieldset>
				<div class="col-xs-12">
					<div class="form-group">
						<div class="col-xs-12">
							<input type="text" class="form-control" id=="txtNombre" name="txtNombre" placeholder="Nombre o Razón Social" required>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<div class="col-xs-12">
							<input type="number" class="form-control" name="txtTelefono" placeholder="Teléfono" minlength="7" maxlength="20" min="0" required>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<div class="col-xs-12">
							<input type="email" class="form-control" name="txtEmail" placeholder="Correo" required>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<div class="col-xs-12">
							<input type="text" class="form-control" name="txtAsunto" placeholder="Asunto" required>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<div class="col-xs-12">
							<textarea name="txtConsulta" id="txtConsulta" class="form-control" rows="5" placeholder="Escribe aquí tu consulta" required></textarea>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<div class="col-xs-12">
							<button class="btn btn-success btn-block" type="submit">Enviar</button>
						</div>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="chat">
		 <span class="fa fa-facebook-square fa-2x"></span> Escríbenos
	</div>
	<div class="contact">
		<i class="fa fa-envelope fa-1x" aria-hidden="true"></i> Contáctanos
	</div>
	<div class="btnReg">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</div>
	<div class="container-fluid">
		<!-- Navigation -->
	    <nav id="barra-nav" class="navbar navbar-default navbar-fixed-top navMadera"  style="">
	    	<div class="container-fluid containerBar">
	    		<div class="col-xs-12 col-md-3 text-left" style="line-height: 30px;">
	    			<img src="images/logo-navbar.png" class="img-responsive logoNavBar">
	    		</div>
	    		<div class="col-xs-12 col-md-6 text-center">
	    			<div class="form-group has-success has-feedback" style="margin: 7px 0px;">
					  	<input type="text" id="txtBuscar" class="form-control input-lg" placeholder="Buscar producto">
					  	<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
					</div>
	    		</div>
	    		<div class="hidden-xs hidden-sm col-md-3 text-right" style="margin: 7px 0px;">
	    			<span class="fa titleRedes">¡Siguenos!</span> &nbsp;
	    			<span class="fa fa-facebook-square fa-3x"></span>
	    			<span class="fa fa-twitter-square fa-3x"></span>
	    			<span class="fa fa-instagram fa-3x"></span>
	    		</div>
	    	</div>
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <span class="visible-xs navbar-brand">Menu de Categorías</span>
	        </div>
	        <div class="collapse navbar-collapse" id="navbarResponsive">
	            <ul class="nav navbar-nav" style="margin: 0 auto;">
	                <li class="liMenu">
	                	<a class="lnkMenu" href="#" id="lnkInicio" onclick="scrollWin('divProm');">
	                		<span class="glyphicon glyphicon-home"></span> Inicio
	                	</a>
	                </li>
	                <li class="liMenu">
	                	<a class="lnkMenu" href="#" id="lnkProductos" onclick="scrollWin('divProductos');">
	                	 	<span class="glyphicon glyphicon-tree-conifer"></span> Catálogo de Productos
	                	</a>
	                </li>
	                <li class="liMenu">
	                	<a class="lnkMenu" href="#" id="lnkMarca" onclick="scrollWin('divMarca');">
	                		<span class="glyphicon glyphicon-leaf"></span> Marcas
	                	</a>
	                </li>
	                <li class="liMenu">
	                	<a class="lnkMenu" href="#" id="lnkNosotros" onclick="scrollWin('divNosotros');">
	                		<span class="glyphicon glyphicon-grain"></span> Nosotros
	                	</a>
	                </li>
	                <li class="liMenu">
	                	<a class="lnkMenu" href="#" id="lnkContacto">
	                		<span class="glyphicon glyphicon-envelope"></span> Contáctanos
						</a>
	                </li>
	            </ul>
	        </div>
	    </nav>
    </div>
    <?php 
		$slider = new ClsSlider();
		$varLista = $slider->toList();
		$i = 1;
		echo '<div id="cS" style="display: none;">' . count($varLista) . '</div>;';
	?>		    			
    <div class="col-xs-12 sin-padding divProm">
    	<div class='parent'>
		  	<div class='slider'>
		   		<button type="button" id='right' class='right btnSlider' name="button">
			       	<svg version="1.1" id="Capa_1" width='40px' height='40px ' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
				       	<g>
				        	<path style='fill: #9d9d9d;' d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/>
				       	</g>
			       	</svg>
				</button>
		   		<button type="button" id='left' class='left btnSlider' name="button">
		       		<svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
		       			<g>
		        			<path style='fill: #9d9d9d;' d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225 c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
		       			</g>
		       		</svg>
		       	</button>
		   		<svg id='svg2' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		      		<circle id='circle1' class='circle1 steap' cx="648px" cy="49%" r="20"  />
		      		<circle id='circle2' class='circle2 steap' cx="648px" cy="49%" r="100"  />
		      		<circle id='circle3' class='circle3 steap' cx="648px" cy="49%" r="180"  />
		      		<circle id='circle4' class='circle4 steap' cx="648px" cy="49%" r="260"  />
		      		<circle id='circle5' class='circle5 steap' cx="648px" cy="49%" r="340"  />
		      		<circle id='circle6' class='circle6 steap' cx="648px" cy="49%" r="420"  />
		      		<circle id='circle7' class='circle7 steap' cx="648px" cy="49%" r="500"  />
		      		<circle id='circle8' class='circle8 steap' cx="648px" cy="49%" r="580"  />
		      		<circle id='circle9' class='circle9 steap' cx="648px" cy="49%" r="660"  />
		    	</svg>
		   		<svg id='svg1' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		      		<circle id='circle10' class='circle10 steap' cx="648px" cy="49%" r="20"  />
			      	<circle id='circle11' class='circle11 steap' cx="648px" cy="49%" r="100"  />
		      		<circle id='circle12' class='circle12 steap' cx="648px" cy="49%" r="180"  />
		      		<circle id='circle13' class='circle13 steap' cx="648px" cy="49%" r="260"  />
		      		<circle id='circle14' class='circle14 steap' cx="648px" cy="49%" r="340"  />
		      		<circle id='circle15' class='circle15 steap' cx="648px" cy="49%" r="420"  />
		      		<circle id='circle16' class='circle16 steap' cx="648px" cy="49%" r="500"  />
		      		<circle id='circle17' class='circle17 steap' cx="648px" cy="49%" r="580"  />
		      		<circle id='circle18' class='circle18 steap' cx="648px" cy="49%" r="660"  />
		    	</svg>
		    	<?php 
		    		if( count($varLista) > 0 ){
						foreach($varLista as $fila){
							if( $i == 1 ){
								echo "<div id='slide" . $i . "' class='slide up1' style='background-image: url(admin/images/slider/" . $fila[2] . ");'>" . $fila[1] . "</div>";
							}else{
								echo "<div id='slide" . $i . "' class='slide' style='background-image: url(admin/images/slider/" . $fila[2] . ");'>" . $fila[1] . "</div>";
							}
							$i++;
						}
					}
		    	?>
		  	</div>
		</div>       
	</div>
	<div class="col-xs-12 col-sm-offset-1 col-sm-10">
    	<div class="divMedia col-xs-6 col-sm-3">
    		<div class="media">
			  	<div class="media-left media-middle">
	      			<h3 style="margin: 0px;"><span class="glyphicon glyphicon-phone-alt"></span></h3>
			  	</div>
			  	<div class="media-body text-redes">
			  		<h4 class="media-heading twitter">Fono Compras</h4>
			  		<?php 
			  			$tel = new ClsTelefono();
			  			$varLista = $tel->get();
			  			echo '<small>' . $varLista[0][1] . '</small>';
			  		?>
			  	</div>
			</div>
    	</div>
		<div class="divMedia col-xs-6 col-sm-3">
    		<div class="media">
			  	<div class="media-left media-middle">
	      			<h3 style="margin: 0px;"><span class="glyphicon glyphicon-envelope"></span></h3>
			  	</div>
			  	<div class="media-body text-redes">
			    	<h4 class="media-heading">Cotizaciones</h4>
			    	<small>
			    		<?php 
			    			$cor = new ClsCorreo();
			    			$varLista = $cor->toList();
			    			if( count($varLista) > 0 ){
								foreach($varLista as $fila){
									echo $fila[1] . "<br>";
								}
							}
			    		?>
			    	</small>
			  	</div>
			</div>
    	</div>
    	<div class="divMedia col-xs-6 col-sm-3">
    		<div class="media">
			  	<div class="media-left media-middle">
	      			<h3 style="margin: 0px;"><i class="fa fa-truck" aria-hidden="true"></i></h3>
			  	</div>
			  	<div class="media-body text-redes">
			    	<h4 class="media-heading">Envío de Productos</h4>
			    	<small>
			    		<?php 
			    			$env = new ClsEnvios();
			    			$varLista = $env->get();
			    			echo $varLista[0][1];
			    		?>
			    	</small>
			  	</div>
			</div>
    	</div>
    	<div class="divMedia col-xs-6 col-sm-3">
    		<div class="media">
			  	<div class="media-left media-middle">
	      			<h3 style="margin: 0px;"><span class="glyphicon glyphicon-credit-card"></span></h3>
			  	</div>
			  	<div class="media-body text-redes">
			    	<h4 class="media-heading">Tarjeta de crédito</h4>
			    	<small>
			    		<?php 
			    			$tar = new ClsTarjeta();
			    			$varLista = $tar->get();
			    			echo $varLista[0][1];
			    		?>
			    	</small>
			  	</div>
			</div>
    	</div>
    </div>
    <div class="col-xs-12 col-sm-offset-1 col-sm-10 sin-padding text-center divOfertas">
		<h1 class="titleDiv">Nuestras Ofertas</h1>
    </div>
    <div class="col-xs-12 col-sm-offset-1 col-sm-10">
    	<?php 
    		$oferta = new ClsOferta();
    		$varLisT1 = $oferta->toListTip1();
    		if( count($varLisT1) > 0 ){
				foreach($varLisT1 as $fila){
					echo '<div class="col-xs-6 col-sm-3" style="margin-top: 10px;">
					    	<div style="position: absolute; top: 10px; right: 20px;">
								<span class="oferta">-' . $fila[1] . '%</span>' .
							'</div>' .
					    	'<img src="admin/images/ofertas/' . $fila[2] . '" alt="Oferta" class="img-responsive" style="height: 300px;">' .
					    '</div>';
				}
			}
    		
    	?>
    </div>
	<div id="divProductos" class="col-xs-12 col-sm-offset-1 col-sm-10 sin-padding text-center divProductos">
		<h1 class="titleDiv">Productos</h1>
    </div>
    <?php 
    	$categoria = new ClsCategoria();
    	$varLista = $categoria->toList();
    ?>
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 sin-padding">
		<div class="col-xs-12 col-sm-3">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php 
					if( count($varLista) > 0 ){
						$i = 0;
						foreach($varLista as $fila){
							if( $i != 0 ){
								echo '<div class="panel panel-default">' . 
									    '<div class="accordion-top" role="tab" id="headingOne">' .
									      	'<h4 class="panel-title">' .
									        	'<a role="button" data-toggle="collapse" data-parent="#accordion"' .
									        		'href="#collapse' . $i . '" aria-expanded="true" aria-controls="collapseOne" onclick="verProdPrin(\'prod' . $i . '\',\'prod'. $i . '\');">
									          		<span class="glyphicon glyphicon-chevron-right"></span> ' . $fila[1] . 
									        	'</a>' .
									      	'</h4>' .
									    '</div>' .
								  	'</div>';
							}
							$i++;
						}
					}
				?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-9">
			<div class="tab-content" id="contentTabs">
				<div role="tabpanel" class="tab-pane fade in" id="prodBusq">
					
				</div>
				<?php
					if( count($varLista) > 0 ){
						$i = 0;
						foreach($varLista as $fila){
							if( $i != 0 ){
								$act = ( $i == 1 ? "active" : "");
								echo '<div role="tabpanel" class="tab-pane fade in ' . $act . '" id="prod' . $i . '">' .
										'<div class="col-xs-12">' .
											'<img src="admin/images/products/' . $fila[2] . '" alt="categoria" class="img-responsive" style="width: 100%; height: 300px;">' .
										'</div>';
										$categoria->setIdCategoria($fila[0]);
										$oferta->setCategoria($categoria);
										$varLisT2 = $oferta->toListTip2();
							    		if( count($varLisT2) > 0 ){
											foreach($varLisT2 as $filOfe){
												echo '<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">' .
														'<div style="position: absolute; top: 10px; right: 20px;">' .
															'<span class="oferta">-' . $filOfe[1] . '%</span>' .
														'</div>' .
														'<img src="admin/images/ofertas/' . $filOfe[2] . '" alt="Oferta" class="img-responsive" style="width: 100%; height: 200px;">' .
													'</div>';
											}
										}else{
											echo "No hay ofertas en esta categoria";
										}

										$producto = new ClsProducto();
										$categoria->setIdCategoria($fila[0]);
										$producto->setCategoria($categoria);
										$varLisPr = $producto->toListCat();
										if( count($varLisPr) > 0 ){
											echo '<div class="col-xs-12">';
											foreach($varLisPr as $filPr){
												echo '<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd(\'' . $filPr[1] . '\');">
											    		<div class="divTextProd">
											    			<h5 class="text-product"><b>' . $filPr[1] . '</b></h5>
											    		</div>
											    		<div class="divImgProd">
											    			<img src="admin/images/products/' . $filPr[6] . '" class="imgProd">
											    			<div class="border-product"></div>
											    			<div class="footer-product">
												    			<small>' . substr($filPr[2],0,70) . '...</small>
												    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd(\'' . $filPr[1] . '\');">Ver más</button>
												    		</div>
											    		</div>
											    	</div>';
											}
											echo '</div>';
										}
								echo '</div>';
							} 
							$i++;
						}
					}
				?>
				<!--
				<div role="tabpanel" class="tab-pane fade in active" id="prod1">
					<div class="col-xs-12">
						<img src="images/products/prod_madera.jpg" alt="" class="img-responsive" style="width: 100%; height: 300px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_1.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_2.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_3.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12">
						<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>TORNILLO</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>CACHIMBO</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_2.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>COPAIBA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_3.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>BOLAINA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_4.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>CAPIRONA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_5.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>HUAYRURO</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_6.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>EUCALIPTO</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_7.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>PINO RADIATA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_8.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>PINO AMERICANO</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_8.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>CATAHUA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_8.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>MOHENA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_8.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
					</div>
				</div>
				<div role="tabpanel" class="hidden-xs tab-pane fade in" id="prod2">
					<div class="col-xs-12">
						<img src="images/products/prod_tableros.jpg" alt="" class="img-responsive" style="width: 100%; height: 300px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_1.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_2.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_3.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12">
						<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>MELAMINA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>AGLOMERADOS</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>MDF</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>OSB</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>NORDEX</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>	
					</div>
				</div>
				<div role="tabpanel" class="hidden-xs tab-pane fade in" id="prod3">
					<div class="col-xs-12">
						<img src="images/products/prod_triplay.jpg" alt="" class="img-responsive" style="width: 100%; height: 300px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_1.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_2.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_3.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12">
						<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>LUPUANA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>FENÓLICO PINO</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>FEN. DOBLE FILM</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
					</div>
				</div>
				<div role="tabpanel" class="hidden-xs tab-pane fade in" id="prod4">
					<div class="col-xs-12">
						<img src="images/products/prod_puertas.jpg" alt="" class="img-responsive" style="width: 100%; height: 300px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_1.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_2.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12 col-sm-4" style="margin-top: 10px;">
						<div style="position: absolute; top: 10px; right: 20px;">
							<span class="oferta">-10%</span>
						</div>
						<img src="images/products/member_3.jpg" alt="" class="img-responsive" style="width: 100%; height: 200px;">
					</div>
					<div class="col-xs-12">
						<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>ECONÓMICA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>ENCHAPADA</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>EXTERIOR</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd('tornillo');">
				    		<div class="divTextProd">
				    			<h5 class="text-product"><b>TROPICAL</b></h5>
				    		</div>
				    		<div class="divImgProd">
				    			<img src="images/products/member_1.jpg" class="imgProd">
				    			<div class="border-product"></div>
				    			<div class="footer-product">
					    			<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt impedito..</small>
					    			<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd('tornillo');">Ver más</button>
					    		</div>
				    		</div>
				    	</div>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>
	<!-- Cliente --> 
	<div id="divMarca" class="col-xs-12 col-sm-offset-1 col-sm-10 sin-padding text-center divMarca">
		<h1 class="titleDiv">MARCAS</h1>
	</div>
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 cDivMarc">
		<?php 
			$marca = new ClsMarca();
			$varLista = $marca->toList();
			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					echo '<div class="col-xs-6 col-sm-3 divMarc aniview animated" data-av-animation="fadeInLeft">
							<div class="col-xs-12 divImgMarc">
								<img src="admin/images/marcas/' . $fila[2] . '" alt="" class="imgMarca img-responsive">
							</div>
						</div>';
				}
			}
		?>
		<!--
		<div class="col-xs-6 col-sm-3 divMarc aniview animated" data-av-animation="fadeInLeft">
			<div class="col-xs-12 divImgMarc">
				<img src="images/marcas/1.jpg" alt="" class="imgMarca img-responsive">
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 divMarc aniview animated" data-av-animation="fadeInLeft">
			<div class="col-xs-12 divImgMarc">
				<img src="images/marcas/2.png" alt="" class="imgMarca img-responsive">
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 divMarc aniview animated" data-av-animation="fadeInLeft">
			<div class="col-xs-12 divImgMarc">
				<img src="images/marcas/3.jpg" alt="" class="imgMarca img-responsive">
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 divMarc aniview animated" data-av-animation="fadeInLeft">
			<div class="col-xs-12 divImgMarc">
				<img src="images/marcas/4.png" alt="" class="imgMarca img-responsive">
			</div>
		</div>
		-->
	</div>
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 sin-padding">
		<div class="col-xs-12 sin-padding" style="margin-top: 10px; margin-bottom: 10px;">
			<ul class="tabMarcas nav nav-tabs" style="padding-top: 15px;">
				<?php 
					if( count($varLista) > 0 ){
						$i = 0;
						foreach($varLista as $fila){
							$act = ( $i==0 ? "active" : "" );
							echo '<li role="presentation" class="' . $act . '"><a href="#' . $fila[1] . '" aria-controls="' . $fila[1] . '" role="tab" data-toggle="tab" class="lnkTabMarcas">' . strtoupper($fila[1]) .  '</a></li>';
							$i++;
						}
					}
				?>
				<!--
			  	<li role="presentation" class="active"><a href="#novopan" aria-controls="novopan" role="tab" data-toggle="tab" class="lnkTabMarcas">NOVOPAN</a></li>
			  	<li role="presentation"><a href="#maderba" aria-controls="novopan" role="tab" data-toggle="tab"  class="lnkTabMarcas">FIBRAPLAC</a></li>
			  	<li role="presentation"><a href="#masisa" aria-controls="novopan" role="tab" data-toggle="tab"  class="lnkTabMarcas">MASISA</a></li>
			  	<li role="presentation"><a href="#vesto" aria-controls="novopan" role="tab" data-toggle="tab"  class="lnkTabMarcas">VESTO</a></li>
			  	-->
			</ul>
		</div>
		<div class="tab-content">
			<?php
				if( count($varLista) > 0 ){
					$i = 0;
					foreach($varLista as $fila){
						$act = ( $i==0 ? "active" : "" );
						echo '<div role="tabpanel" class="tab-pane fade in ' . $act . '" id="' . $fila[1] . '">';
						$marcaProd = new ClsMarcaProd();
						$marca->setIdMarca($fila[0]);
						$marcaProd->setMarca($marca);
						$varLisMP = $marcaProd->toListMarca();
						if( count($varLisMP) > 0 ){
							foreach($varLisMP as $fila){
								echo '<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
										<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
											<div class="col-xs-12 sin-padding">
												<img src="admin/images/marcas/productos/' . $fila[2] . '" class="imgProdMarca img-responsive">
											</div>
											<div class="col-xs-12 sin-padding">
												<h1 class="text-center textMarcaProd">' . $fila[1] . '</h1>';
												$marCol = new ClsMarcaProdCol();
												$marcaProd->setIdMarcaProd($fila[0]);
												$marCol->setMarcaProd($marcaProd);
												$varLisCol = $marCol->toList();
												if( count($varLisCol) > 0 ){
													echo '<div class="col-xs-12 sin-padding">
																<small>Colores disponibles</small><br>';
													foreach($varLisCol as $fila){
														echo '<div class="color col-xs-2 divColor" style="background-color: ' . $fila[1] . ';"></div>';
													}
													echo '</div>';
												}
								echo('		</div>
										</div>
									</div>');
							}
						}					
						echo '</div>';
						$i++;
					}
				}
			?>
			<!--
			<div role="tabpanel" class="tab-pane fade in active" id="novopan">
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/novopan_mdp_panel_enchapado.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">MDP Enchapado</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<small>Colores disponibles</small><br>
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/novopan_tablero_mdp.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">Tablero MDP</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<small>Colores disponibles</small><br>
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/novopan_mdp_encofrado.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">MDP EncOFrado</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<small>Colores disponibles</small><br>
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/novopan_mdp_tropical.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">MDP Tropical</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<small>Colores disponibles</small><br>
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/novopan_mdf_pelikano.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">MDF PELICANO</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<small>Colores disponibles</small><br>
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/novopan_canto.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">CANTO</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<small>Colores disponibles</small><br>
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade in" id="maderba">
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/fibraplac_montego.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">Montego</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/fibraplac_portland.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">Portland</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/fibraplac_vanilla.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">Vanilla</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/fibraplac_murano.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">Murano</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade in" id="masisa">
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/masisa_mdp.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">MDP</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/masisa_mdf.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">MDF</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/masisa_enchapado.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">Enchapada</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/masisa_ecoplac.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">ECOPLAC</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/masisa_melamina.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">MELAMINA</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/masisa_rev_enchapado.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">REV. ENCHAPADO</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade in" id="vesto">
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/vesto_nature.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">NATURE</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/vesto_tendencia.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">TENDENCIA</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/vesto_clasico.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">CLASICO</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/vesto_textil.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">TEXTIL</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 sin-padding divMarcaProd">
					<div class="col-xs-12 divMarcaProdIn fadeInLeftBig animated">
						<div class="col-xs-12 sin-padding">
							<img src="images/marcas/productos/vesto_unicolor.jpg" class="imgProdMarca img-responsive">
						</div>
						<div class="col-xs-12 sin-padding">
							<h1 class="text-center textMarcaProd">UNICOLOR</h1>
						</div>
						<div class="col-xs-12 sin-padding">
							<div class="color col-xs-2 divColor color1"></div>
							<div class="color col-xs-2 divColor color2"></div>
							<div class="color col-xs-2 divColor color3"></div>
						</div>	
					</div>
				</div>
			</div>
			-->
  		</div>
	</div>
	<!-- Nosotros -->
	<div id="divNosotros" class="col-xs-12 col-sm-offset-1 col-sm-5" style="height: 315px; color: #FFFFFF; margin-top: 50px; background-image: url(images/fondo_somos.jpg); background-size: cover;">
		<span class="titleNosotros text-center">Acerca de Nosotros</span>
		<div id="tabSomos" class="panel-body">
    		<ul class="nav nav-pills text-center">
			  	<li role="presentation" class="active">
			  		<a href="#somos" aria-controls="somos" role="tab" class="lnkNosotros" data-toggle="tab">Somos</a>
			  	</li>
			  	<li role="presentation">
			  		<a href="#mision" aria-controls="mision" class="lnkNosotros" data-toggle="tab">Misión</a>
			  	</li>
			  	<li role="presentation">
			  		<a href="#vision" aria-controls="vision" class="lnkNosotros" data-toggle="tab">Visión</a>
			  	</li>
			</ul>
  		</div>
  		<?php 
  			$nos = new ClsNosotros();
  			$varLista = $nos->get();
  			if( count($varLista) > 0 ){
				foreach($varLista as $fila){
					echo '<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="somos">
								<p>' . $fila[1] . '</p>
							</div>
							<div role="tabpanel" class="tab-pane fade in" id="mision">' . $fila[2] . 
							'</div>
							<div role="tabpanel" class="tab-pane fade in" id="vision">' . $fila[3] .
							'</div>
				  		</div>';
				  	echo '<div id="divCarac" class="col-xs-12 sin-padding">
							<div class="col-xs-4 text-center sin-padding" style="word-wrap: break-word;">
								<h2><span class="glyphicon glyphicon-ok-sign" style="color: #ffc925"></span></h2>
								<h5>' . $fila[4] . '</h5>
							</div>
							<div class="col-xs-4 text-center sin-padding" style="word-wrap: break-word;">
								<h2><span class="glyphicon glyphicon-ok-sign" style="color: #ffc925"></span></h2>
								<h5>' . $fila[5] . '</h5>
							</div>
							<div class="col-xs-4 text-center sin-padding" style="word-wrap: break-word;">
								<h2><span class="glyphicon glyphicon-ok-sign" style="color: #ffc925"></span></h2>
								<h5>' . $fila[6] . '</h5>
							</div>
						</div>';
				}
			}
  		?>
	</div>
	<div class="col-xs-12 col-sm-5 sin-padding" style="margin-top: 50px;">
		<iframe class="col-xs-12 sin-padding" height="315" src="https://www.youtube.com/embed/nD2-O5kKSiE" frameborder="0" allowfullscreen></iframe>
	</div>
	<!-- Fin de nosotros -->
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 sin-padding divClient">
		<h2 class="text-tit-cli aniview animated" data-av-animation="bounceInLeft">Valoramos a nuestros clientes corporativos</h2>
		<p class="text-desc-cli">Con gustro brindamos a nuestros clientes habituales las mejores ofertas y descuentos.</p>
		<div class="col-xs-offset-1 col-xs-10">
			<div class="divClients text-center">
				<?php
					$cliente = new ClsCliente();
					$varLista = $cliente->toList();
					if( count($varLista) > 0 ){
						foreach($varLista as $fila){
							echo '<div class="divCliImg">
									<img src="admin/images/clients/' . $fila[1] . '" alt="">
								</div>';
						}
					}
				?>
				<!--
				<div class="divCliImg">
					<img src="images/clients/client_1.png" alt="">
				</div>
				<div class="divCliImg">
					<img src="images/clients/client_2.png" alt="">
				</div>
				<div class="divCliImg">
					<img src="images/clients/client_3.png" alt="">
				</div>
				<div class="divCliImg">
					<img src="images/clients/client_4.png" alt="">
				</div>
				-->
			</div>
		</div>
	</div>
	<!--
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 sin-padding">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  	<ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		    	<li data-target="#myCarousel" data-slide-to="2"></li>
		  	</ol>
		  	<div class="carousel-inner">
		    	<div class="item active">
		      		<img src="http://lorempixel.com/1000/400/" alt="Los Angeles" class="img-responsive" style="width: 100%; height: 300px;">
		      		<div class="carousel-caption">
			        	<h3>Valoramos a nuestros clientes corporativos</h3>
			        	<p>Con gustro brindamos a nuestros clientes habituales las mejores ofertas y descuentos. Estamos contentos de que nuestros clientes recomienden nuestros servicios y expertos a sus amigos y vecinos.</p>
			      	</div>
			    </div>
			    <div class="item">
			      	<img src="http://lorempixel.com/1000/400/sports/Dummy-Text/" alt="Chicago"  class="img-responsive" style="width: 100%;height: 300px;">
			      	<div class="carousel-caption">
			        	<h3>Valoramos a nuestros clientes corporativos</h3>
			        	<p>Con gustro brindamos a nuestros clientes habituales las mejores ofertas y descuentos. Estamos contentos de que nuestros clientes recomienden nuestros servicios y expertos a sus amigos y vecinos.</p>
			      	</div>
			    </div>
			    <div class="item">
			      	<img src="http://lorempixel.com/1000/400/" alt="New York" class="img-responsive" style="width: 100%;height: 300px;">
			      	<div class="carousel-caption">
			        	<h3>Valoramos a nuestros clientes corporativos</h3>
			        	<p>Con gustro brindamos a nuestros clientes habituales las mejores ofertas y descuentos. Estamos contentos de que nuestros clientes recomienden nuestros servicios y expertos a sus amigos y vecinos.</p>
			      	</div>
			    </div>
			</div>
		  	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 sin-padding" style="margin-top: 10px; margin-bottom: 10px;">
		<div class="col-xs-12 col-sm-6 divCliente sin-padding">
			<h1 class="text-cliente">Clientes</h1>
			<div class="border-CliMarc"></div>
			<div class="divLupa"></div>
		</div>
		<div class="col-xs-12 col-sm-6 divMarca sin-padding">
			<h1 class="text-cliente">Marcas</h1>
			<div class="border-CliMarc"></div>
			<div class="divLupaMarc"></div>
		</div>
	</div>
	-->
	<!-- Fin de clientes -->
	<!-- Sub footer -->
	<div class="col-xs-12" style="font-size: 14px; background-color: #22170C; color: #ffF;padding: 30px;">
	  	<div class="row">
	      	<div class="col-sm-3">
    		 	<img src="images/logo_letra.fw.png" style="width: 80% ; padding: 20px; padding-bottom: 20px;">
    		 	<p style="text-align: justify;">Importante y reconocida distribuidora de madera que ofrece productos a publico en general.<br><br> Nos caracterizamos por la atención y entrega oportuna del material para el avance de sus proyectos.</p>
	    	</div> 
	    	<div class="col-sm-3" style="padding: 10px 10px 10px 20px;">
	      		<h4 style="border-bottom: solid 3px white; padding-bottom: 20px;">MENU</h3><br><br>
	      		<ul class="list-group">
	    			<span class="glyphicon glyphicon-home"></span> 
	    			<a href="#" id="lnkInicio2" style="color: #FFFFFF;" onclick="scrollWin('divProm');">Inicio</a>
	    			<br><br>
	    			<span class="glyphicon glyphicon-tree-conifer"></span> 
	    			<a href="#lnkProductos2" id="lnkProductos2" style="color: #FFFFFF;" onclick="scrollWin('divProductos');">Catálogo de productos</a>
	    			<br><br>
	    			<span class="glyphicon glyphicon-leaf"></span>
	    			<a href="#" id="lnkMarcas2" style="color: #FFFFFF;" onclick="scrollWin('divMarca');">Marcas</a>
	    			<br><br>
	    			<span class="glyphicon glyphicon-grain"></span>
	    			<a href="#" id="lnkNosotros2" style="color: #FFFFFF;" onclick="scrollWin('divNosotros');">Nosotros</a>
	    			<br><br>
	    			<span class="glyphicon glyphicon-envelope"></span>
	    			<a href="#" id="lnkContacto2" style="color: #FFFFFF;">Contáctanos</a>
	    			<br>
	    		</ul>
	    	</div>
	    	<div class="col-sm-3" style="padding: 10px 10px 10px 20px;">
	      		<h4 style="border-bottom: solid 3px white; padding-bottom: 20px;">ATENCIÓN AL CLIENTE</h3><br><br>
	      		<ul class="list-group" >
	    			<i class="fa fa-volume-control-phone fa-1x" aria-hidden="true"></i> 
					<?php 
			  			$tel = new ClsTelefono();
			  			$varLista = $tel->get();
			  			echo '<small>' . $varLista[0][1] . '</small>';
			  		?>
	    			<br><br>
	    			
					<?php 
		    			$cor = new ClsCorreo();
		    			$varLista = $cor->toList();
		    			if( count($varLista) > 0 ){
							foreach($varLista as $fila){
								echo '<i class="fa fa-envelope fa-1x" aria-hidden="true"></i> ';
								echo $fila[1] . "<br>";
							}
						}
		    		?>
	    		</ul>
	    		<h4>Horario de Atención:</h4>
	    		<p>
	    			<?php
	    				$hor = new ClsHorario();
	    				$varLista = $hor->get();
	    				echo $varLista[0][1];
	    			?>
	    		</p>
	    		<h4>Envios de Productos:</h4>
	    		<p>
	    			<?php 
		    			$env = new ClsEnvios();
		    			$varLista = $env->get();
		    			echo $varLista[0][1];
		    		?>
	    		</p>
	    	</div>
	    	<div class="col-sm-3" style="padding: 10px">
	      		<h4 style="border-bottom: solid 3px white; padding-bottom: 20px;">ENCUENTRANOS</h3><br>      
	      		<div id="map" style="width: 100%;  height: 270px;"></div><br>
	      		<ul class="list-group">
		      		<i class="fa fa-map-marker fa-1x" aria-hidden="true"></i>
		      		<span style="line-height: 0px;">Avenida Pachacútec 6301<br>Villa Maria Del Triunfo</span> 
	      		</ul> 
	    	</div> 	
	  	</div>
	</div>
	<!-- Fin de sub footer -->
	<!-- Footer --> 
	<div class="col-xs-12" style="padding: 0px 0px;">
		<footer>
			<p style="text-align: center; height: 80px; border-right: 0; background: #412914; color: #fff; padding-top: 30px; margin-bottom: 0px;">Todos los Derechos Reservados &copy; Madera Las America 2017.</p>
		</footer>
	</div>
	<div class="modal fade" id="divModProd" tabindex="-1" role="dialog">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">Producto</h4>
	      		</div>
	      		<div class="modal-body">
	        		<div class="col-xs-12 col-sm-6 sin-padding">
						<div class="sin-padding col-xs-offset-3 col-xs-6 col-sm-offset-1 col-sm-10">
							<img id="imgModPr" src="" class="img-responsive">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 text-justify" id="dTextProd">
						<!--
						<p><b style="color: #ad540b;">CARACTERISTICAS: </b> Madera peruana por excelencia, su bajo costo y amplia versatilidad. Alta resistencia a los ataques biológicos, no se pica ni se honguea.</p>
						<p><b style="color: #ad540b;">USOS: </b> Encofrado, construcciones, muebles y acabados.</p>
						<p><b style="color: #ad540b;">DENSIDAD BÁSICA: </b> 0.45 gr / cm3</p>
						<p><b style="color: #ad540b;">DISPONIBILIDAD: </b> Espesores de 1" a 4" con anchos y largos variados.</p>
						-->
					</div>
	      		</div>
	      		<div class="modal-footer">
	      		</div>
	    	</div><!-- /.modal-content -->
	  	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!--  Fin Footer --> 
<script src="jquery/jquery-3.1.1.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.eislideshow.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='js/camera.js'></script>-->
<script type='text/javascript' src='js/overlaySlider.js'></script>
<script src="js/jquery.aniview.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<!-- script google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYfQL87uJnWqB4bsgWRu08c-z7PodMPE8&libraries=places&callback=createMap"
async defer></script>
<script>
	var tb, lc, lc2;
	tb = $("#txtBuscar");
	lc = $("#lnkContacto");
	lc2 = $("#lnkContacto2");
	$(document).ready(Ini);
	function Ini() {
		//$(".ei-slider").css("height", window.innerHeight - 113 - $("#divCarac").height() );
		$(".imgLoaded").css({"height":"100%","margin-top":"0px"});
		$(window).scroll(function() {
	    	if($(this).scrollTop() > 20){  /*height in pixels when the navbar becomes non opaque*/ 
	        	$('.btnReg').css('display','block');
	    	} else {
	    	    $('.btnReg').css('display','none');
	    	}
		});

		imgMedio(".divMarc",".imgMarca");

		var options = {
	        animateThreshold: 100
	    };
	    $('.aniview').AniView(options);
	}

    function verProdPrin(div, divMov){
    	// Segun la opcion de categoria
    	$("#contentTabs>.tab-pane").removeClass("active");
    	$("#contentTabs>.fade").css("opacity","0");
    	$("#"+div).addClass("active");
    	$("#"+div).css("opacity","1");
    	if( window.innerHeight < 768 ) {
    		$('html, body').animate({
				scrollTop: $("#"+divMov).offset().top - 200
		    }, 1000);
    	}else{
    		$('html, body').animate({
				scrollTop: $("#"+divMov).offset().top - 150
		    }, 1000);	
    	}
    }

    tb.keyup(function(e){
    	e.preventDefault();
    	if( e.which == 13 ){
    		verProdPrin('prodBusq','divProductos');
    		buscarProductos(tb.val());
    		/*$('html, body').animate({
				scrollTop: $("#divProductos").offset().top - 150
		    }, 1000);*/
    	}
    });

    $('#myModal').modal({
	  keyboard: true
	});

    function mostrarProd(producto){
    	$.ajax({
	        data:  {"op" : "get", "nombre" : producto},
	        url:   'admin/controller/C_Producto.php',
	        type:  'post',
	        success:  function (response) {
	            response = $.parseJSON(response);
	            //td.val( response[0].dc );
	            $("#imgModPr").attr("src","admin/images/products/" + response[0].ni)
	            $('#dTextProd').html("<p><b style='color: #ad540b;'>" +
    							"CARACTERISTICAS: </b> " + response[0].ca + "</p>" +
							"<p><b style='color: #ad540b;'>USOS: </b> " + response[0].us + "</p>" + 
							"<p><b style='color: #ad540b;'>DENSIDAD BÁSICA: </b> " + response[0].de + "</p>" + 
							"<p><b style='color: #ad540b;'>DISPONIBILIDAD: </b> " + response[0].di + "</p>");
	            $('#divModProd').modal('show');
	        }
	    });
    }

    function buscarProductos(prod){
	    var datos = {"op" : "toListProd", "nombre" : prod };
	    //Utilzo la funcion post, para hacer el llamado ajax
	    $("#prodBusq").html("");
	    $.post('admin/controller/C_Producto.php', datos, function(lsProds){
	        $.each(lsProds, function(index, fila){
	        	$("#prodBusq").html('<div class="col-xs-12">' +
										'<div class="col-xs-6 col-sm-3 divProd" onclick="mostrarProd(\'' + fila.no + '\');">' +
								    		'<div class="divTextProd">' +
								    			'<h5 class="text-product"><b>' + fila.no + '</b></h5>' +
								    		'</div>' +
								    		'<div class="divImgProd">' +
								    			'<img src="images/products/' + fila.ni.toUpperCase() + '" class="imgProd">' +
								    			'<div class="border-product"></div>' +
								    			'<div class="footer-product">' +
									    			'<small>' + fila.ca.substring(0,70) + '...</small>' +
									    			'<button type="button" class="btn btn-warning btn-block" onclick="mostrarProd(\'' + fila.no + '\');">Ver más</button>' +
									    		'</div>' +
								    		'</div>' + 
								    	'</div>' +
								    '</div>');
	        });
	    }, 'json');
	}


    function scrollWin(div){
    	switch(div){
    		case 'divProm':
    			$('html, body').animate({
					scrollTop: $(".divProm").offset().top - 150
			    }, 1000);
    			break;
    		case 'divProductos':
    			$('html, body').animate({
					scrollTop: $("#divProductos").offset().top - 150
			    }, 1000);
    			break;
    		case 'divMarca':
    			$('html, body').animate({
					scrollTop: $("#divMarca").offset().top - 150
			    }, 1000);
    			break;
    		case 'divNosotros':
    			$('html, body').animate({
					scrollTop: $("#divNosotros").offset().top - 150
			    }, 1000);
    			break;
    	}
    }

    lc.click(function(){
    	$('#contact').animate({
    		opacity: 1,
    	}, 1000);
    	$("#contact").css("display","block");
    	$("#facebook").css("display","none");
    });

    lc2.click(function(){
    	$('#contact').animate({
    		opacity: 1,
    	}, 1000);
    	$("#contact").css("display","block");
    	$("#facebook").css("display","none");
    });

    $(".btnReg").click(function(){
    	$('html, body').animate({
			scrollTop: $(".divProm").offset().top - 150
	    }, 1000);
    });

    $(".chat").click(function(){
    	$('#facebook').animate({
    		opacity: 1,
    	}, 1000);
    	$("#facebook").css("display","block");
    	$("#contact").css("display","none");
    });

    $(".divMinim").click(function(){
    	$('#facebook').animate({
    		opacity: 0,
    	}, 1000);
    	$("#facebook").css("display","none");
    });

	$(".contact").click(function(){
    	$('#contact').animate({
    		opacity: 1,
    	}, 1000);
    	$("#contact").css("display","block");
    	$("#facebook").css("display","none");
    });

    $(".divMinimCont").click(function(){
    	$('#contact').animate({
    		opacity: 0,
    	}, 1000);
    	$("#contact").css("display","none");
    });

    
    function imgMedio(div, img){
    	$(img).css("position", "relative");
	    $(img).css("top", function(){
			var w_h = $(div).height() / 2;
			var b_h = $(img).height() / 2;
			return w_h - b_h;
		}); 
    }

	$('.divClients').slick({
        infinite: true, 
        centerMode: true,
        variableWidth: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        	{
        		breakpoint: 600,
        		settings: {
        			slidesToShow: 2,
        			slidesToScroll: 2
        		}
        	},
        	{
        		breakpoint: 480,
        		settings: {
        			slidesToShow: 1,
        			slidesToScroll: 1
        		}
        	}
        ]
	});

	var map;
	var marker;

	function initMap(lati, longi, z) {
		map = new google.maps.Map(document.getElementById('map'), {
	    	center: {lat: lati, lng: longi},
	      	zoom: z
	    });

	    marker = new google.maps.Marker({
		    position: map.getCenter(),
		    title: 'MADERA LAS AMERICA',
		    icon: 'images/marker.png'
		});
		marker.setMap(map);
	}

	function createMap() {
		initMap(-12.203392, -76.929149,15);
	}
</script>
</body>
</html>
