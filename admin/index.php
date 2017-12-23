<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Panel de administración</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <!-- Animation library for notifications   -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <!--  CSS Slick  -->
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <link rel="stylesheet" type="text/css" href="../css/slick-theme.css">
    <!--  DataTable core CSS    -->
    <link rel="stylesheet" type="text/css" href="../js/dataTables/css/jquery.dataTables.css" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<style>
		body {
			background-color: #f5bd15;
		}
		.login {
		    -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
		    -moz-box-shadow:    0px 0px 18px 0px rgba(48, 50, 50, 0.48);
		    box-shadow:         0px 0px 18px 0px rgba(48, 50, 50, 0.48);
		    border-radius: 6%;
		    padding: 15px 15px;
		    /*width: 500px;*/
		    background-color: #FFFFFF;
		    margin: 0px 20px;
		}

		.btn-info:focus, .btn-info:hover {
		    background-position: 0;
		}

		.slick-elim {
			background-color: red;
		    color: #FFFFFF;
		    width: 24px;
		    height: 24px;
		    text-align: center;
		    padding-top: 4.5px;
		    font-size: 14px;
		    position: absolute;
		    top: 10px;
		    right: 10px;
		}

		.slick-elimCl {
			background-color: red;
		    color: #FFFFFF;
		    width: 20px;
		    height: 20px;
		    text-align: center;
		    padding-top: 4.5px;
		    font-size: 10px;
		    position: absolute;
		    top: 0px;
		    right: 20px;
		}

		.img-slider-adm {
			height: 300px; 
			width: 100%;
		}

		.divColor {
			display: inline-block;
		    height: 30px;
		    width: 30px;
		    border: 4px solid #ededed;
		    border-radius: 7px;
		}

		@media only screen and (max-width: 768px) {
			.img-slider-adm {
				height: 150px; 
			}
		}
	</style>
</head>
<body>
	<?php
		if( isset($_SESSION['usuario']) && $_SESSION['usuario'] != "" ){
			include_once("../admin/admin.php");
		}else{
	?>
			<div id="wrapper">
				<div id="vertical">
				    <div class="hidden-xs col-md-4"></div>
				    <div class="col-md-4 login">
				      	<section class="login-form">
					        <form method="post" action="#" role="login">
					        	<div class="form-group">
					        		<div class="text-center">
					        			<img src="../images/logo_footer.png" class="img-responsive" alt="" />	
					        		</div>
						        </div>
						        <div class="form-group">
						        	<div style="padding: 0px 0px;">
						        		<input type="text" name="txtUsuario" id="txtUsuario" placeholder="Usuario" required class="form-control input-lg" />
						        	</div>
						        </div>
						        <div class="form-group">
						        	<div style="padding: 0px 0px;">
						        		<input type="password" class="form-control input-lg" id="txtPwd" placeholder="Contraseña" required="" />
						        	</div>
						        </div>
						        <button type="button" id="btnIng" class="btn btn-lg btn-primary btn-block" data-loading-text="Un momento..." autocomplete="off">Ingresar</button>
					        </form>     
					        <div class="form-group">
					          	<a href="#">www.maderasamericas.com</a>
					        </div>
				      	</section>  
				    </div>
				    <div class="hidden-xs col-md-4"></div>
		  		</div>
			</div>
	<?php } ?>
</body>
<script src="../jquery/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/dataTables/js/jquery.dataTables.js"></script>
<script src="../js/modals.js"></script>
<script src="../js/sha1-min.js"></script>
<script src="../js/validateInput.js"></script>
<script src="../js/slick.js"></script> 
<script src="../js/fInputImg.js"></script> 
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="../js/bootstrap-notify.js"></script> 
<script src="../js/light-bootstrap-dashboard.js"></script> 
<script src="js/fUsuarioPanelLog.js"></script>
</html>