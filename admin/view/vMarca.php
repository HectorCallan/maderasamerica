<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-xs-12">
                <div class="card">
					<div class="header">
                        <span class="title">Marcas</span>
                        <button type="button" class="btn btn-info btn-fill pull-right" id="btnNueMar">Agregar</button>
                    </div>
					<div class="content">
						<div id="panelMarca" class="table-responsive" style="margin-top: 20px;">
                            <table id='tbMarcas' border='0' cellspacing='0' cellpadding='0' class='table table-striped table-bordered table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Oper.</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Oper.</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>				
					</div>
                </div>
            </div>
            <div id="divProdMarcs" class="col-xs-12">
                <div class="card">
					<div class="header">
                        <span class="title" id="titProdMar">Productos de las marcas</span>
                        <button type="button" class="btn btn-info btn-fill pull-right" id="btnNueMarPr">Agregar</button>
                    </div>
					<div class="content">
						<div id="panelMarPr" class="table-responsive" style="margin-top: 20px;">
                            <table id='tbMarPro' border='0' cellspacing='0' cellpadding='0' class='table table-striped table-bordered table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Colores</th>
                                        <th>Oper.</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--
                                	<tr>
                                		<td align="center">1</td>
                                		<td align="center">MDP Enchapado</td>
                                		<td align="center">
                                			<img src="../images/marcas/productos/novopan_mdp_panel_enchapado.jpg" alt="MDP Enchapado" title="MDP Enchapado" style="height: 50px; width: 50px;">
                                		</td>
                                		<td align="center">
                                			<div class="divColor" style="background-color: red;"></div>
                                			<div class="divColor" style="background-color: green;"></div>
                                		</td>
                                		<td align="center">
                                			<a href="#" onclick="showColor(1,'MDP Enchapado');">
                                				<img src="../images/icons/add.png" alt="Agregar Color" title="Agregar Color" style="height: 30px; width: 30px;">
                                			</a> &nbsp;
                                			<a href="#" onclick="delMarcaProd(1);">
                                				<img src="../images/icons/del.png" alt="Eliminar Producto" title="Eliminar Producto" style="height: 30px; width: 30px;">
                                			</a>
                                		</td>
                                	</tr>
                                    -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Colores</th>
                                        <th>Oper.</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>				
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="divModMarca" tabindex="-1" data-backdrop="false" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header bg-warning">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-warning">Nueva Marca</h4>
      		</div>
      		<div class="modal-body">
      			<div class="row">
            		<div class="col-md-12">
						<div class="form-group">
	                        <label>Nombre</label>
	                        <input type="text" id="txtMarca" class="form-control" placeholder="Nombre">
	                    </div>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-md-12">
						<div class="form-group">
	                        <label>Imagen</label>
	                        <input type="file" id="fImgMar">
	                    </div>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-md-12 text-center">
            			<img id="imgTempMarca" src="" alt="Imagen de la Marca" title="Imagen de la Marca" style="width: 100px; height: 120px; margin: 0 auto;">
            		</div>
            	</div>
      		</div>
      		<div class="modal-footer">
      			<button type="button" class="btn btn-fill btn-warning btn-wd" data-dismiss="modal">Cancelar</button>
	    		<button type="button" id="btnGuaMar" class="btn btn-fill btn-warning btn-wd" data-loading-text="Un momento..." autocomplete="off">Guardar</button>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="divModMarProd" tabindex="-1" data-backdrop="false" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header bg-warning">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-warning" id="titMarProd">Nuevo producto de </h4>
      		</div>
      		<div class="modal-body">
      			<div class="row">
            		<div class="col-md-12">
						<div class="form-group">
	                        <label>Nombre</label>
	                        <input type="text" id="txtNomPrMar" class="form-control" placeholder="Nombre">
	                    </div>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-md-12">
						<div class="form-group">
	                        <label>Imagen</label>
	                        <input type="file" id="fImgMarPr">
	                    </div>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-md-12 text-center">
            			<img id="imgTempMarPr" src="" alt="Imagen del producto" title="Imagen del producto" style="width: 100px; height: 120px; margin: 0 auto;">
            		</div>
            	</div>
      		</div>
      		<div class="modal-footer">
      			<button type="button" class="btn btn-fill btn-warning btn-wd" data-dismiss="modal">Cancelar</button>
	    		<button type="button" id="btnGuaProd" class="btn btn-fill btn-warning btn-wd" data-loading-text="Un momento..." autocomplete="off">Guardar</button>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="divModCol" tabindex="-1" data-backdrop="false" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header bg-warning">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 id="titProdCol" class="modal-title text-warning">Colores de </h4>
      		</div>
      		<div class="modal-body">
      			<div class="row">
            		<div class="col-xs-5">
						<div class="form-group">
	                        <label>Selecciona un color</label>
	                        <input type="color" id="colProd" class="form-control">
	                    </div>
            		</div>
            		<div class="col-xs-2 text-center">
						o
            		</div>
            		<div class="col-xs-5">
						<div class="form-group">
							<label>Escribe el codigo rgb</label>
	                        <input type="text" id="txtColProd" class="form-control" placeholder="Ej: #147841" maxlength="7">
	                    </div>
            		</div>
            	</div>
            	<button type="button" id="btnGuaCol" class="btn btn-info btn-fill pull-right">Guardar</button>
            	<div class="row">
            		<div class="col-md-12">
						<div id="panelColor" class="table-responsive" style="margin-top: 20px;">
                            <table id='tbColores' border='0' cellspacing='0' cellpadding='0' class='table table-striped table-bordered table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Color</th>
                                        <th>Oper.</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                	<tr>
                                		<td align="center">1</td>
                                		<td align="center">
                                			<div class="divColor" style="background-color: red;"></div>
                                		</td>
                                		<td align="center">
                                			<a href="#" onclick="delColor(1);">
                                				<img src="../images/icons/del.png" alt="Eliminar Color" title="Eliminar Color" style="height: 30px; width: 30px;">
                                			</a>
                                		</td>
                                	</tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Color</th>
                                        <th>Oper.</th> 
                                    </tr>
                                </tfoot>
                            </table>
                        </div>	
            		</div>
            	</div>
      		</div>
      		<div class="modal-footer"></div>
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
<script src="../js/dataTables/js/jquery.dataTables.js"></script>
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-notify.js"></script> 
<script src="js/fMarcas.js"></script> 