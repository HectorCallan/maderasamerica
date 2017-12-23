<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-xs-12">
                <div class="card">
					<div class="header">
                        <span class="title">Slider</span>
                    </div>
					<div class="content">
                        <div class="row">
                            <div class="col-xs-12">
        						<div class="divSlider text-center"></div>
                                <button type="submit" class="btn btn-info btn-fill pull-right" id="btnNueSli">Nuevo Slider</button>
                            </div>
                        </div>
					</div>
                </div>
            </div>
            <div class="col-xs-12">
            	<div class="card">
            		<div class="header">
	                    <span class="title">Datos principales</span>
	                </div>
	                <div class="content">
	                	<div class="row">
	                		<div class="col-md-4">
								<div class="form-group">
			                        <label>Teléfono</label>
			                        <input type="text" id="txtTlf" class="form-control" placeholder="Teléfono" value="">
			                    </div>
	                		</div>
	                		<div class="col-md-4">
								<div class="form-group">
			                        <label>Envio de productos</label>
			                        <input type="text" id="txtEnvio" class="form-control"  placeholder="Envio de productos" value="">
			                    </div>
	                		</div>
	                		<div class="col-md-4">
								<div class="form-group">
			                        <label>Tarjetas</label>
			                        <input type="text" id="txtTar" class="form-control" placeholder="Tarjetas" value="">
			                    </div>
	                		</div>
	                	</div>
	                	<div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Correo 1</label>
                                    <input type="text" id="txtCor1" class="form-control" placeholder="Correo 1" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Correo 2</label>
                                    <input type="text" id="txtCor2" class="form-control" placeholder="Correo 2" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Horario de atención</label>
                                    <input type="text" id="txtHor" class="form-control" placeholder="Horario" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Somos</label>
                                    <textarea rows="5" class="form-control" placeholder="Somos" id="txtSomos"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Misión</label>
                                    <textarea rows="5" class="form-control" placeholder="Misión" id="txtMision"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Visión</label>
                                    <textarea rows="5" class="form-control" placeholder="Visión" id="txtVision"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Caracteristica 1</label>
                                    <input type="text" id="txtCar1" class="form-control" placeholder="Caracteristica 1" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Caracteristica 2</label>
                                    <input type="text" id="txtCar2" class="form-control" placeholder="Caracteristica 1" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Caracteristica 3</label>
                                    <input type="text" id="txtCar3" class="form-control" placeholder="Caracteristica 1" value="">
                                </div>
                            </div>
                        </div>
                        <button type="button" id="btnGuardar" class="btn btn-info btn-fill pull-right">Guardar</button>
                        <div class="clearfix"></div>
	                </div>	                
                </div>
            </div>
            <div class="col-xs-12">
                <div class="card">
					<div class="header">
                        <span class="title">Clientes</span>
                    </div>
					<div class="content">
                        <div class="row">
                            <div class="col-xs-12">
        						<div class="divClients"></div>
                                <button type="submit" class="btn btn-info btn-fill pull-right" id="btnNueCli">Nuevo cliente</button>
                            </div>	
                        </div>	
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="divModSlider" tabindex="-1" data-backdrop="false" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header bg-warning">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-warning">Nuevo Slider</h4>
      		</div>
      		<div class="modal-body">
        		<div class="row">
            		<div class="col-md-12">
						<div class="form-group">
	                        <label>Titulo</label>
	                        <input type="text" id="txtTit" class="form-control" placeholder="Titulo" value="" required>
	                    </div>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-md-12">
						<div class="form-group">
	                        <label>Imagen</label>
	                        <input type="file" id="fImgSlid">
	                    </div>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-md-12 text-center">
            			<img id="imgTempSlid" src="" alt="Imagen de Slider" style="width: 150px; height: 120px; margin: 0 auto;">
            		</div>
            	</div>
      		</div>
      		<div class="modal-footer">
      			<button type="button" class="btn btn-fill btn-warning btn-wd" data-dismiss="modal">Cancelar</button>
	    		<button type="button" id="btnGuaSli" class="btn btn-fill btn-warning btn-wd" data-loading-text="Un momento..." autocomplete="off">Guardar</button>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="divModCli" tabindex="-1" data-backdrop="false" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header bg-warning">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-warning">Nuevo Cliente</h4>
      		</div>
      		<div class="modal-body">
            	<div class="row">
            		<div class="col-md-12">
						<div class="form-group">
	                        <label>Imagen</label>
	                        <input type="file" id="fImgCli">
	                    </div>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-md-12 text-center">
            			<img id="imgTempCli" src="" alt="Imagen de cliente" style="width: 100px; height: 120px; margin: 0 auto;">
            		</div>
            	</div>
      		</div>
      		<div class="modal-footer">
      			<button type="button" class="btn btn-fill btn-warning btn-wd" data-dismiss="modal">Cancelar</button>
	    		<button type="button" id="btnGuaCli" class="btn btn-fill btn-warning btn-wd" data-loading-text="Un momento..." autocomplete="off">Guardar</button>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="divModConf" tabindex="-1" data-backdrop="false" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-warning">Un momento...</h4>
            </div>
            <div class="modal-body">
                ¿Esta seguro de realizar esta operación?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-fill btn-warning btn-wd" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnAcepCon" class="btn btn-fill btn-warning btn-wd" data-loading-text="Un momento..." autocomplete="off">Aceptar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="../jquery/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>	
<script src="../js/bootstrap-notify.js"></script>
<script src="../js/slick.js"></script> 
<script src="js/fGeneral.js"></script> 